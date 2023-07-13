<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Métodos staticos ::whereIn() e ::whereNotIn()

::whereIn()

retorna um builder na qual realiza a consulta na tabela informada no primeiro parametro,
de acordo com o conjuto de parametros informado no 2 parametro do método.

SiteContato::whereIn('campo_a_ser_comparado_por_igual','Conjunto de parametros')
SiteContato::whereIn('motivo_contato','[1,3]')->get();

Na query acima ele iria retornar os usuarios que tiveram o motivo de contato 1 e 3.

o ::whereNotIn() é basicamente a mesma coisa, so que o contrario, ou seja a query acima seria o motivo de contato
diferente de 1 e 3.

*/

class SiteContato extends Model
{

}
