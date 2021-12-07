@extends('layouts.adminlayouts')

@section('content')

<div class="col-sm-6">
    @component('admin.includes.title')
        Edit Administrators / Authors
    @endcomponent

    @if (!empty($user))
        

    <form method="POST" action="/admin/users/{{ $user->id}}" style="text-align:right">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-secondary">Delete user</button>
  
    </form>
   
  

    <form method="POST" action="/admin/users/{{ $user->id}}">

        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter a user name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label for="password">Create a password</label>
            <input type="password" class="form-control" name="password" placeholder="Add a password">
        </div>

        <div class="form-group">
            <label for="role_id">Role</label>
            <select class="form-control" name="role_id">
                <option disabled>Select a role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id}}" {{ $user->role_id == $role->id ? 'selected': ''}}>{{ $role->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="active">Active</label>
            <select class="form-control" name="active">
                <option  disabled selected>Select a status</option>
                <option value="1" {{ $user->active == 1 ? 'selected':''}}>Yes</option>
                <option value="2" {{ $user->active == 2 ? 'selected':''}}>No</option>
            </select>
        </div>

        @component('admin.includes.formErrors')
        @endcomponent


        <button type="submit" class="btn btn-primary">Add user</button>

    </form>
    @else
        <div>Sorry, no user found</div>
    @endif
</div>
@endsection