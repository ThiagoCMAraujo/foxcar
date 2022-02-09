<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    public $table = 'alugueis';
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'carro_id',
        'data_aluguel',
        'data_devolucao'
    ];
}
