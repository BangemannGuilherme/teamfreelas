<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

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
        'user_id',
        'data_registro',
        'localizacao',
        'empresa_id'
    ];

     public function servico()
     {
         return $this->hasOne(Servico::class);
     }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}