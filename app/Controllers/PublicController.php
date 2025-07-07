<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PublicController extends BaseController
{
    public function index()
    {
        return view('publicview/index');
    }
    public function login()
    {
        if(session('id_user')){
            return redirect()->to('/admin/home');
        }
        helper('form');
        return view('publicview/loginview');
    }

    // function tersembunyi
    public function register()
    {
        helper('form');
        return view('publicview/registerview');
    }
}
