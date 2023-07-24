<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos'; // como o nome da model é diferente do nome da tabela devemos declarar essa variavel.
    protected $fillable = ['nome', 'fornecedor_id', 'descricao', 'peso', 'unidade_id'];

    public function itemDetalhe()
    {
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    }

    public function fornecedor()
    {
        return $this->belongsTo('App\Fornecedor');
    }

    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido', 'pedidos_produtos', 'produto_id', 'pedido_id');
    }
}
