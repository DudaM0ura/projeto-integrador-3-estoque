<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';
    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento',
        'id_funcao'
    ];

    public function funcao(){
        return $this->belongsTo(Funcao::class, 'id_funcao', 'id');
    }

    public function login(){
        return $this->hasOne(Login::class, 'id_funcionario', 'id');
    }

    public function movimentacao(){
        return $this->hasMany(Movimentacao::class, 'id_funcionario', 'id');
    }
}
