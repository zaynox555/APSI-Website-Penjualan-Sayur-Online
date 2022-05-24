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

        $data = [
            'error' => \Config\Services::validation()->getErrors(),
        ];
        return view('login.php', $data);
    }

    private function authenticate()
    {
        if ($this->validate(['email' => 'required|valid_email|is_not_unique[user.email]'])) {
            $email = $this->request->getPost('email');
            $pw = $this->request->getPost('password');

            if ($email == 'green.grocery@admin.com' && $pw == 'admin') {
                session()->set('admin_login', 'true');
                return redirect()->to('/Admin');
            }

            if ($user = model('user')->GetUser($email)) {
                if (password_verify($pw, $user['password'])) {
                    session()->set('login_status', $user['id']);
                    return redirect()->to('/');
                }
                session()->setFlashdata('pwError', 'Password salah');
                return redirect()->to('/Login')->withInput();
            }
            return redirect()->to('/Login')->with('emailError', 'Email tidak ditemukan');
        }

        return redirect()->to('/Login');
    }
}
