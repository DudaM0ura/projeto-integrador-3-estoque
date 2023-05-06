<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $fillable = [
        'nome',
        'id_fornecedor',
        'preco',
        'validade'
    ];

    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'id_produto', 'id');
    }

    public function estoque(){
        return $this->belongsTo(Estoque::class, 'id_produto', 'id');
    }

    public function movimentacao(){
        return $this->hasMany(Movimentacao::class, 'id_produto', 'id');
    }
}
