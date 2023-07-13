<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Métodos staticos ::whereBetween() e ::whereNotBetween()

Realiza uma comparação

::whereBetween()

retorna um builder na qual realiza uma comparação de numeros e datas baseada em um intervalo especificado no segundo parametro

SiteContato::whereBetween('campo_a_ser_comparado_por_igual','Conjunto de parametros')
SiteContato::whereBetween('motivo_contato','[3,6]')->get();

Na query acima ele iria retornar os usuarios que tiveram o motivo de contato 3,4,5,6.

::whereNotBetween()

Basicamente a mesma coisa, so que o contrario, ou seja a query acima seria o motivo de contato
diferente de menor que 3 e maior que 6.

*/

class SiteContato extends Model
{

}
