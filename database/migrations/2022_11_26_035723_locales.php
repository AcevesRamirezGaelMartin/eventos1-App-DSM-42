<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre_local')->nullable();
            $table->unsignedBigInteger('id_usuarios');
            $table->foreign('id_usuarios')->references('id')->on('usuarios');   
            $table->string('ubicacion')->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('precio')->nullable();
            $table->integer('capacidad')->nullable();
            $table->integer('tamano')->nullable();



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
        Schema::dropIfExists('locales');
    }
};
