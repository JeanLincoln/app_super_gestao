<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Podemos utilizar uma função de callback para que seja utilizados subgrupos de filtros, fazendo com que a consulta seja
mais especifica.


SiteContato::where(function($query) {})->where(function($query) {})->orWhere(function($query) {})

SiteContato::where(function($query) {
    $query->where('nome','Jorge')
        ->orWhere('nome','ana');
})
    ->where(function($query) {
        $query->whereIn('motive_contato',[1,2])
        ->orWhereBetween('id',[4,6]);
    })
    ->get();





*/

class SiteContato extends Model
{

}
