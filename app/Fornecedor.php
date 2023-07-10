<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
 O laravel realiza uma automacao para encontrar a tabela no bando de dados,
 Primeiro ele identifica o padrao camelcase no nome do model e para cada letra maiuscula,
 ele coloca um separador underline "_", depois ele faz a transformacao de todas as letras para minusculo,
 e por fim ele adiciona um "s" no final.
 O problema neste model e que por motivo da ligua portuguesa (brasil), o correto seria "fornecedores", e nao "fornecedors".
 Para isto podemos informar o parametro $table.
*/

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
}
