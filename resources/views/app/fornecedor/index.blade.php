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

@php $i = 0 @endphp
@while (isset($fornecedores[$i]))
    @isset($fornecedores)
        Fornecedor: {{ $fornecedores[$i]['nome'] ?? 'Dado nao foi preenchido' }}
        <br>
        Status: {{ $fornecedores[$i]['status'] ?? 'Dado nao foi preenchido' }}
        <br>
        CPNJ : {{ $fornecedores[$i]['cnpj'] ?? 'Dado nao foi preenchido' }}
        <br>
        Telefone : ({{ $fornecedores[$i]['ddd'] ?? 'Dado nao foi preenchido' }}
        {{ $fornecedores[$i]['telefone'] ?? 'Dado nao foi preenchido' }})
        <br>
        <hr>
    @endisset
    @php $i++ @endphp
@endwhile
