<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class StudentController extends BaseController
{
    public function Dashboard()
    {
        $mensaje = session('mensaje');
        $structure =
            view('structure/header') .
            view('Student/Dashboard') .
            view('structure/body');
        return $structure;
    }
    public function Asignaturas()
    {
        $mensaje = session('mensaje');
        $structure =
            view('structure/header') .
            view('Student/Asignaturas') .
            view('structure/body');
        return $structure;
    }
    public function Notas()
    {
        $mensaje = session('mensaje');
        $structure =
            view('structure/header') .
            view('Student/Notas') .
            view('structure/body');
        return $structure;
    }
    public function Rendimiento()
    {
        $mensaje = session('mensaje');
        $structure =
            view('structure/header') .
            view('Student/Rendimiento') .
            view('structure/body');
        return $structure;
    }
    public function Evaluaciones()
    {
        $mensaje = session('mensaje');
        $structure =
            view('structure/header') .
            view('Student/Evaluaciones') .
            view('structure/body');
        return $structure;
    }
}
