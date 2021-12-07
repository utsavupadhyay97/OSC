@extends('layouts.adminlayouts')

@section('content')

    @component('admin.includes.title')
        Products list
    @endcomponent

    @if(Session::has('flash_admin'))
        <div class="flash_message">
            {{ Session('flash_admin') }}
        </div>
    @endif


    <table class="table table-striped admin_products_table">
        <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Name</th>
                <th>price</th>
                <th>unit_in_stock</th>
                <th>Owner</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if ($products)
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id}}</td>
                        <td>
                            <img src="{{ url('/images/products/'.$product->photo) }}" width="50px">
                        </td>
                        <td>
                            <a href="{{ url('/admin/products/'.$product->id.'/edit')}}">
                                {{ $product->name }}
                            </a>
                        </td>
                        {{-- <td>{{ $post->category->name}}</td> --}}
                        <td>{{ $product->price}}</td>
                        <td>{{ $product->unit_in_stock}}</td>
                         <td>{{ $product->user->name}}</td> 
                        <td>{{ $product->created_at->diffForHumans() }}</td>
                        <td>{{ $product->updated_at->diffForHumans() }}</td> 
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {{ $products->links() }}

@endsection