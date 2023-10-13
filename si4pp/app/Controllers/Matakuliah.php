<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Matakuliah extends BaseController
{
    public function index()
    {
        echo view('matakuliah/view-form-mahasiswa');
    }
    public function cetak()
    {
        // $validation = \config\Services::validation();
        // $validation->setRules([
        //     'kode' => [
        //         'required' => 'Kode mata kuliah harus diisi',
        //         'min_length' => 'Kode kulia terlalu pendek',

        //     ],
        //     'nama' => [
        //         'required' => 'Nama mata kuliah harus diisi',
        //         'min_length' => 'Nama mata kuliah tidka valid terlalu pendek',
        //     ]
        // ]);
        // if (!$validation->withRequest($this->request)->run()) {
        //     return view('matakuliah/view-form-matakuliah');
        // } else {
        //     $data = [
        //         'kode' => $this->request->getPost('kode'),
        //         'nama' => $this->request->getPost('nama'),
        //         'sks' => $this->request->getPost('sks'),
        //     ];
        //     return view('matakuliah/view-data-mahasiswa', $data);
        // }
        $validation = \Config\Services::validation();

        $validation->setRule('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus diisi',
            'min_length' => 'Kode terlalu pendek'
        ]);

        $validation->setRule('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        if ($validation->run() == false) {
            echo view('matakuliah/view-form-mahasiswa');
        } else {
            $data = [
                'kode' => $this->request->getPost('kode'),
                'nama' => $this->request->getPost('nama'),
                'sks' => $this->request->getPost('sks')
            ];
            echo view('matakuliah/view-data-mahasiswa', $data);
        }
    }
}
