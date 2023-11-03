<?php

namespace App\Controllers;

use  App\Controllers\BaseController;

class LatihanVal extends BaseController
{
    public function index()
    {
        helper(["form"]);
        return view("validation/create");
    }
    public function create()
    {
        $session = session();
        $validation = \config\Services::validation();
        $validation->setRules([
            "kode" => [
                "rules" => "required|min_length[4]",
                "errors" => [
                    "required" => "Field {filed} Harus Diisi tidak boleh kosong!",
                    "min_length" => "Panjang field {field} minimal 3 huruf",

                ]
            ],
            'nama' => [
                "rules" => 'required|max_length[10]|min_length[3]',
                'errors' => [
                    'required' => 'Field {filed} Harus Diisi tidak boleh kosong!',
                    "min_length" => "Panjang field {field} minimal 3 huruf",
                    "max_length" => "Panjang field {field} maksimal 10 huruf",

                ]
            ],
            'alamat' => [
                "rules" => 'required|max_length[25]|min_length[3]',
                'errors' => [
                    'required' => 'Field {filed} Harus Diisi tidak boleh kosong!',
                    "min_length" => "Panjang field {field} minimal 3 huruf",
                    "max_length" => "Panjang field {field} melebihi maksimal 25 huruf",

                ]
            ],
            'email' => [
                "rules" => 'required|valid_email|min_length[3]',
                'errors' => [
                    'required' => 'Field {filed} Harus Diisi tidak boleh kosong!',
                    "min_length" => "Panjang field {field} minimal 3 huruf",
                    "valid_email" => "Masukkan {field} yang benar!",

                ]
            ],

        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $data["valiation"] = $validation;
            return view("validation/create", $data);
        } else {
            $data = [
                'kode' => $this->request->getPost('kode'),
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'email' => $this->request->getPost('email'),
            ];
            return view('validation/show', $data);
        }
    }
}
