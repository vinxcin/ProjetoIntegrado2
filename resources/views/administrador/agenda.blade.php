@extends('layouts.admin')

@section('content')
    
<div id="search-container" class="col-md-4 busca">
    <h3>Minha Agenda</h3>
    <form action="/events/show/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
    
@endsection