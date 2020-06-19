<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomePaciente');
            $table->string('nomeMedico');
            $table->date('dataConsulta');
            $table->string('horaConsulta');
            $table->string('causa');
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
        Schema::dropIfExists('marcar_models');
    }
}
