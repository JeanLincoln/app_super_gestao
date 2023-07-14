<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

O método pluck permite recuperar todos os valores de uma determinada chave,
por exemplo de todos os dados de todos os usuariso gostariamos de retornar somente o email.

$contatos = SiteContato::all();

$contatos->pluck('email'); retornara um coleção somente com os emails
$contatos->pluck('email')->first();
$contatos->pluck('email')->last();
$contatos->pluck('email')->reverse();
$contatos->pluck('email')->toArray();
$contatos->pluck('email')->toJson();

podemos também com o segundo parametro inserir outra chave como indice, por exemplo,
podemos colocar o nome como idice o email como chave.

"Jorge" => "jorge@contato.com.br"

$contatos->pluck('email', 'nome');

*/

class SiteContato extends Model
{

}
