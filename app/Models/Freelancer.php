<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;

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
        'user_id',
        'data_registro',
        'localizao', 
        'descricao', 
        'trofeu'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function solicitacoes()
    {
        return $this->hasMany(Solicitacoes::class);
    }
}
