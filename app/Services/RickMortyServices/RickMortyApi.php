<?php

namespace App\Services\RickMortyServices;

use Illuminate\Support\Facades\Http;

class RickMortyApi
{
    public function Listar()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        //trer unicamnete el nombre
        if ($response->successful()) {
            return collect($response->json()['results'])->pluck('name');
        }
        //traer los personajes que el estado es alive o
//        if ($response->successful()) {
//            $data = $response->json();
//            $vivos = collect($data['results'])->where('status', 'Alive')->values();
//            return $vivos;
//        }

        throw new \Exception('Error al obtener personajes de Rick & Morty');
    }

    //trer personaje por el id
    public function obtenerPorId($id)
    {
        $response = Http::get("https://rickandmortyapi.com/api/character/{$id}");

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception("Personaje con ID $id no encontrado");
    }
}
