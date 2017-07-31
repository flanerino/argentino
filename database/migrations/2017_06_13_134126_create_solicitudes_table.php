<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nac')->nullable();
            $table->string('email')->nullable();
            $table->integer('dni')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('domicilio_cobro')->nullable();
            $table->integer('estado_civil')->nullable();
            $table->boolean('protector');
            $table->integer('deporte_id')->nullable();
            $table->integer('tipo_socios_id');
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
        Schema::dropIfExists('solicitudes');
    }
}
