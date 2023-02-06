<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];
    use HasFactory;

    //1 pra 1
    public function ProdutoDetalhe() {
        return $this->hasOne('App\Models\ProdutoDetalhe');
    }
}
