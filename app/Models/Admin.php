<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id'
    ];

    public function user(){
        $this->hasOne(User::class, 'id', 'user_id');
    }
}
