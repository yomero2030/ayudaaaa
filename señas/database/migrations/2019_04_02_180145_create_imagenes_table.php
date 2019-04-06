<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->bigIncrements('id_imagen');
            $table->string('imagen',255);
            $table->unsignedBigInteger('palabra_id');
            $table->unsignedBigInteger('letra_id');
            $table->unsignedBigInteger('numero_id');
            

            $table->foreign('palabra_id')->references('id_palabra')->on('palabras');
            $table->foreign('letra_id')->references('id_letra')->on('letras');
            $table->foreign('numero_id')->references('id_numero')->on('numeros');

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
        Schema::dropIfExists('imagenes');
    }
}
