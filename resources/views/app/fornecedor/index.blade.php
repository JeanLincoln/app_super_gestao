<h3>Fornecedor</h3>

{{-- Verifica se uma variavel esta ou nao definida, se estiver ela executa um bloco de codigo ou retorna true --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset
    <br>
@endisset
