<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecintosTable extends Migration
{
    public function up()
    {
        Schema::create('recintos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('necesidades_especificas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recintos');
    }
}
