<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos_vacantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidato_id');
            $table->unsignedBigInteger('vacante_id');
            $table->foreign('candidato_id')->references('id')->on('candidatos')->onDelete('cascade');
            $table->foreign('vacante_id')->references('id')->on('vacantes')->onDelete('cascade'); 

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
        Schema::dropIfExists('vacante_has_candidatos');
    }
}
