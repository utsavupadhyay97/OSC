@extends('layouts.app')

@section('content')
    {{-- <h1> hello</h1> --}}
<div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-4">
                    <div class="card">
                            <img src="{{ url('/images/products/'.$product->photo) }}"  class="card-img-top" style="width:300px;height:300px;" >
                            <div class="card-body">
                              <h5 class="card-title">{{ $product->name}}</h5>
                              <p class="card-text"> {{ $product->description}} </p>
                              <a href="{{ url( '/Cart/' . $product->id) }}" class="btn btn-primary btn-block ">Add To Cart</a>
                            </div>
                    </div>
            </div>
        </div>
</div>
    



    @endsection