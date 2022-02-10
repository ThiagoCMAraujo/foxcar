<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = [
    'placa',
    'ano',
    'modelo_id',
    'valor',
    'disponivel'
    ];

    public function modelo(){
        $this->hasOne(Modelo::class, 'id', 'modelo_id');
    }
}
