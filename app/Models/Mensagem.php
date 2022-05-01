<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mensasgem';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'freelancer_id',
        'cliente_id',
        'data_mensagem', 
        'mensagem', 
        'proposta_id',
        'status_proposta_id'
    ];
}
