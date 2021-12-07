@extends('layouts.adminlayouts')

@section('content')

    @component('admin.includes.title')
        Administrators / Authors
    @endcomponent

     @if(Session::has('flash_admin'))
        <div class="flash_message">
            {{ Session('flash_admin') }}
        </div>
    @endif 


    <table class="table table-striped admin_users_table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
         @if ($users)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                            <td><a href="{{ url('/admin/users/'.$user->id.'/edit')}}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>{{ $user->active == 1 ? 'Yes' : 'No' }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>{{ $user->updated_at->diffForHumans() }}</td>  
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

@endsection