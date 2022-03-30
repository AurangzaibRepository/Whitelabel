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

    public function login()
    {
        $data = $this->request->getRawInput();

        $user = $this
                    ->model
                    ->where('email', $data['email'])
                    ->findAll();

        if (!empty($user) && password_verify($data['password'], $user[0]['password'])) {
            return redirect()->to('/');
        }

        session()->setFlashData('error', 'Invalid credentials');
        return redirect()->back();
    }

    public function register()
    {
        $data['title'] = 'Register';

        return view('pages/auth/register', $data);
    }

    public function registerUser()
    {
        try {
            $this->model->saveRecord($this->request);

            session()->setFlashdata("success", "Account created sucessfully, you can login");
            return redirect()->to('/auth');
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }
    }
}
