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
            $table->id();
            $table->string('nome');
            $table->string('nome_palestrante');
            $table->string('descricao');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('local');
            $table->string('imagem');
            $table->vagas_disponiveis();
            $table->duracao();
            $table->certificado_id();
            $table->bool('status');
            $table->bool('metodo');
            $table->date('data');
            $table->time('hora');
            $table->timestamps();

            $table->foreign('certificado_id')->references('id')->on('certificates');
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
