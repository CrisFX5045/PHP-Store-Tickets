<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_evento', 'precio' ,'cantidad', 'categories_id','imagen','descripcion','lugar','fecha','hora', 'tipo','publico'
        ];
}
