<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

o método save() atualiza os dados no banco de dados.

$fornecedor = Fornecedor::find(1);

$fornecedor->nome = 'Fornecedor 123'
$fornecedor->site = 'fornecedor123.com.br'
$fornecedor->email = 'fornecedor123@gmail.com'

$contatos = SiteContato::all();

*/
class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];
}
