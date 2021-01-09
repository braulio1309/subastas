<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subastas extends Model
{
    protected $fillable = [
        'nombre', 'estado'
    ];
}
