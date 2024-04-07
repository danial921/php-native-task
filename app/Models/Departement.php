<?php
namespace App\Models;

use App\Database;

class Departement
{
    protected $idDepartment;
    protected $namaDept;

    // GET METHODS
    public function getIdDepartement()
    {
        return $this->idDepartment;
    }

    public function getNamaDept()
    {
        return $this->namaDept;
    }

    // SET METHODS
    public function setNamaDept(string $value)
    {
        $this->namaDept = $value;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {
		$db = new Database;

		$sql = "INSERT INTO department (Nama_Dept) VALUES (:nama)";
	
		try {
			$db->query($sql);
			$db->bind(':nama', $data['nama']);
		
			if ($db->execute()) {
				return ['success' => true];
			} else {
				return ['success' => false, 'message' => 'Gagal menambahkan departement'];
			}
		} catch (\PDOException $e) {
			return ['success' => false, 'message' => $e->getMessage()];
		}

        return $this;
    }

    public function getDepartmentById($id)
    {
        try {
            $db = new Database();
            $sql = "SELECT * FROM department WHERE IDDept = :id";
            $db->query($sql);
            $db->bind(':id', $id);
            $result = $db->single();

            if ($result) {
                $this->idDepartment = $result->IDDept;
                $this->namaDept = $result->Nama_Dept;
                return $this;
            } else {
                throw new \Exception("Department not found");
            }
        } catch (\PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function update(int $id)
    {
        $db = new Database;
    
        $sql = "UPDATE department SET Nama_Dept = :nama WHERE IDDept = :id";
        
        try {
            $db->query($sql);
            $db->bind(':nama', $this->namaDept);
            $db->bind(':id', $id);
    
            if ($db->execute()) {
                return ['success' => true];
            } else {
                return ['success' => false, 'message' => 'Gagal mengupdate departement'];
            }
        } catch (\PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    
        return $this;
    }
    

    public function delete(int $id)
    {
        $db = new Database;
    
        $sql = "DELETE FROM department WHERE IDDept = :id";
        
        try {
            $db->query($sql);
            $db->bind(':id', $id);
    
            if ($db->execute()) {
                return ['success' => true];
            } else {
                return ['success' => false, 'message' => 'Gagal delete departement'];
            }
        } catch (\PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    
        return $this;
    }
}
