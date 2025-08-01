<?php

use App\Services\RickMortyServices\RickMortyApi;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
});

Route::controller(RickMortyApi::class)->group(function () {
    Route::get('/personajes', 'listar');
});
