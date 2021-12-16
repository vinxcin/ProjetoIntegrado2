<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('administrador.events');
    }
      public function create(){
      return view('administrador.create');
   }
}
