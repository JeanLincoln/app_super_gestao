@extends('app.layouts.basico')
@section('titulo', 'Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de produtos</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo produto</a></li>
                {{-- <li><a href="{{ route('produto.show') }}">Consulta</a></li> --}}
            </ul>
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
                                <th>Fornecedor</th>
                                <th>Peso</th>
                                <th>Unidade ID</th>
                                <th>Comprimento</th>
                                <th>Altura</th>
                                <th>Largura</th>
                                <th>Visualizar</th>
                                <th>Excluir</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ $produto->descricao }}</td>
                                    <td>{{ $produto->fornecedor->nome }}</td>
                                    <td>{{ $produto->peso }}</td>
                                    <td>{{ $produto->unidade_id }}</td>
                                    <td>{{ $produto->itemDetalhe->comprimento ?? '' }}</td>
                                    <td>{{ $produto->itemDetalhe->altura ?? '' }}</td>
                                    <td>{{ $produto->itemDetalhe->largura ?? '' }}</td>
                                    <td>
                                        <a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualizar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('produto.destroy', ['produto' => $produto->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Excluir</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Editar</a>
                                    </td>
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
