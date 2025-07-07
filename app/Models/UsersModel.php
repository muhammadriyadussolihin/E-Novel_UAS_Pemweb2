<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'tb_users';
    protected $primaryKey       = 'id_user';
    protected $allowedFields    = ['id_user', 'user_name', 'password'];

    public function getUserByLogin($user_name, $password)
    {
        $user = $this->where('user_name', $user_name)
                     ->first();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return null;
        }
    }
}
