<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalRecintoTable extends Migration
{
    public function up()
    {
        Schema::create('animal_recinto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('recinto_id');
            $table->foreign('animal_id')->references('id')->on('animales')->onDelete('cascade');
            $table->foreign('recinto_id')->references('id')->on('recintos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('animal_recinto');
    }
}

