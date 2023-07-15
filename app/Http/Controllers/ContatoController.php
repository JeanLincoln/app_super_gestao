<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        /*Há tres formas de registrar os dados no banco de dados*/

        $contato = new SiteContato();

        /* com o save()

        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();
        */

        // com o fill e o request->all()
        // $contato->fill($request->all());
        // $contato->save();

        // com o create e o request->all()
        // $contato->create($request->all());

        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
