<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function __construct()
    {
        helper(['html', 'form']);
    }

    public function index()
    {
        $data['title'] = 'Login';

        return view('pages/admin/login', $data);
    }
}
