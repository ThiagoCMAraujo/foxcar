<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca_id',
        'nome'
    ];

    public function marca(){
        $this->hasOne(Marca::class, 'id', 'marca_id');
    }
}
