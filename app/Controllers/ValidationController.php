<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class ValidationController extends BaseController
{
    public function index()
    {
        //
    }
    public function proses_register()
    {
        $userModel = new UsersModel();
        $user_name = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // var_dump($user_name, $password);

        $validationRules = [
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[5]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('/hidden/register')->withInput()->with('error_register', 'Gagal Melakukan Register', $this->validator->getErrors());
        }
        $encriptPassword = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'user_name' => $user_name,
            'password' => $encriptPassword,
        ];
        $userModel->insert($data);
        session()->setFlashdata('success_register', 'Register Berhasil.');
        return redirect()->to('/login');
    }
    public function proses_login(){
        $session = session();
        $user_name = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $userModel = new UsersModel();
        $user = $userModel->getUserByLogin($user_name, $password);

        if ($user) {
            $session->set('id_user', $user['id_user']);
            $session->set('user_name', $user['user_name']);
            $session->set('password', $user['password']);
            return redirect()->to('admin/home');
        } else {
            $session->setFlashdata('error_login', 'User & Password Salah');
            return redirect()->to('/login')->with('error_login', 'UserName & Password Salah');
        }
    }
    public function proses_logout(){
        session()->remove('id_user');
        return redirect()->to('/');
    }
}
