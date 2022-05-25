<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        if (isset($_POST['register'])) {
            $this->register();
        }
        $data = [
            'error' => \Config\Services::validation()->getErrors(),
        ];
        return view('register.php', $data);
    }

    private function register()
    {
        if ($this->validate([
            'email' => 'required|valid_email',
            'nohp' => 'required|numeric|min_length[10]|max_length[12]',
            'password' => 'required|min_length[8]',
            'confirmation' => 'required|matches[password]',
            'nama' => 'required|alpha_space|max_length[100]',
            'alamat' => 'required|max_length[1500]',
        ])) {
            $email = $this->request->getPost('email');
            $pw = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
            model('user')->saveUser([
                'email' => $email,
                'nohp' => '+62' . $this->request->getPost('nohp'),
                'password' => $pw,
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
            ]);

            session()->set('login_status', model('user')->getUserId($email));
            return redirect()->to('/');
        }

        return redirect()->to('/Register')->withInput();
    }
}
