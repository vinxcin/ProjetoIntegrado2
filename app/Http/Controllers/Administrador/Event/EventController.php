<?php

namespace App\Http\Controllers\Administrador\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('administrador.events.index');
    }
    public function create(){
        return view('administrador.events.create');
    }
}
