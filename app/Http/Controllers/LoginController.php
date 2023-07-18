<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = $request->get('erro');

        if ($erro == 1) {
            $erro = 'usuario e/ou senha nao existe';
        }

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

        echo "Usuario: $email | Senha:$password";
        echo '<br />';

        $user = new User;

        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();


        if (isset($usuario->name)) {
            return 'Usuario existe';
        }
        return redirect()->route('site.login', ['erro' => 1]);
    }
}
