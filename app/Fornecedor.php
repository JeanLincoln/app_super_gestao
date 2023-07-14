<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

o método fill() atualiza os dados no banco de dados atrávez de um array associativo.

$fornecedor2 = Fornecedor::find(2);

$fornecedores2->fill(['nome'=> 'Fornecedor789','site'=>'Fornecedor789.com.br','email'=>'Fornecedor789@gmail.com.br'])

$fornecedores2->save();

Para que isto funcione precisamos que os dados no fill estejam  no fillable.


*/
class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];
}
