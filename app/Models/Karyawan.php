<?php
namespace App\Models;

use App\Database;

class Karyawan
{
    protected $idKaryawan;
    protected $nama;
    protected $noKtp;
    protected $telp;
    protected $kotaTinggal;
    protected $tanggalLahir;
    protected $tanggalMasuk;
    protected $department;
	protected $kotaPenempatan;

    // GET METHODS
    public function getIdKaryawan()
    {
        return $this->idKaryawan;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNoKtp()
    {
        return $this->noKtp;
    }

    public function getTelp()
    {
        return $this->telp;
    }

    public function getKotaTinggal()
    {
        return $this->kotaTinggal;
    }

    public function getTanggalLahir()
    {
        return $this->tanggalLahir;
    }

    public function getTanggalMasuk()
    {
        return $this->tanggalMasuk;
    }

    public function getDepartment()
    {
        return $this->department;
    }

	public function getKotaPenempatan()
    {
        return $this->kotaPenempatan;
    }

    // SET METHODS
    public function setNama(string $value)
    {
        $this->nama = $value;
    }

    public function setNoKtp(string $value)
    {
        $this->noKtp = $value;
    }

    public function setTelp(string $value)
    {
        $this->telp = $value;
    }

    public function setKotaTinggal(string $value)
    {
        $this->kotaTinggal = $value;
    }

    public function setTanggalLahir(string $value)
    {
        $this->tanggalLahir = $value;
    }

    public function setTanggalMasuk(string $value)
    {
        $this->tanggalMasuk = $value;
    }

    public function setDepartment(int $value)
    {
        $this->department = $value;
    }

	public function setKotaPenempatan(string $value)
    {
		$this->kotaPenempatan = $value;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {
        $db = new Database;

        $sql = "INSERT INTO karyawan (IDKaryawan, Nama, NoKTP, Telp, Kota_Tinggal, Tanggal_lahir, Tanggal_Masuk, Department, Kota_Penempatan) 
                VALUES (UUID(), :nama, :noKtp, :telp, :kotaTinggal, :tanggalLahir, :tanggalMasuk, :department, :KotaPenempatan)";

        try {
            $db->query($sql);
            $db->bind(':nama', $data['nama']);
            $db->bind(':noKtp', $data['noKtp']);
            $db->bind(':telp', $data['telp']);
            $db->bind(':kotaTinggal', $data['kotaTinggal']);
            $db->bind(':tanggalLahir', $data['tanggalLahir']);
            $db->bind(':tanggalMasuk', $data['tanggalMasuk']);
            $db->bind(':department', $data['department']);
			$db->bind(':KotaPenempatan', $data['KotaPenempatan']);

            if ($db->execute()) {
                return ['success' => true];
            } else {
                return ['success' => false, 'message' => 'Gagal menambahkan karyawan'];
            }
        } catch (\PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function update(string $id)
    {
        $db = new Database;

        $sql = "UPDATE karyawan 
                SET Nama = :nama, NoKTP = :noKtp, Telp = :telp, Kota_Tinggal = :kotaTinggal, 
                    Tanggal_lahir = :tanggalLahir, Tanggal_Masuk = :tanggalMasuk, Department = :department,
					Kota_Penempatan = :kotaPenempatan
                WHERE IDKaryawan = :id";

        try {
            $db->query($sql);
            $db->bind(':id', $id);
            $db->bind(':nama', $this->nama);
            $db->bind(':noKtp', $this->noKtp);
            $db->bind(':telp', $this->telp);
            $db->bind(':kotaTinggal', $this->kotaTinggal);
            $db->bind(':tanggalLahir', $this->tanggalLahir);
            $db->bind(':tanggalMasuk', $this->tanggalMasuk);
            $db->bind(':department', $this->department);
			$db->bind(':kotaPenempatan', $this->kotaPenempatan);

            if ($db->execute()) {
                return ['success' => true];
            } else {
                return ['success' => false, 'message' => 'Gagal mengupdate karyawan'];
            }
        } catch (\PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function delete(string $id)
    {
        $db = new Database;

        $sql = "DELETE FROM karyawan WHERE IDKaryawan = :id";

        try {
            $db->query($sql);
            $db->bind(':id', $id);

            if ($db->execute()) {
                return ['success' => true];
            } else {
                return ['success' => false, 'message' => 'Gagal menghapus karyawan'];
            }
        } catch (\PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

	public function getKaryawanById($id)
    {
        $db = new Database;

        $sql = "SELECT * FROM karyawan WHERE IDKaryawan = :id";
		

        try {
            $db->query($sql);
            $db->bind(':id', $id);
            $result = $db->single();

			if ($result) {				
				$this->idKaryawan = $result->IDKaryawan;
				$this->nama = $result->Nama;
				$this->noKtp = $result->NoKTP;
				$this->telp = $result->Telp;
				$this->kotaTinggal = $result->Kota_Tinggal;
				$this->tanggalLahir = $result->Tanggal_lahir;
				$this->tanggalMasuk = $result->Tanggal_Masuk;
				$this->department = $result->Department;
				$this->kotaPenempatan = $result->Kota_Penempatan;
				return $this;
            } else {
                throw new \Exception("karyawan not found");
            }
        } catch (\PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
