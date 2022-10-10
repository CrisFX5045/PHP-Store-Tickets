<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'numero_telefono',
        'correo',
        'cantidad',
        'precio_total',
        'event_id'
    ];
}
