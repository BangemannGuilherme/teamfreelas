<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contrato';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'proposta_id',
        'freelancer_id',
        'data_inicio',
        'data_fim',
        'tipo_pagamento_id',
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
}