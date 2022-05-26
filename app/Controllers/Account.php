<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function index()
    {
        $this->client_session_check();

        if (isset($_POST['save'])) return $this->saveChange();

        $data = [
            'error' => \Config\Services::validation()->getErrors(),
            'user' => model('User')->getUserById(session()->get('login_status')),
        ];
        return view('account.php', $data);
    }

    private function saveChange()
    {
        $rules = [
            'email' => 'required|valid_email',
            'nohp' => 'required|numeric|min_length[10]|max_length[15]',
            'nama' => 'required|alpha_space|max_length[100]',
            'alamat' => 'required|max_length[1500]',
        ];

        if (!empty($_POST['password']) && !empty($_POST['confirmation'])) {
            $rules['password'] = 'min_length[8]';
            $rules['confirmation'] = 'matches[password]';
        }

        if ($this->validate($rules)) {
            $data = [
                'email' => $this->request->getPost('email'),
                'nohp' => $this->request->getPost('nohp'),
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
            ];

            if (!empty($_POST['password'])) {
                $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
            }

            model('User')->updateUser(session()->get('login_status'), $data);
        }

        return redirect()->to('/Account');
    }
}
