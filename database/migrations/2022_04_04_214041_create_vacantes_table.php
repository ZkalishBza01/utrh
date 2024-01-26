<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->text('observaciones');
            $table->text('sueldo');
            $table->unsignedBigInteger('municipio_id');  
            $table->unsignedBigInteger('reclutador_id');
            $table->unsignedBigInteger('cliente_id');           
            $table->timestamps();

            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('reclutador_id')->references('id')->on('reclutadors');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacantes');
    }
}
