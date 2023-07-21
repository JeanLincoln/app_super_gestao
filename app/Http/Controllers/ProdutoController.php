<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Unidade;
use App\Item;
use App\ProdutoDetalhe;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $msg = '')
    {
        $msg = $request->input('msg') ? $request->input('msg') : '';

        /*
            Por padrão o laravel trabalha com o modo de carregamento de dados lazy loading,
            isto significa que  os dados de relacionamento dos modelos serão carregados somente
            quando o metodo de relacionamento for chamado:


            $produto->nome

            -- Produto ainda não possui os dados de relacionamento itemDetalhe --

            $produto->itemDetalhe->comprimento

            --Agora o Produto ainda possui os dados de relacionamento itemDetalhe --

            O eager loading, oposto do lazy, carrega os dados de relacionamento diretamente
            no controller, fazendo assim que a pagina seja carregada com os dados prontos.

            Podemos utilizar o eager loading conforme abaixo
        */

        $produtos = Item::with(['itemDetalhe'])->paginate(10);

        return view('app.produto.index', ['produtos' => $produtos, 'request' => $request->all(), 'msg' => $msg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidade::all();


        return view('app.produto.create', ['unidades' => $unidades]);
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
            'nome' => 'required|min:3|max:40',
            'descricao' => 'required|min:3|max:2000',
            'peso' => 'required|integer',
            'unidade_id' => 'exists:unidades,id',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.max' => 'O campo :attribute deve ter no maximo 40 caracteres',
            'nome.min' => 'O campo :attribute deve ter no minimo 3 caracteres',
            'descricao.max' => 'O campo :attribute deve ter no maximo 2000 caracteres',
            'descricao.min' => 'O campo :attribute deve ter no minimo 3 caracteres',
            'integer' => 'O campo :attribute deve ser um número inteiro',
            'unidade_id.exists' => 'A unidade escolhida não existe!',
        ];

        $request->validate($regras, $feedback);

        Produto::create($request->all());

        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('app.produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $unidades = Unidade::all();
        return view('app.produto.edit', ['produto' => $produto, 'unidades' => $unidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $regras = [
            'nome' => 'required|min:3|max:40',
            'descricao' => 'required|min:3|max:2000',
            'peso' => 'required|integer',
            'unidade_id' => 'exists:unidades,id',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.max' => 'O campo :attribute deve ter no maximo 40 caracteres',
            'nome.min' => 'O campo :attribute deve ter no minimo 3 caracteres',
            'descricao.max' => 'O campo :attribute deve ter no maximo 2000 caracteres',
            'descricao.min' => 'O campo :attribute deve ter no minimo 3 caracteres',
            'integer' => 'O campo :attribute deve ser um número inteiro',
            'unidade_id.exists' => 'A unidade escolhida não existe!',
        ];

        $request->validate($regras, $feedback);

        $produto->update($request->all());

        return redirect()->route('produto.show', ['produto' => $produto->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        $msg = 'O produto foi excluido com sucesso!';

        return redirect()->route('produto.index', ['msg' => $msg]);
    }
}
