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
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required',
        ]);
        // SiteContato::create($request->all());
    }
}
