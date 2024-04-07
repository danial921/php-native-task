<?php 

namespace App\Controllers;

use App\Models\Karyawan;
use App\Database;
use Symfony\Component\Routing\RouteCollection;

class KaryawanController
{
    // Show the product attributes based on the id.
    public function addKaryawan(RouteCollection $routes)
    {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);
    
        if ($data === null) {
            echo json_encode(["error" => "Invalid JSON format"]);
            exit();
        }

        $karyawan = new Karyawan();
        $response =  $karyawan->create([
            'nama' => $data['nama'],
            'noKtp'=> $data['no-ktp'],
            'telp'=> $data['telp'],
            'kotaTinggal'=> $data['kota-tinggal'],
            'tanggalLahir'=> $data['tgl-lahir'],
            'tanggalMasuk'=> $data['tgl-masuk'],
            'department'=> $data['department'],
            'KotaPenempatan'=> $data['kota-penempatan'],
        ]); 

        echo json_encode($response);
        exit();


        $karyawan = new Karyawan();
        echo json_encode($response);
        exit();
    }

    public function editKaryawan(string $id, RouteCollection $routes)
    {
        $karyawan = new Karyawan();
        $dataKaryawan = $karyawan->getKaryawanById($id);

        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);
    
        if ($data === null) {
            echo json_encode(["error" => "Invalid JSON format"]);
            exit();
        }

        if ($data['nama'] != null ){
            $dataKaryawan->setNama($data['nama']);
        }
    
        if ($data['no-ktp'] != null ){
            $dataKaryawan->setNoKtp($data['no-ktp']);
        }
    
        if ($data['telp'] != null ){
            $dataKaryawan->setTelp($data['telp']);
        }

        if ($data['kota-tinggal'] != null ){
            $dataKaryawan->setKotaTinggal($data['kota-tinggal']);
        }

        if ($data['tgl-lahir'] != null ){
            $dataKaryawan->setTanggalLahir($data['tgl-lahir']);
        }

        if ($data['tgl-masuk'] != null ){
            $dataKaryawan->setTanggalMasuk($data['tgl-masuk']);
        }

        if ($data['department'] != null ){
            $dataKaryawan->setDepartment($data['department']);
        }

        if ($data['kota-penempatan'] != null ){
            $dataKaryawan->setKotaPenempatan($data['kota-penempatan']);
        }
 
        $response =  $dataKaryawan->update($id); 

        echo json_encode($response);
        exit();
    }

    public function getAllKaryawan(RouteCollection $routes)
    {

        try {
            $db = new Database();
            $sql = "
                SELECT 
                    IDKaryawan,
                    Nama,
                    NoKTP,
                    Telp,
                    Kota_Tinggal,
                    Tanggal_lahir,
                    Tanggal_Masuk,
                    Department,
                    d.Nama_Dept AS Nama_Dept,
                    Kota_Penempatan,
                    CONCAT(
                        FLOOR(DATEDIFF(NOW(), Tanggal_Masuk) / 365), ' Tahun ',
                        MOD(FLOOR(DATEDIFF(NOW(), Tanggal_Masuk) / 30.44), 12), ' Bulan'
                    ) AS Masa_Kerja
                FROM karyawan k
                JOIN department d ON k.Department = d.IDDept
                ORDER BY `Masa_Kerja` DESC";
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

    public function hapusKaryawan(string $id, RouteCollection $routes)
    {
        $karyawan = new Karyawan();
        $datakaryawan = $karyawan->getKaryawanById($id);

        if (isset($datakaryawan->success) && !$datakaryawan->success) {
            echo json_encode($datakaryawan);
            exit();
        }

        $response =  $datakaryawan->delete($id); 
        echo json_encode($response);
        exit();
    }

    public function birthDayKaryawan(RouteCollection $routes)
    {

        try {
            $db = new Database();
            $sql = "
                SELECT 
                    IDKaryawan,
                    Nama,
                    Telp,
                    Kota_Tinggal,
                    Tanggal_lahir,
                    d.Nama_Dept AS Nama_Dept
                FROM karyawan k
                JOIN department d ON k.Department = d.IDDept";

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
}