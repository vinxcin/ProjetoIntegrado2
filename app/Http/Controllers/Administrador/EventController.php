<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        return view('administrador.events');
    }
      public function create(){
      return view('administrador.create');
   }

   public function store(EventRequest $request){
       Event::create($request->validated());

       return redirect()
            ->route('administrador.events')
            ->with('success','Evento cadastrado com sucesso!');
   }
}
