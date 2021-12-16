@extends('layouts.dash')

@section('content')
    
        <div id="search-container" class="row-md-5 busca">
            <h3>BUSQUE UM EVENTO</h3>
            <form action="/events/show/" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            </form>
        </div>
    
@endsection
