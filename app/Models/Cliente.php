<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'cep',
        'endereco',
        'uf',
        'numero',
        'complemento',
        'cidade',
        'bairro',
        'celular',
        'sexo',
        'nascimento',
        'cpf',
        'email',
        'observacao'
    ];
}
