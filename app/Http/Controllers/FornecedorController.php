<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request)
    {
        $msg = $request->input('msg') ? $request->input('msg') : '';

        $fornecedores = Fornecedor::with(['produtos'])->where('nome', 'like', '%' . $request->input('nome') . '%')
            ->where('site', 'like', '%' . $request->input('site') . '%')
            ->where('uf', 'like', '%' . $request->input('uf') . '%')
            ->where('email', 'like', '%' . $request->input('email') . '%')
            ->paginate(5);

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores, 'request' => $request->all(), 'msg' => $msg]);
    }

    public function adicionar(Request $request)
    {
        $msg = '';

        if ($request->input('_token') != '' && $request->input('id') == '') {
            //validacao

            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email',
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.max' => 'O campo nome deve ter no maximo 40 caracteres',
                'nome.min' => 'O campo nome deve ter no minimo 3 caracteres',
                'uf.max' => 'O campo uf deve ter no maximo 2 caracteres',
                'uf.min' => 'O campo uf deve ter no minimo 2 caracteres',
                'email.email' => 'O campo email nao foi preenchido corretamente',
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso';
        };

        if ($request->input('_token') != '' && $request->input('id') != '') {
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            $msg = $update ? 'Atualizacao realizada com sucesso' : 'Erro ao tentar atualizar o registro';

            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' => $msg]);
        }
        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function editar($id, $msg = '')
    {
        $fornecedor = Fornecedor::find($id);

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }

    public function excluir($id)
    {
        Fornecedor::find($id)->delete();

        $msg = 'O fornecedor foi excluido com sucesso!';

        return redirect()->route('app.fornecedor.listar', ['msg' => $msg]);
    }
}
