<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos_imagenes extends Model
{
    use HasFactory;
    protected $fillable = [
         'producto_id','ruta'
    ];
}
