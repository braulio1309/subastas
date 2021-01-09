<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pujas extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'producto_id','subasta_id' ,'monto'
    ];
}
