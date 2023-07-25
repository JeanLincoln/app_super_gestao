@extends('app.layouts.basico')
@section('titulo', 'Pedido Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>
                {{ isset($pedido->id) ? 'Editar Produtos do pedido' : 'Adicionar produtos ao pedido' }}
            </p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <h3>Detalhes do pedido</h3>
                <p>ID do pedido: {{ $pedido->id }}</p>
                <p>ID do cliente: {{ $pedido->cliente->id }}</p>

                <div style="width:30%; margin-left:auto; margin-right:auto;">
                    <h4>Itens do pedido:</h4>
                    <table border="1" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Data de inclusão do item no pedido</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedido->produtos as $produto)
                                <tr>
                                    <td>{{ $produto->id }}</td>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ $produto->pivot->created_at->format('d/m/y') }}</td>
                                    <td>
                                        <form id="form_{{ $pedido->id }}_{{ $produto->id }}" method="post"
                                            action="{{ route('pedido-produto.destroy', ['pedido' => $pedido->id, 'produto' => $produto->id]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @component('app.pedido_produto._components.form_create', ['pedido' => $pedido, 'produtos' => $produtos])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection
