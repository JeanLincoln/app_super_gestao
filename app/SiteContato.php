<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Podemos ordernar a consulta utilizando o orderBy

    select *
    from table
    order by desc

Para conserguirmos reproduzir a query acima podemos fazer da seguinte forma

SiteContato::orderBy('nome') método ascedente
SiteContato::orderBy('nome', 'desc') método descedente

encadeando ordenações:

SiteContato::orderBy('motivo_contato')->orderBy('nome', 'desc')

*/

class SiteContato extends Model
{

}
