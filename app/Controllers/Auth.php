<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('html');
    }

    public function index()
    {
        $data['title'] = 'Login';

        return view('pages/auth/login', $data);
    }
}
