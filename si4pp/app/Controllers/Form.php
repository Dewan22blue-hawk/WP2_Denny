<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Form extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        if (!$this->request->is('post')) {
            return view('signup');
        }

        $rules = [
            'username' => 'required|max_length[30]',
            'password' => 'required|max_length[255]|min_length[10]|alpha_numeric_punct',
            'passconf' => 'required|max_length[255]|matches[password]',
            'email'    => 'required|max_length[254]|valid_email',
        ];

        if (!$this->validate($rules)) {
            return view('signup');
        }

        // If you want to get the validated data.
        $validData = $this->validator->getValidated();

        return view('success');
    }
}
