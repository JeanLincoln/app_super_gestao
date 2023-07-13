<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Selecionando registros nulos ou não nulos

select * from tabela where condicao1 is null
select * from tabela where condicao1 is not null

SiteContato::whereNull('campo_a_ser_comparado_por_igual')
SiteContato::whereNotNull('campo_a_ser_comparado_por_igual')

SiteContato::whereNull('update_at')->get();

SiteContato::whereNotNull('update_at')->get();

utilizando a porta logica or

SiteContato::orWhereNull('update_at')->get();

SiteContato::orWhereNotNull('update_at')->get();

*/

class SiteContato extends Model
{

}
