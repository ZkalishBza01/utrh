<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('sexo')->nullable();
            $table->integer('pretencionEconomica')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('cv', 2048)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->unsignedBigInteger('escolaridad_id')->nullable();
            $table->foreign('escolaridad_id')->references('id')->on('escolaridads');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
