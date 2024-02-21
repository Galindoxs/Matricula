<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('codigoAlumno'); //codigoAlumno, int, primarykey()
            $table->String('nombre', 50); //string max 255 caracteres
            $table->String('apellido', 50);
            $table->string('correo', 100);
            $table->string('telefono', 100);
            $table->text('direccion', 1000);
            $table->integer('codigoCarrera');
            $table->timestamp(fechaNac);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
