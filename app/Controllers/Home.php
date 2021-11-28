<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        $structure =
            view('structure/header') .
            view('User/Login', ['mensaje' => $mensaje]) .
            view('structure/body');
        return $structure;
    }
}
