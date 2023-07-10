<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
E possivel criar registros no banco de dados atraves do metodo estatico ::create, para isto,
precisamos informar no model os campos permitidos para insercao pelo metodo ::create, para isto, utilizamos o $fillable conforme abaixo no model.

O comando para criacao pelo create seria o seguir:

\App\Fornecedor::create(['nome'=> 'Fornecedor ABC', 'site'=>'fornecedorabc.com.br','uf'=>'SP','email'=>'contato@fornecedorabc.com.br']);
*/

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];
}
