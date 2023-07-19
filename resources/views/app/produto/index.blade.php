@extends('app.layouts.basico')
@section('titulo', 'Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de produtos</p>
        </div>
        <div class="menu">
            {{-- <ul>
                <li><a href="{{ route('app.produto.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.produto') }}">Consulta</a></li>
            </ul> --}}
        </div>
        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form action="POST">
                    <table border="1" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Peso</th>
                                <th>Unidade ID</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ $produto->descricao }}</td>
                                    <td>{{ $produto->peso }}</td>
                                    <td>{{ $produto->unidade_id }}</td>
                                    {{-- <td><a href="{{ route('app.produto.excluir', $produto->id) }}">Excluir</a></td>
                                    <td><a href="{{ route('app.produto.editar', $produto->id) }}">Editar</a></td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $produtos->appends($request)->links() }}
                    <br>
                    Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de
                    {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }})
                </form>
            </div>
        </div>
    </div>
@endsection
