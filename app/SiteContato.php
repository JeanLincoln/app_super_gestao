<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

first, last e reverse, são métodos aplicados em collections, ou seja,
quando descapsulamentos a query do builder com o get() ou all() por exemplo.

$contato = SiteContato::all();

$contato->toArray(); retorna os elementos no formado array associativo.
$contato->toJson(); retorna os elementos no formado JSON.


*/

class SiteContato extends Model
{

}
