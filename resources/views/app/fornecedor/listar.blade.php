@extends('app.layouts.basico')
@section('titulo', 'Fornecedor')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Listar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form action="POST">
                    @foreach ($fornecedores as $fornecedor)
                        <table border="1" width="100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Site</th>
                                    <th>UF</th>
                                    <th>E-mail</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $fornecedor->nome }}</td>
                                    <td>{{ $fornecedor->site }}</td>
                                    <td>{{ $fornecedor->uf }}</td>
                                    <td>{{ $fornecedor->email }}</td>
                                    <td>Excluir</td>
                                    <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    @endforeach
                    {{ $fornecedores->appends($request)->links() }}
                    <br>
                    Exibindo {{ $fornecedores->count() }} fornecedores de {{ $fornecedores->total() }} (de
                    {{ $fornecedores->firstItem() }} a {{ $fornecedores->lastItem() }})
                </form>
            </div>
        </div>
    </div>
@endsection
