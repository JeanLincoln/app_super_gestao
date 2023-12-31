<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// comando utilizado no bash : php artisan make:controller -r ProdutoController --model=Produto

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];

    public function produtoDetalhe()
    {
        return $this->hasOne('App\ProdutoDetalhe');
    }
}
