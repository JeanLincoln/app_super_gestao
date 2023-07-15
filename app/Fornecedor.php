<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

o método delete() deleta o registro do banco de dados de acordo com o id informado.

$fornecedor = Fornecedor::find(1);

$fornecedor->delete();

ou

Fornecedor::find(1)->delete();

ou com o método destroy() no qual recebe um id ou vários ID's separados por vírgula.
Também é possivel encaminhar um array ou uma collection de elementos inteiros que representem os ID's desejados.

Fornecedor::destroy(1)


*/
class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];
}
