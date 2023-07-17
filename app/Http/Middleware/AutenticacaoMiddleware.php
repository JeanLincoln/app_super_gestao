<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodoDeAutenticacao, $perfil)
    {
        // return $next($request);
        // verifica se o usuario possui acesso a rota
        echo $metodoDeAutenticacao . '-' . $perfil . '<br>';

        if ($metodoDeAutenticacao == 'padrao') {
            echo 'verificar o usuario e a senha no banco de dados' . '-' . $perfil . '<br>';
        }

        if ($metodoDeAutenticacao == 'ldap') {
            echo 'verificar o usuario e a senha no AD' . '-' . $perfil . '<br>';
        }

        if ($perfil == 'visitante') {
            echo 'exibir alguns recursos' . '<br>';
        } else {
            echo 'carregar perfil do banco de dados' . '<br>';
        }

        if (false) {
            return $next($request);
        }

        return Response('Acesso negado! Rota exige autenticacao!');
    }
}
