<?php

namespace App\Services\RickMortyServices;

use App\Models\PersonajesRickMorty;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class RickMortyApi
{
    public function Listar()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        //trer unicamnete el nombre
//        if ($response->successful()) {
//            return collect($response->json()['results'])->pluck('name');
//        }
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

    public function GuardarDatosPerso(Request $request)
    {
        $datos = $request->all();
        $personaje = new PersonajesRickMorty();
        $personaje->nombre = $datos['name'];
        $personaje->especimen = $datos['species'];
        $personaje->genero = $datos['gender'];
        $personaje->imagen = $datos['image'];
        $personaje->estado = $datos['status'];
        $personaje->save();
        error_log(json_encode($datos));
        \Log::info('Datos recibidos desde Vue:', $datos);
        return response()->json(['mensaje' => 'Datos recibidos OK']);

    }
}
