<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
            'name',
            'email',
            'username',
            'password',
            'username',
            'cargo',
            'sede',
            'matricula',
            'cpf',
            'tipo'
    ];
}
