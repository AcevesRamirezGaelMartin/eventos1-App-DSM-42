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
        Schema::create('consumibles', function (Blueprint $table) {
            $table->id('id');
            $table->integer('sillas')->nullable();
            $table->integer('mesas')->nullable();
            $table->integer('comida')->nullable();
            $table->integer('bebidas')->nullable();
            $table->integer('decoraciones')->nullable();
            $table->unsignedBigInteger('id_eventos')->nullable();
            $table->foreign('id_eventos')->references('id')->on('eventos')->nullable();    
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
        Schema::dropIfExists('consumibles');
    }
};
