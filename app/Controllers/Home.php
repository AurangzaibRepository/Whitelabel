<?php

namespace App\Controllers;

use App\Models\UserMoel;

class Home extends BaseController
{
    private $model;

    public function __construct()
    {
        helper(['html', 'form']);
        $this->model = model(UserModel::class);
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'data' => $this->model->find(session()->get('id'))
        ];

        return view('pages/profile', $data);
    }
}
