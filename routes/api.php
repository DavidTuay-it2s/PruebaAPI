<?php

use App\Http\Controllers\PersonajesRickMorty;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/personajes', [PersonajesRickMorty::class, 'index']);
Route::get('/personajes/{id}', [PersonajesRickMorty::class, 'show']);
