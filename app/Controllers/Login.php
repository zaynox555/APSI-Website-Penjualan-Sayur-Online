<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        if (isset($_COOKIE['login_status'])) {
            return redirect()->to('/');
        }

        if (isset($_POST['login'])) {
            $this->authenticate();
        }

        return view('login.php');
    }

    private function authenticate()
    {

        if ($this->validate([
            'email' => 'required|valid_email',
            'password' => 'required',
        ])) {
            $userModel = model('User');
            $email = $this->request->getPost('username');
            $pw = $this->request->getPost('password');

            if ($email == 'green.grocery@admin.com' && $pw == 'admin') {
                session()->set('admin_login', 'true');
                return redirect()->to('/Admin');
            }

            if ($user = $userModel->GetUser($email)) {
                if (password_verify($pw, $user->password)) {
                    session()->set('login_status', 'true');
                    session()->set('user_id', $user->id);
                    return redirect()->to('/');
                }
            }
        }

        return redirect()->to('/Login')->with('error', 'Invalid Email or Password');
    }
}
