<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'cpf', 'telefone', 'rua', 'numero', 'complemento', 'bairro', 'cep', 'cidade', 'estado'];
}
