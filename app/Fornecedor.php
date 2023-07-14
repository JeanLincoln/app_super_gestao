<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

o método update() atualiza varios registros no banco de dados atráves de um array associativo e uma query.

Fornecedor::whereIn('coluna',['range_de_condições'])->['coluna','valor'];

Fornecedor::whereIn('id',[1,2])->update(['nome' =>'fornecedor teste', 'site' => 'teste.com.br']);

*/
class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];
}
