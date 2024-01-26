<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolaridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /*La tabla se crea por default con updated_at", "created_at 
     pero en el modelo de Escolaridad se agrego public $timestamps = false; para evitar esos campos*/ 

    public function up()
    {
        
        Schema::create('escolaridads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolaridads');
    }
}
