@extends('layouts.adminlayouts')

@section('content')

    @component('admin.includes.title')
        Blogs list
    @endcomponent

    @if(Session::has('flash_admin'))
        <div class="flash_message">
            {{ Session('flash_admin') }}
        </div>
    @endif


    <table class="table table-striped admin_blogs_table">
        <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Title</th>
                {{-- <th>price</th> --}}
                <th>Owner</th>
                <th>Description</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if ($blogs)
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id}}</td>
                        <td>
                            <img src="{{ url('/images/Blogs/'.$blog->photo) }}" width="50px">
                        </td>
                        <td>
                            <a href="{{ url('/admin/blogs/'.$blog->id.'/edit')}}">
                                {{ $blog->title }}
                            </a>
                        </td>
                        {{-- <td>{{ $post->category->name}}</td> --}}
                        <td>{{ $blog->user->name}}</td>
                        <td>{{ $blog->description}}</td>
                         
                        <td>{{ $blog->created_at->diffForHumans() }}</td>
                        <td>{{ $blog->updated_at->diffForHumans() }}</td> 
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {{ $blogs->links() }}

@endsection