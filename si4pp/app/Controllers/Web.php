<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Web extends BaseController
{
    public function  __construct()
    {

        helper(['url']);
    }

    public function index()
    {
        $data = [
            'judul' => 'Halaman Depan',
        ];

        // return view('web/v_header', $data) . view('web/v_index', $data) . view('web/v_footer');
        echo view('web/v_header', $data);
        echo view('web/v_index', $data);
        echo view('web/v_footer', $data);
    }
    public function about()
    {
        $data = [
            'judul' => 'Halaman Depan',
        ];

        // return view('web/v_header', $data) . view('web/v_index', $data) . view('web/v_footer');
        echo view('web/v_header', $data);
        echo view('web/v_about', $data);
        echo view('web/v_footer', $data);
    }
}
