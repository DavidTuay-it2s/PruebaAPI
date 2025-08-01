<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RickMortyServices\RickMortyApi;

class PersonajesRickMorty extends Controller
{
    protected $api;

    public function __construct(RickMortyApi $api)
        {
           $this->api = $api;
        }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personajes = $this->api->Listar();
        return response()->json($personajes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $personajes = $this->api->obtenerPorId($id);
        return response()->json($personajes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
