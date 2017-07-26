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
      			$table->string('nombre');
      			$table->string('apellido');
      			$table->string('nacionalidad')->nullable();
      			$table->date('fecha_nac');
      			$table->string('email')->nullable();
      			$table->integer('dni');
      			$table->integer('telefono')->nullable();
      			$table->string('domicilio');
      			$table->string('domicilio_cobro');
      			$table->integer('estado_civil')->nullable();
      			$table->boolean('protector');
      			$table->integer('deporte_id');
				$table->string('imagen');
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
