<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = $request->get('erro');

        $erro == 1 && $erro = 'Usuario e/ou senha nao existe';
        $erro == 2 && $erro = 'Necessario realizar login para ter acesso a tela!';

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        // regras de validacao

        $regras = [
            'usuario' => 'email',
            'senha' => 'required',
        ];
        // mensagens de feedback

        $feedback =   [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório',
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User;

        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();


        if (isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        }
        return redirect()->route('site.login', ['erro' => 1]);
    }

    public function sair()
    {
        session_destroy();
        return redirect()->route('site.login');
    }
}
