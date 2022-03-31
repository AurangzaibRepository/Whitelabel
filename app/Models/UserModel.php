<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['first_name', 'last_name', 'email', 'password'];

    public function saveRecord(RequestInterface $request): void
    {
        $data = $request->getRawInput();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->insert($data);
    }

    public function saveSessionData(array $user): void
    {
        $data = [
            'id' => $user['id']
        ];

        session()->set($data);
    }

    public function updateRecord(RequestInterface $request): void
    {
        $data = $request->getRawInput();

        $this->update(session()->get('id'), $data);
    }


    public function saveAdminSession(array $user): void
    {
        $data = [
            'admin_id' => $user['id']
        ];

        session()->set($data);
    }

    public function getListing(): array
    {
        $data = [
            'data' => []
        ];

        $userList = $this
                        ->where('role', 'user')
                        ->orderBy('id', 'DESC')
                        ->findAll();

        foreach ($userList as $key => $value) {
            $data['data'][] = [
                ($key+1),
                $value['first_name'],
                $value['last_name'],
                $value['email']
            ];
        }

        return $data;
    }
}
