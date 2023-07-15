<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/*

O método softDelete() deleta e não deleta o registro do banco de dados, o que acontece é que
É inserido uma nova coluna no banco de dados chamada deleted_at e apartir disto, se o registro
tiver algum valor nesta coluna, o ORM considera este como um registro deletado.
Isto é muito útil para quando precisamos deletar um registro mas ainda precisamos deixar o seu historico.

Para isto precisamos criar um trait com o softDeletes no model conforme feito abaixo.

Logo após devemos criar uma nova migration criando a nova coluna na tabela com o softDeletes
Favor verificar o arquivo de migration nesse commit

$fornecedor = Fornecedor::find(1);

$fornecedor->delete();

verifique que depois do comando acima o registro não será deletado do banco de dados, mas somente adicionado um novo valor
na tabela deleted_at.

Agora quando utilizarmos metodos estaticos para recuperar os registros este registro não irá aparecer.

para deleter o registro de fato, deveremos utilizar um outro método

$fornecedor = Fornecedor::find(2);

$fornecedor->forceDelete();

Agora o registro de fato foi retirado.

*/
class Fornecedor extends Model
{
     use SoftDeletes;

    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];
}
