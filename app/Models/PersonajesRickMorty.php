<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonajesRickMorty extends Model
{
    protected $table = 'personajes_rick_morty';
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $fillable = [
        'id',
        'nombre',
        'especimen',
        'genero',
        'imagen',
        'estado',
    ];

    protected $hidden = [
        'create_at',
        'update_at',
    ];

}
