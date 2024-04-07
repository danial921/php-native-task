<?php 

namespace App\Controllers;

use App\Models\Departement;
use App\Database;
use Symfony\Component\Routing\RouteCollection;

class DepartementController
{
    public function addDepartement(RouteCollection $routes)
    {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);
    
        if ($data === null) {
            echo json_encode(["error" => "Invalid JSON format"]);
            exit();
        }

        $departement = new Departement();
        $response =  $departement->create([
            'nama' => $data['nama']
        ]); 

        echo json_encode($response);
        exit();
    }

    public function getDepartement(int $id, RouteCollection $routes)
    {

        try {
            $db = new Database();
            $sql = "SELECT * FROM department WHERE IDDept = :id";
            $db->query($sql);
            $db->bind(':id', $id);
            $result = $db->single();

            if ($result) {
                echo json_encode($result);
                return $this;
            } else {
                throw new \Exception("Department not found");
            }
        } catch (\PDOException $e) {

            echo "Error: " . $e->getMessage();
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getAllDepartement(RouteCollection $routes)
    {

        try {
            $db = new Database();
            $sql = "SELECT IDDept, Nama_Dept FROM department";
            $db->query($sql);
            $result = $db->resultSet();

            if ($result) {
                echo json_encode($result);
                return $this;
            } else {
                throw new \Exception("Department not found");
            }
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function editDepartement(int $id, RouteCollection $routes)
    {
        $departement = new Departement();
        $dataDepartement = $departement->getDepartmentById($id);


        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);
    
        if ($data === null) {
            echo json_encode(["error" => "Invalid JSON format"]);
            exit();
        }

        if ($data['nama'] != null ){
            $dataDepartement->setNamaDept($data['nama']);
        }

        $departement = new Departement();
        $response =  $dataDepartement->update($id); 

        echo json_encode($response);
        exit();
    }

    public function hapusDepartement(int $id, RouteCollection $routes)
    {
        $departement = new Departement();
        $dataDepartement = $departement->getDepartmentById($id);

        if (isset($dataDepartement->success) && !$dataDepartement->success) {
            echo json_encode($dataDepartement);
            exit();
        }

        $response =  $dataDepartement->delete($id); 
        echo json_encode($response);
        exit();
    }

    public function mappingDepartemen(RouteCollection $routes){
        try {
            $db = new Database();
            $sql = "SELECT 
                    k.Kota_Penempatan AS City,
                    d.Nama_Dept AS Department,
                    COUNT(*) AS TotalEmployees
                FROM 
                    karyawan k
                    JOIN department d ON k.Department = d.IDDept
                GROUP BY 
                    k.Kota_Penempatan, Department";

            $db->query($sql);
            $result = $db->resultSet();

            $data = [];

            if (!empty($result)) {
                foreach ($result as $row) {
                    $city = $row->City;
                    $division = $row->Department;
                    $totalEmployees = $row->TotalEmployees;

                    if (!isset($data[$city])) {
                        $data[$city] = [];
                    }

                    if (!isset($data[$city][$division])) {
                        $data[$city][$division] = $totalEmployees;
                    } else {
                        $data[$city][$division] += $totalEmployees;
                    }
                }
            }

            echo json_encode($data);

        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}