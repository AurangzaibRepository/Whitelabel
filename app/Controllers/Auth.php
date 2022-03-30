<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['html', 'form']);
    }

    public function index()
    {
        $data['title'] = 'Login';

        return view('pages/auth/login', $data);
    }

    public function register()
    {
        $data['title'] = 'Register';

        return view('pages/auth/register', $data);
    }
}
