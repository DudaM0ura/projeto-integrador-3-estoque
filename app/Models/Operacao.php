<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacao extends Model
{
    use HasFactory;

    protected $table = 'operacoes';
    protected $fillable = [
        'operacao'
    ];

    public function movimentacao(){
        return $this->hasMany(Movimentacao::class, 'id_operacao', 'id');
    }
}
