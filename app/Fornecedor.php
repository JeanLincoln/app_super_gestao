<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
Podemos utilizar o metodo estatico ::find() para retornar registros especificos do banco de dados baseado na primary key, geralmente o id, como por exemplo

$fornecedor = Fornecedor::find(1);

Podemos utilizar um array de pesquisa no find:

$fornecedor = Fornecedor::find([1,2,3,4,5]);
*/

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];
}
