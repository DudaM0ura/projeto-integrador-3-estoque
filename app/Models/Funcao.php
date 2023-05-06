<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    use HasFactory;

    protected $table = 'funcoes';

    public function funcionario(){
        return $this->hasMany(Funcionario::class, 'id_funcao', 'id');
    }
}
