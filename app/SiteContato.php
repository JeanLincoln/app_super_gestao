<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Selecionando registros com base em parâmetros do tipo data e hora

select * from tabela where condicao1 is null
select * from tabela where condicao1 is not null

SiteContato::whereDate('campo_a_ser_comparado_por_igual', 'data')

SiteContato::whereDate('created_at', '2020-02-02')->get();

SiteContato::whereDay('campo_a_ser_comparado_por_igual', 'dia do mes')
SiteContato::whereMonth('campo_a_ser_comparado_por_igual', 'mes')
SiteContato::whereYear('campo_a_ser_comparado_por_igual', 'ano')

SiteContato::whereDay('created_at', '2')
    ->SiteContato::whereMonth('created_at', '10')
    ->SiteContato::whereYear('created_at', '2023')
    ->get()

SiteContato::whereTime('campo_a_ser_comparado_por_igual','Operado de comparação', 'tempo')

SiteContato::whereTime('campo_a_ser_comparado_por_igual', '=', '10:22:33')
SiteContato::whereTime('campo_a_ser_comparado_por_igual', '>', '10:22:33')

*/

class SiteContato extends Model
{

}
