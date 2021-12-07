@extends('layouts.adminlayouts')

@section('content')

<div class="col-sm-6">
    @component('admin.includes.title')
        Add Admin / customers
    @endcomponent

    <form method="POST" action="/admin/users">

        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter a user name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="password">Create a password</label>
            <input type="password" class="form-control" name="password" placeholder="Add a password">
        </div>

        <div class="form-group">
            <label for="role_id">Role</label>
            <select class="form-control" name="role_id">
                <option disabled selected>Select a role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id}}">{{ $role->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="active">Active</label>
            <select class="form-control" name="active">
                <option  disabled selected>Select a status</option>
                <option value="1">Yes</option>
                <option value="2">No</option>
            </select>
        </div>

         @component('admin.includes.formErrors')
        @endcomponent


        <button type="submit" class="btn btn-primary">Add user</button>

    </form>


</div>
@endsection