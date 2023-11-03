<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Matkul extends BaseController
{
    public function index()
    {
        helper(['form']);
        $validation = \Config\Services::validation(); // Tambahkan baris ini

        return view('matakuliah/form', ['validation' => $validation]);
    }


    public function cetak()
    {
        // Load session
        // $session = session();
        session();

        // Load validation service
        $data = [

            'validation' => \Config\Services::validation(),
        ];

        // // Set validation rules
        // $validation->setRules([
        //     'kode' => [
        //         'rules' => 'required|min_length[3]',
        //         'errors' => [
        //             'required' => 'Kode harus diisi.',
        //             'min_length' => 'Kode minimal 3 huruf.',
        //         ]
        //     ],
        //     'nama' => [
        //         'rules' => 'required|min_length[3]',
        //         'errors' => [
        //             'required' => 'Nama harus diisi.',
        //             'min_length' => 'Nama minimal 3 huruf.',
        //         ]
        //     ],
        //     'sks' => 'required|numeric'
        // ]);
        if (!$this->validate([
            'kode' => 'required|min_length[3]'
        ])) {

            return redirect()->to('/matkul/index')->withInput()->with('validation', $data);
            // return view('/matakuliah/form', $data);
        }

        // Check if validation fails

        // baruu banget
        // if (!$validation->withRequest($this->request)->run()) {
        //     // Load form view if validation fails
        //     $data['validation'] = $validation;
        //     return view('matakuliah/form', $data);
        // } else {
        //     // Get valid data
        //     $data = [
        //         'kode' => $this->request->getPost('kode'),
        //         'nama' => $this->request->getPost('nama'),
        //         'sks' => $this->request->getPost('sks')
        //     ];

        //     // Load data view with the data
        //     return view('matakuliah/data', $data);
        // }

        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'sks' => $this->request->getPost('sks')
        ];
        return view('matakuliah/data', $data);
    }
}
