<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DLemas_model;

class DLemas extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Admin Input Data",

        ];
        echo view("DLemas/form_input_data", $data);
    }
    public function input()
    {
        // $siswaModel = new DLemas_model();
        $data = [
            "title" => "Admin View Data",
            "nama" => $this->request->getVar("nama"),
            "nis" => $this->request->getVar("nis"),
            "kelas" => $this->request->getVar("kelas"),
            "tanggal" => $this->request->getVar("tanggal_lahir"),
            "tempat" => $this->request->getVar("tempat"),
            "alamat" => $this->request->getVar("alamat"),
            "kelamin" => $this->request->getVar("kelamin"),
            "agama" => $this->request->getVar("agama"),
        ];
        // $siswaModel->insert($data);
        // $siswa = $siswaModel->getData($data["nis"]);
        // $data = [
        //     "title" => "Form Tampil",
        //     "siswa" => $siswa,
        // ];
        echo view("DLemas/form_view_data", $data);
    }
}
