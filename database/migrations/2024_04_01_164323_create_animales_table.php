<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalesTable extends Migration
{
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('especie_id');
            $table->foreign('especie_id')->references('id')->on('especies');
            $table->unsignedBigInteger('cuidador_id')->nullable();
            $table->foreign('cuidador_id')->references('id')->on('cuidadores');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animales');
    }
}

