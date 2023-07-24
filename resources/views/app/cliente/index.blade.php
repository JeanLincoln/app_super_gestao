@extends('app.layouts.basico')
@section('titulo', 'Cliente')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de clientes</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.create') }}">Novo cliente</a></li>
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
                                <th>Visualizar</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ $produto->nome }}</td>
                                    <td>
                                        <a href="{{ route('cliente.show', ['cliente' => $cliente->id]) }}">Visualizar</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $clientes->appends($request)->links() }}
                    <br>
                    Exibindo {{ $clientes->count() }} clientes de {{ $clientes->total() }} (de
                    {{ $clientes->firstItem() }} a {{ $clientes->lastItem() }})
                </form>
            </div>
        </div>
    </div>
@endsection
