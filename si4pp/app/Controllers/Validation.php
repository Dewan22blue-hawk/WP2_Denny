<?php

namespace App\Controllers;

class Matakuliah extends BaseController
{
    public function index()
    {
        echo view('view-form-matakuliah');
    }

    public function cetak()
    {
        $validation =  \Config\Services::validation();

        $validation->setRules([
            'kode' => 'required|min_length[3]',
            'nama' => 'required|min_length[3]'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if (!$isDataValid) {
            echo view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->request->getPost('kode'),
                'nama' => $this->request->getPost('nama'),
                'sks' => $this->request->getPost('sks')
            ];
            echo view('view-data-matakuliah', $data);
        }
    }
}
