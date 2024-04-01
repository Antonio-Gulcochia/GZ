<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadorAnimalTable extends Migration
{
    public function up()
    {
        Schema::create('cuidador_animal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuidador_id');
            $table->unsignedBigInteger('animal_id');
            $table->foreign('cuidador_id')->references('id')->on('cuidadores')->onDelete('cascade');
            $table->foreign('animal_id')->references('id')->on('animales')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuidador_animal');
    }
}

