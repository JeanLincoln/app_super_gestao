<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Métodos statico ::where()

O método statico where é um construtor, ou seja ele não retorna uma collection e sim um builder.
Para que possamos obter uma collection devemos encadea-lo a um ->get()

O metodo where tem os mesmos operadores logicos que o sql, segue eles:

==      ::where('coluna', 'termo')->get();                      compara a coluna e igual ao termo
>       ::where()->get('coluna','>','termo');                   compara se coluna e maior que o termo
>=      ::where()->get('coluna','>=','termo');                  compara se coluna e maior ou igual que o termo
<       ::where()->get('coluna','<','termo');                   compara se coluna e menor que o termo
=<      ::where()->get('coluna','=<','termo');                  compara se coluna e menor ou igual que o termo
<>      ::where()->get('coluna','<>','termo');                  compara se coluna e diferente que o termo
like    ::where()->get('coluna','like','%termo');               verdadeiro se coluna e começa com o termo
like    ::where()->get('coluna','like','termo%');               verdadeiro se coluna e termina com o termo
like    ::where()->get('coluna','like','%termo%');              verdadeiro se coluna e em alguma parte dela contém o termo
like    ::where()->get('coluna','like','termo1%termo2%termo3'); verdadeiro se coluna e começa com o termo1, contem o termo2, e termina com o termo3

*/

class SiteContato extends Model
{

}
