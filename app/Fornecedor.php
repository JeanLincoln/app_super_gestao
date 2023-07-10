<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*
O metodo estatico ::all() retorna uma colecao com todos os registros de uma tabela do banco de dados,
como por exemplo o model abaixo, poderiamos utilizar

$fornecedores = Fornecedor::all();

e ele nos retornaria uma colecao com todos os registros da tabela de fornecedores.
Podemos tambem encadear o comando ->toArray(); para que inves de retornar uma colecao ele retorne um array.
*/

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];
}
