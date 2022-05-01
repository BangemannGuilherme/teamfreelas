<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'freelancer';
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
        'localizao', 
        'descricao', 
        'trofeu'
    ];
}
