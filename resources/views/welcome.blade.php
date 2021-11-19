@extends('layouts.app')

@section('content')

<div class="bg-gradient-primary">

    <div class="container-fluid" style="height: 94vh;">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center pt-5">
            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
            <div class="card" style="width: 50%; height:100%; background-color:white;">
                <div class="row-lg-7 mt-5">
                    <div class="p-5">
                        <div id="search-container" class="row-md-5 busca">
                            <h3>BUSQUE UM EVENTO</h3>
                            <form action="/events/show/" method="GET">
                                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
                            </form>
                        </div>
                        
                    
                            @csrf

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection