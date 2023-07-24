<form method="POST"
    action="{{ isset($cliente->id) ? route('cliente.update', ['cliente' => $cliente->id]) : route('cliente.store') }}">
    @csrf

    @if (isset($cliente->id))
        @method('PUT')
    @endif

    <input type="text" name="nome" placeholder="Nome" value="{{ $cliente->nome ?? old('nome') }}" class="borda-preta">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <button type="submit" class="borda-preta">{{ isset($cliente->id) ? 'Editar' : 'Cadastrar' }}</button>
</form>
