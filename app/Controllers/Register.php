<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function store()
    {
        $validated = $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[3]',
        ],
        [
            'firstName' => [
                'required'      => 'O campo nome é obrigatorio',
            ],
            'lastName' => [
                'required'      => 'O campo sobrenome é obrigatorio.',
            ],
            'email' => [
                'required'      => 'O campo email é obrigatorio.',
                'is_unique'     => 'O email deve ser único',
                'valid_email'   => 'O email tem que ser válido'
            ],
            'password' => [
                'required'      => 'O campo password é obrigatorio.',
                'min_length'    => 'O password precisa ter ao menos 3 caracteres',
            ]
        ]);

        if (!$validated) {
            return redirect()->route('register')->with('errors', $this->validator->getErrors());
        }

        $user = new User();
        $inserted = $user->insert($this->request->getPost());

        if (!$inserted) {
            return redirect()->route('register')->with('error', 'Ocorreu um erro ao cadastrar usuário, por favor tente novamente');
        }

        return redirect()->route('register')->with('success', 'Cadastrado com sucesso!');
    }
}
