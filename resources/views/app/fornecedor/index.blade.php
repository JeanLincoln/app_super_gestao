<h3>Fornecedor</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $fornecedor)
        Fornecedor: @{{ $fornecedor['nome'] ?? 'Dado nao foi preenchido' }}
        <br>
        Status: {{ $fornecedor['status'] ?? 'Dado nao foi preenchido' }}
        <br>
        CPNJ : {{ $fornecedor['cnpj'] ?? 'Dado nao foi preenchido' }}
        <br>
        Telefone : ({{ $fornecedor['ddd'] ?? 'Dado nao foi preenchido' }}
        {{ $fornecedor['telefone'] ?? 'Dado nao foi preenchido' }})
        <br>
        <hr>
    @empty Nao existem fornecedores cadastrados!
    @endforelse
@endisset
