<h3>Fornecedor</h3>

{{--
    testa se a variavel armazena algum valor falsy e retorna true ou false
    valores falsy:
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array vazio
    - variavel sem valor

    com as situacoes acima o @empty retornara true
--}}


@foreach ($fornecedores as $fornecedor)
    @isset($fornecedores)
        Fornecedor: {{ $fornecedor['nome'] ?? 'Dado nao foi preenchido' }}
        <br>
        Status: {{ $fornecedor['status'] ?? 'Dado nao foi preenchido' }}
        <br>
        CPNJ : {{ $fornecedor['cnpj'] ?? 'Dado nao foi preenchido' }}
        <br>
        Telefone : ({{ $fornecedor['ddd'] ?? 'Dado nao foi preenchido' }}
        {{ $fornecedor['telefone'] ?? 'Dado nao foi preenchido' }})
        <br>
        <hr>
    @endisset
@endforeach
