<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //Setar um tabelas diferente do padrao, para a model entender
    //Classe Item mapeando Produtos
    protected $table = 'produtos';

    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];
    use HasFactory;

    public function ProdutoDetalhe() {
        return $this->belongsTo('App\Models\Item', 'produto_id', 'id')
    }
}
