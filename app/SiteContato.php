<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Selecionando registros com dois ou mais Wheres

select * from tabela where condicao1 and condicao2 and condicao 3

SiteContato::where('campo_a_ser_comparado_por_igual','Conjunto de parametros')->where('campo_a_ser_comparado_por_igual','Conjunto de parametros')
SiteContato::where('nome','<>','[3,6]')
    ->whereIn('motivo_contato','[1,2]')+
    ->whereBetween('created_at','['2020-08-01 00:00:00','2020-08-31 : 23:59:59']')
    ->get();

*/

class SiteContato extends Model
{

}
