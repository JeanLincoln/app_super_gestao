@extends('app.layouts.basico')
@section('titulo', 'Pedido')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de pedidos</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.create') }}">Novo pedido</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form action="POST">
                    <table border="1" width="100%">
                        <thead>
                            <tr>
                                <th>ID Pedido</th>
                                <th>ID Cliente</th>
                                <th>Visualizar</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $pedido)
                                <tr>
                                    <td>{{ $pedido->id }}</td>
                                    <td>{{ $pedido->cliente->id }}</td>
                                    <td>
                                        <a href="{{ route('pedido.show', ['pedido' => $pedido->id]) }}">Visualizar</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('pedido.edit', ['pedido' => $pedido->id]) }}">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}"
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

                    {{ $pedidos->appends($request)->links() }}
                    <br>
                    Exibindo {{ $pedidos->count() }} pedidos de {{ $pedidos->total() }} (de
                    {{ $pedidos->firstItem() }} a {{ $pedidos->lastItem() }})
                </form>
            </div>
        </div>
    </div>
@endsection
