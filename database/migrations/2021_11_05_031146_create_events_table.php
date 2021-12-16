<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nome');
            $table->string('nome_palestrante');
            $table->string('descricao');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('local');
            $table->string('imagem');
            $table->integer('vagas_disponiveis');
            $table->time('duracao');
            $table->boolean('status');
            $table->boolean('metodo');
            $table->date('data');
            $table->time('hora');
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
        Schema::dropIfExists('events');
    }
}
