<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

first, last e reverse, são métodos aplicados em collections, ou seja,
quando descapsulamentos a query do builder com o get() ou all() por exemplo.

$contato = SiteContato::where('id','>',3)->get();

$contato->first(); retornara o primeiro objeto da coleção.
$contato->last(); retornara o ultimo objeto da coleção.
$contato->reverse(); reverte a ordem dos objetos.

*/

class SiteContato extends Model
{

}
