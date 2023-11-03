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
        //         'kode' => $this->request->getVar('kode'),
        //         'nama' => $this->request->getVar('nama'),
        //         'sks' => $this->request->getVar('sks'),
        //     ];
        //     return view('matakuliah/view-data-mahasiswa', $data);
        // }
        // $validation = \Config\Services::validation();

        // $validation->setRule('kode', 'Kode Matakuliah', 'required|min_length[3]', [
        //     'required' => 'Kode Matakuliah Harus diisi',
        //     'min_length' => 'Kode terlalu pendek'
        // ]);

        // $validation->setRule('nama', 'Nama Matakuliah', 'required|min_length[3]', [
        //     'required' => 'Nama Matakuliah Harus diisi',
        //     'min_length' => 'Nama terlalu pendek'
        // ]);

        // if ($validation->run() == false) {
        //     echo view('matakuliah/view-form-mahasiswa');
        // } else {
        //     $data = [
        //         'kode' => $this->request->getVar('kode'),
        //         'nama' => $this->request->getVar('nama'),
        //         'sks' => $this->request->getVar('sks')
        //     ];
        //     echo view('matakuliah/view-data-mahasiswa', $data);
        // }
        $validation =  \Config\Services::validation();

        $validation->setRules([
            'kode' => 'required|min_length[3]',
            'nama' => 'required|min_length[3]'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if (!$isDataValid) {
            echo view('matakuliah/view-form-mahasiswa');
        } else {
            $data = [
                'kode' => $this->request->getVar('kode'),
                'nama' => $this->request->getVar('nama'),
                'sks' => $this->request->getVar('sks')
            ];
            echo view('matakuliah/view-data-mahasiswa', $data);
        }
    }
    public function cetuk()
    {
        // Load session
        // $session = session();

        // Load validation service
        $validation = \Config\Services::validation();

        // Set validation rules
        $validation->setRules([
            'kode' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    "required" => "{field} harus diisi.!!", // field ini mengacu pada nama form seperi kode, nama, dan sks
                    "min_length" => "{field} masukkan minimal 3 huruf "
                ]
            ],
            'nama' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    "required" => "{field} harus diisi.!!", // field ini mengacu pada nama form seperi kode, nama, dan sks
                    "min_length" => "{field} masukkan minimal 3 huruf ",
                ],

            ],
            'sks' => [
                'rules' => 'required|required|numeric',
                'errors' => [
                    "required" => "{field} harus diisi.!!", // field ini mengacu pada nama form seperi kode, nama, dan sks
                    // "" => "{field} masukkan minimal 3 huruf ",
                ],

            ]
        ]);

        // Check if validation fails
        if (!$validation->withRequest($this->request)->run()) {
            // Load form view if validation fails$
            $data['validation'] = $validation;
            echo view('matakuliah/view-form-mahasiswa', $data);
        } else {
            // Get valid data
            $data = [
                'kode' => $this->request->getVar('kode'),
                'nama' => $this->request->getVar('nama'),
                'sks' => $this->request->getVar('sks')
            ];

            // Load data view with the data
            echo view('matakuliah/view-data-mahasiswa', $data);
        }
    }
    public function validasi()
    {
        $data = [
            'error' => \Config\Services::validation(),
            'title' => 'Form'
        ];

        if ($this->request->getMethod() === "post") {
            // var_dump($this->request->getVar());
            $nama = $this->request->getVar("nama");
            $email = $this->request->getVar("email");
            $password = $this->request->getVar("password");
            $konfirmasi = $this->request->getVar("konfirmasi");

            $validation = \config\Services::validation();
            $aturan = [

                "nama" => [
                    "label" => "Nama",
                    "rules" =>  "required|min_length[5]",
                    "errors" => [
                        'required' => 'Kolom {field} harus diisi',
                        'min_length' => 'Isi Kolom {field} Minimal 5 huruf!',
                    ],
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email',
                    "errors" => [
                        'required' => 'Kolom {field} harus diisi',
                        'valid_email' => 'Isi {field} anda dengan benar! ',
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required|min_length[8]',
                    "errors" => [
                        'required' => 'Kolom {field} harus diisi',
                        'min_length' => 'Isi Kolom {field} Minimal 5 huruf!',
                    ],
                ],
                'konfirmasi' => [
                    'label' => 'Konfirmasi',
                    'rules' => 'required|matches[password]|min_length[8]',
                    "errors" => [
                        'required' => 'Kolom {field} harus diisi',
                        'min_length' => 'Isi Kolom {field} Minimal 5 huruf!',
                        'matches' => '{field} password tidak sesuai'
                    ],
                ],

            ];
            $validation->setRules($aturan);
            if ($validation->withRequest($this->request)->run()) {
                // echo "<h1>Tidak ada kendala</h1>";
                session()->setFlashdata('success', 'Berhasil melakukan validasi');
                return redirect()->back();
            } else {
                // $error = $validation->listErrors(); //mengeluarkan semua error
                $error = $validation->getErrors(); //mengeluarkan dalam bentuk array spesifik
                // print_r($error);
                // echo "ada kendala";
                // $data['error'] = $error;
                // $data['error'] = $error;
                $data['title'] = "Form Valid";
                // echo  view('konten/form_validasi', $data);
                session()->setFlashdata("error", $error);
                return redirect()->back()->withInput();
            }
            // echo  view('konten/form_validasi', $data);
        } else {
            $data["error"] = "";
            $data["title"] = "";
        }
        echo  view('konten/form_validasi', $data);
    }
}
