<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tem_Habilidade extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tem_habilidade';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'freelancer_id',
        'habilidade_id'
    ];
}
