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

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CPNJ : {{ $fornecedores[0]['cnpj'] ?? 'Dado nao foi preenchido' }}
    {{--
        Se a variavel testada nao estiver definida (isset)
    ou
        $variavel testado possuir o valor null
    --}}
@endisset
