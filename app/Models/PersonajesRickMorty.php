<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonajesRickMorty extends Model
{
    protected $fillable = [
        'nombre',
        'especimen',
        'genero',
        'imagen',
        'estado',
    ];

}
