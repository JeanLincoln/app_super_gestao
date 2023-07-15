<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }

    public function salvar(Request $request)
    {
        //realizar a validacao dos dados do request
        $request->validate([
            'nome' => 'required|min:3|max:40', // nomes com o minimo 3 caracteres e no max 40
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required',
        ]);
        // SiteContato::create($request->all());
    }
}
