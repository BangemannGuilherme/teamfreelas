<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{ 
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'username',
        'password',
        'nome',
        'sobrenome',
        'email',
        'data_nascimento',
        'admin', 
        'status'
    ];

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }
}
