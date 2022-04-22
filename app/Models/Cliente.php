<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cliente';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'usuario_id',
        'data_registro',
        'localizacao',
        'empresa_id',
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
}