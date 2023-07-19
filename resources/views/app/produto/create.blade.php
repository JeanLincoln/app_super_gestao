@extends('app.layouts.basico')
@section('titulo', 'Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Adicionar Produto</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                {{-- <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li> --}}
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form method="POST" action="{{ route('app.fornecedor.adicionar') }}">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome" value="{{ $produto->nome ?? old('nome') }}"
                        class="borda-preta">
                    {{-- {{ $errors->has('nome') ? $errors->first('nome') : '' }} --}}
                    <input type="text" name="descricao" placeholder="descricao"
                        value="{{ $produto->descricao ?? old('descricao') }}" class="borda-preta">
                    {{-- {{ $errors->has('descricao') ? $errors->first('descricao') : '' }} --}}
                    <input type="text" name="peso" placeholder="peso" value="{{ $produto->peso ?? old('peso') }}"
                        class="borda-preta">
                    {{-- {{ $errors->has('peso') ? $errors->first('peso') : '' }} --}}
                    <select name="unidade_id">
                        <option value="">--- Selecione a unidade de medida ---</option>
                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->descricao }}</option>
                        @endforeach
                    </select>
                    {{-- {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }} --}}
                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
