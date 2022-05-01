<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proposta';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'servico_id',
        'freelancer_id',
        'data_proposta', 
        'tipo_pagamento_id', 
        'valor_pagamento',
        'status_proposta_id',
        'comentario_cliente',
        'comentario_freelancer'
    ];
}
