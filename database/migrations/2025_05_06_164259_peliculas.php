<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peliculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                        //nombre de tabla                               toda la tabla
        Schema::create('catalogo', function (Blueprint $table) {
            //funciones campos de la tabla
            $table->id();
            //      tipo    
            $table->text('titulo');
            $table->text('descripcion');
            $table->text('genero');
            $table->text('director');
            $table->date('fecha_estreno');

        });

        Schema::create('t_usuario', function (Blueprint $table) {
            //funciones campos de la tabla
            $table->id();
            //      tipo    
            $table->text('nombre');
            $table->text('usuario');
            $table->text('email');
            $table->text('password');
            $table->text('password_confir');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
