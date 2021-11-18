<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('segundo_nombre');
            $table->string('apellidopat');
            $table->string('apellidomat');
            $table->string('sexo');
            $table->string('fecha_de_nacimiento');
            $table->string('puesto_de_trabajo');
            $table->string('curp');
            $table->string('rfc');
            $table->string('estado_civil');
            $table->string('codigo_postal');
            $table->integer('salario');
            $table->string('correo');
            $table->string('horario');
            $table->string('area_de_trabajo');
            $table->string('facebook');
            $table->string('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
