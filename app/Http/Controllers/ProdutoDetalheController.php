<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Unidade;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
