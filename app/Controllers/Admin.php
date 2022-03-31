<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Admin extends BaseController
{
    private $model;

    public function __construct()
    {
        helper('html');
        $this->model = model(UserModel::class);
    }

    public function users()
    {
        $data['title'] = 'Users';

        return view('pages/admin/users', $data);
    }

    public function userlisting()
    {
        $data = $this->model->getListing();
        return $this->response->setJSON($data);
    }

    public function logout()
    {
        session()->remove('admin_id');

        return redirect()->to('admin');
    }
}
