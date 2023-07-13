<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

whereColumn()

compara duas colunas de um registro e determina se o registro deve retornar ou não.

Esse método desconsidera valores nulos, ou seja, se o registro dentro de uma coluna for nulo, ele não considera-lo.

SiteContato::whereColumn('coluna_a_ser_comparada','operador comparativo','coluna_a_ser_comparada')

SiteContato::whereColumn('created_at', 'updated_at')
SiteContato::whereColumn('created_at','>','updated_at')
SiteContato::whereColumn('created_at','<','updated_at')

SiteContato::orWhereColumn('created_at', 'updated_at')
SiteContato::orWhereColumn('created_at','>','updated_at')
SiteContato::orWhereColumn('created_at','<','updated_at')


*/

class SiteContato extends Model
{

}
