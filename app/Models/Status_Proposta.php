<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_Proposta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'status_proposta';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'status_nome'
    ];
}
