<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/*

O método estático ::withTrashed() retorna todos os registros incluindo os excluidos.

$fornecedor = Fornecedor::withTrashed();

$fornecedor->get();

O método estático ::onlyTrashed() retorna somente os registros excluidos.

$fornecedor = Fornecedor::onlyTrashed();

$fornecedor->get();

O método de collection ->restore() restaura um registro que está excluido.

$fornecedor = Fornecedor::onlyTrashed()->get();

$fornecedor[indexDoObjetoASerRestaurado]->restore();
$fornecedor[0]->restore();


*/
class Fornecedor extends Model
{
     use SoftDeletes;

    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];
}
