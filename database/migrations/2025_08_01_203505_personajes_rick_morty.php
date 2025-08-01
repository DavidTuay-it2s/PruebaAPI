<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('personajes_rick_morty', function (Blueprint $table) {
           $table->id();
           $table->string('nombre');
           $table->string('especimen');
           $table->string('genero');
           $table->string('imagen');
           $table->string('estado');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
