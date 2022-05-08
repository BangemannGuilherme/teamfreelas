<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outras_Habilidade extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'outras_habilidades';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'servico_id',
        'habilidade_id'
    ];
}
