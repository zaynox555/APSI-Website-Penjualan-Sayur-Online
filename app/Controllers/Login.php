<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        if (session()->has('admin_login')) return redirect()->to('/Admin');
        if (session()->has('login_status')) return redirect()->to('/');
        if (isset($_POST['login']))  return $this->authenticate();

        $data = [
            'error' => \Config\Services::validation()->getErrors(),
        ];
        return view('login.php', $data);
    }

    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $pw = $this->request->getPost('password');

        if ($email == 'green.groceries@admin.com' && $pw == 'admin') {
            session()->set('admin_login', 'true');
            return redirect()->to('/Admin');
        }

        if ($this->validate(['email' => 'required|valid_email|is_not_unique[user.email]'])) {
            if ($user = model('user')->GetUser($email)) {
                if (password_verify($pw, $user['password'])) {
                    session()->set('login_status', $user['id']);
                    return redirect()->to('/');
                }

                return redirect()->to('/Login')->withInput()->with('pwError', 'Password salah');
            }

            return redirect()->to('/Login')->with('emailError', 'Email tidak ditemukan');
        }

        return redirect()->to('/Login');
    }
}
