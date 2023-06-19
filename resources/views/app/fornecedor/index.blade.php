<h3>Fornecedor</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $fornecedor)
        Iteracao atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] ?? 'Dado nao foi preenchido' }}
        <br>
        Status: {{ $fornecedor['status'] ?? 'Dado nao foi preenchido' }}
        <br>
        CPNJ : {{ $fornecedor['cnpj'] ?? 'Dado nao foi preenchido' }}
        <br>
        Telefone : ({{ $fornecedor['ddd'] ?? 'Dado nao foi preenchido' }}
        {{ $fornecedor['telefone'] ?? 'Dado nao foi preenchido' }})
        <br>
        @if ($loop->first)
            Primeira iteracao do loop
        @endif
        @if ($loop->last)
            Ultima iteracao do loop
            <br>
            Total de registros : {{ $loop->count }}
        @endif
        <br>
        <hr>
    @empty Nao existem fornecedores cadastrados!
    @endforelse
@endisset
