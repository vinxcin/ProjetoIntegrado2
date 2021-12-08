<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [

        'cep',
        'rua',
        'numero',
        'uf',
        'cidade',
        'bairro',
        'complemento',
        'user_id'
    ];

    //relacionamentos
    public function user() {
        return $this->belongsTo(User::class);
    }
}
