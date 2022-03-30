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
}
