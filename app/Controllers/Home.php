<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Home extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new LoginModel();
    }
    public function index()
    {
        return view('login/login');
    }

    public function register()
    {
        return view('login/register');
    }

    public function welcome()
    {
        return view('login/welcome');
    }

    public function prosesRegister()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
        ];

        $this->userModel->insert($data);
        return redirect()->to('home');
    }

    public function prosesLogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = $this->userModel->where([
            'username' => $username
        ])->first();

        // dd($dataUser);

        if ($dataUser) {

            if (password_verify($password, $dataUser['password'])) {
                session()->set([
                    'username' => $dataUser['username'],
                    'email' => $dataUser['email'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('home/welcome');
            } else {
                session()->setFlashdata('error', 'Username atau Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username atau Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('home');
    }
}
