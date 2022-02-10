<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'marca_id',
        'nome'
    ];

    protected $primary = ['carro_id', 'cliente_id'];
    public $incrementing = false;

    public function marca()
    {
        $this->hasOne(Marca::class, 'id', 'marca_id');
    }
}
