<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        //realizar a validacao dos dados do request
        $request->validate([
            'nome' => 'required|min:3|max:40', // nomes com o minimo 3 caracteres e no max 40
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required',
        ]);
        // dd($request->all());
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
