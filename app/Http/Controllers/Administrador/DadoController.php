<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DadoController extends Controller
{
    public function index(){
        return view('administrador.dados');
    }

}