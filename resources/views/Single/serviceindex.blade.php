@extends('layouts.app')

@section('content')
    {{-- <h1> hello</h1> --}}

    <div class="container mt-2">
            <div class="row">
                <div class="col-sm-6">
                <h1>{{ $Service->name}}</h1>
                {{ $Service->description}}  <br>
                {{-- NPRs.{{ $product->price}} --}}
                            <a href="{{ url( '/service/' . $Service->id) }}" class="btn btn-primary">hire service</a></p>                              {{-- <button type="button" class="btn btn-primary">Add TO Cart</button> --}}
                </div>
           
                <div class="col-sm-6">
        {{-- <div class="col-5"> --}}
                <img src="{{ url('/images/services/'.$Service->photo) }}" width="300px">            
                 </div>

             </div>

    </div>




    @endsection