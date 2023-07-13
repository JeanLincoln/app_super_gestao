<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Selecionando registros utilizando a porta logica or

select * from tabela where condicao1 or condicao2 or condicao 3

SiteContato::where('campo_a_ser_comparado_por_igual','Conjunto de parametros')->orWhere('campo_a_ser_comparado_por_igual','Conjunto de parametros')

SiteContato::where('nome','<>','[3,6]')
    ->orWhereIn('motivo_contato','[1,2]')+
    ->orWhereBetween('created_at','['2020-08-01 00:00:00','2020-08-31 : 23:59:59']')
    ->get();

*/

class SiteContato extends Model
{

}
