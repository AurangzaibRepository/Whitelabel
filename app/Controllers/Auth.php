<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $model;

    public function __construct()
    {
        helper(['html', 'form']);
        $this->model = model(UserModel::class);
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

    public function registerUser()
    {
        $this->model->saveRecord($this->request);

        session()->setFlashdata("success", "Account created sucessfully, you can login");
        return redirect()->to('/auth');
    }
}
