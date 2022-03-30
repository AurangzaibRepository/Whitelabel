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

    public function update()
    {
        try {
            $this->model->updateRecord($this->request);
            session()->setFlashdata('success', 'Profile updated successfully');

            return redirect()->back();
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }
    }
}
