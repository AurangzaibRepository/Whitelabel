<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Admin extends BaseController
{
    private $model;

    public function __construct()
    {
        helper(['html', 'form']);
        $this->model = model(UserModel::class);
    }

    public function index()
    {
        $data['title'] = 'Login';

        return view('pages/admin/login', $data);
    }

    public function login() 
    {
        $data = $this->request->getRawInput();

        $user = $this  
                    ->model
                    ->where('email', $data['email'])
                    ->where('role', 'admin')
                    ->first();

        if (!empty($user) && password_verify($data['password'], $user['password'])) {
            
        }

        session()->setFlashdata('error', 'Invalid credentials');
        return redirect()->back();
    }
}
