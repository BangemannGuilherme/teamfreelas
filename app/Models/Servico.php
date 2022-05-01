<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servico';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'cliente_id',
        'descricao',
        'habilidade_principal_id', 
        'tipo_pagamento_id', 
        'valor_pagamento',
        'complexidade',
        'data_estimada'
    ];
}
