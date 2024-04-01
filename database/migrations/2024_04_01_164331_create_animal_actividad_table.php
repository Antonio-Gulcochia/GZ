<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalActividadTable extends Migration
{
    public function up()
    {
        Schema::create('animal_actividad', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('actividad_id');
            $table->foreign('animal_id')->references('id')->on('animales')->onDelete('cascade');
            $table->foreign('actividad_id')->references('id')->on('actividades')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('animal_actividad');
    }
}

