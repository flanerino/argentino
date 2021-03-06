<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {

            $table->increments('id');
            $table->integer("nro")->unique()->nullable();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nac')->nullable();
            $table->string('email')->nullable();
            $table->integer('dni')->nullable();
            $table->string('telefono')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('domicilio_cobro')->nullable();
            $table->integer('estado_civil')->nullable();
            $table->integer('deporte_id')->nullable();
            $table->string('imagen')->nullable();
            $table->boolean('activo');
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
        Schema::dropIfExists('socios');
    }
}
