<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, SoftDeLetes;

    protected $fillable = [
        'id',
        'nome',
        'nome_palestrante',
        'descricao',
        'endereco',
        'bairro',
        'local',
        'imagem',
        'vagas_disponiveis',
        'duracao',
        'status',
        'metodo',
        'data',
        'hora'
        // $table->foreign('certificado_id')->references('id')->on('certificates');
    ];
}
