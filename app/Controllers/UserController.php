<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function Save()
    {
        $userModel = new UserModel($db);
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
        ];
        if ($userModel->insert($data) === false) {
            var_dump($userModel->errors());
        }
        return redirect()->to(base_url('Login'));
    }
    public function List()
    {
        $userModel = new UserModel($db);
        $users = $userModel->findAll();
        $data['users'] = $users;
        $structure =
            view('structure/header') .
            view('User/List', $data) .
            view('structure/body');
        return $structure;
    }

    public function SingIn()
    {
        $structure =
            view('structure/header') .
            view('User/SingIn') .
            view('structure/body');
        return $structure;
    }

    public function Login()
    {
        $password = $this->request->getPost('password');
        $name = $this->request->getPost('name');
        $data = [
            'name' => $name,
            'password' => $password,
        ];
        $datosUsuario = $this->searchUserByName($name);
        if (
            count($datosUsuario) > 0 &&
            password_verify($password, $datosUsuario[0]['Password'])
        ) {
            $sessionData = [
                'usuario' => $datosUsuario[0]['name'],
                'email' => $datosUsuario[0]['email'],
            ];
            $session = session();
            $session->set($sessionData);
            // $structure =
            //     view('structure/header') .
            //     view('Student/Dashboard') .
            //     view('structure/body');
            return \
        } else {
            return redirect()
                ->to(base_url('/'))
                ->with('mensaje', '1');
        }
    }

    public function validateLogin()
    {
        $validation = $this->validate([
            'name' => 'required',
            'password' => 'required|min_length[5]',
        ]);
        if (!$validation) {
            return view('structure/header') .
                view('User/Login', ['validation' => $this->validator]) .
                view('structure/body');
        } else {
            return $this->Login();
        }
    }

    public function validateSingIn()
    {
        $validation = $this->validate([
            'name' => 'required',
            'password' => 'required|min_length[5]',
            'email' => 'required|valid_email',
        ]);
        if (!$validation) {
            return view('structure/header') .
                view('User/SingIn', ['validation' => $this->validator]) .
                view('structure/body');
        } else {
            return $this->Save();
        }
    }

    public function searchUserByName($name)
    {
        $userModel = new UserModel($db);
        $usuario = $userModel
            ->where('name', $name)
            ->get()
            ->getResultArray();
        return $usuario;
    }

    public function salir()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}
