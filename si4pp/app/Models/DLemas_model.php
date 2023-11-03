<?php

namespace App\Models;

use CodeIgniter\Model;

class DLemas_model extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id";
    protected $allowedFields = ["nama", "nis", 'kelas', 'tanggal_lahir', "tempat_lahir", "alamat", "jenis_kelamin", "agama"];
    public function getData($nis)
    {
        return $this->where("nis", $nis)->first();
    }
}
