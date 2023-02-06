<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDetalhe extends Model
{
    protected $table = 'produtos_detalhes';
    protected $fillable = ['produto_id', 'comprimento', 'largura', 'altura', 'unidade_id'];
    use HasFactory;

    public function produto() {
        //Indicando qual o nome da coluna fk (coluna, nome-dacoluna-destino)
        return $this->belongsTo('App\Models\Item', 'produto_id', 'id');
    }
}
