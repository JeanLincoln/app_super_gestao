<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Podemos utilizar uma função de callback para que seja utilizados subgrupos de filtros, fazendo com que a consulta seja
mais especifica como por exemplo:

    select *
    from table
    where nome = 'Jorger' or nome = 'ana' and (motivo_contato in (1,2) or id between 4 and 6)

    repare que temos dois grupos acima  e não a query abaixo:

    select *
    from table
    where nome = 'Jorger' or nome = 'ana' and motivo_contato in (1,2) or id between 4 and 6

Para conserguirmos reproduzir a query acima podemos fazer da seguinte forma

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
