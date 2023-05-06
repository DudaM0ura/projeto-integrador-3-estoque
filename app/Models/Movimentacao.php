<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    protected $table ='movimentacoes';
    
    protected $fillable = [
            'id_operacao',
            'id_produto',
            'quantidade',
            'id_funcionario'
        ];

    public function produtos(){
        return $this->belongsTo(Produto::class, 'id_produto', 'id');
    }

    public function operacao(){
        return $this->belongsTo(Operacao::class, 'id_operacao', 'id');
    }
}
