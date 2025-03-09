<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function store()
    {
        $validated = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required'
        ],
        [
            'email' => [
                'required' => 'O campo e-mail deve ser preenchido.',
                'valid_email' => 'O e-mail precisa ser valido.'
            ],
            'password' => [
                'required' => 'O campo Senha deve ser preenchido.'
            ]
        ]);

        if (!$validated) {
            return redirect('login')->with('errors', $this->validator->getErrors());
        }

        $user = new User();
        $userFound = $user->select('id,firstName,lastName,email,password')->where('email', $this->request->getPost('email'))->first();

        if (!$userFound) {
            return redirect('login')->with('error', 'E-mail or password not found or incorrect');
        }

        echo "<pre>";
        var_dump($userFound);
        echo "</pre>";
        die();
    }
}
