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
    Fornecedor: {{ $fornecedores[0]['nome'] ?? 'Dado nao foi preenchido' }}
    <br>
    Status: {{ $fornecedores[0]['status'] ?? 'Dado nao foi preenchido' }}
    <br>
    CPNJ : {{ $fornecedores[0]['cnpj'] ?? 'Dado nao foi preenchido' }}
    <br>
    Telefone : ({{ $fornecedores[0]['ddd'] ?? 'Dado nao foi preenchido' }}
    {{ $fornecedores[0]['telefone'] ?? 'Dado nao foi preenchido' }}) -
    @switch($fornecedores[0]['ddd'])
        @case('11')
            Sao paulo - SP
        @break

        @case('32')
            Juiz de fora - MG
        @break

        @case('85')
            Fortaleza - CE
        @break

        @default
            Estado nao identificado
    @endswitch
@endisset
