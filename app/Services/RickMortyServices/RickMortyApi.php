<?php

namespace App\Services\RickMortyServices;

use Illuminate\Support\Facades\Http;

class RickMortyApi
{
    public function Listar()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Error al obtener personajes de Rick & Morty');
    }
}
