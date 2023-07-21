<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Unidade;
use App\ItemDetalhe;
use App\ProdutoDetalhe;

class ProdutoDetalheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $unidades = Unidade::all();

        return view('app.produto_detalhe.create', ['unidades' => $unidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'produto_id' => 'required|numeric',
            'comprimento' => 'required|numeric',
            'largura' => 'required|numeric',
            'altura' => 'required|numeric',
            'unidade_id' => 'exists:unidades,id|numeric',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'numeric' => 'O campo :attribute deve ser númerico',
            'unidade_id.exists' => 'A unidade escolhida não existe!',
        ];

        $request->validate($regras, $feedback);

        ProdutoDetalhe::create($request->all());

        echo 'Cadastro realizado com sucesso!';

        // return redirect()->route('app.produto-detalhe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\ProdutoDetalhe $produto_detalhe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto_detalhe = ItemDetalhe::find($id);
        $unidades = Unidade::all();

        return view('app.produto_detalhe.edit', ['produto_detalhe' => $produto_detalhe, 'unidades' => $unidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\ProdutoDetalhe $produto_detalhe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoDetalhe $produto_detalhe)
    {
        $regras = [
            'produto_id' => 'required|numeric',
            'comprimento' => 'required|numeric',
            'largura' => 'required|numeric',
            'altura' => 'required|numeric',
            'unidade_id' => 'exists:unidades,id|numeric',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'numeric' => 'O campo :attribute deve ser númerico',
            'unidade_id.exists' => 'A unidade escolhida não existe!',
        ];

        $request->validate($regras, $feedback);

        $produto_detalhe->update($request->all());

        echo 'Produto-Detalhe atualizado com sucesso!';

        // return redirect()->route('app.produto_detalhe.show', ['produto' => $produto_detalhe->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
