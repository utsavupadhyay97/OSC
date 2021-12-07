@extends('layouts.adminlayouts');

@section('content')

<div class="col-sm-12">




@component('admin.includes.title')
 
Services

@endcomponent
<div class="row">
<div class="col-md-6">
      
        <table class="table table-stripped admin services_table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Services Title </td>
                        <td>Services photo </td>
                        <td>Services description </td>
                    </tr>
                </thead>
                <tbody>
                    @if ($services)
                    @foreach ($services as $service)
    
                    <tr>
                    <th>{{ $service->id}}</th>
                    <th> <a href="{{url('/admin/services/'.$service->id.'/edit/') }}">{{ $service->title }}</a> </th>
                    <td>
                        <img src="{{ url('/images/services/'.$service->photo) }}" width="50px">
                    </td>
                    <th>{{ $service->description}}</th>
                    {{-- Str::words($value, $words = 100, $end = '...') --}}
                 
    
                    </tr>
                        
                    @endforeach
                        
                    @endif
                </tbody>
            </table>
    
</div>
  {{-- <div class="col-md-6">

        <form action="/admin/services" method="POST" enctype="multipart/form-data">
            @csrf
        
            
        
                <div class="form-group">
                    <label for="file">service pic</label>
                    <div>
                        {{-- <img src="{{ url(' z_temp\posters\blank.jpg') }}" id="profile-img-tag" width="295px"/> --}}
                        {{-- <img src="{{ url('images/blank.jpg') }}" id="profile-img-tag" width="200px"/>
                    </div>
                    <input type="file" name="file" id="profile-img">
                </div>
        
            
           
        
            <div class="form-group">
                <label for="name">Service Title</label>
                <input type="text" class="form-control" name="title" placeholder="enter the service title">
            </div>
        
            <div class="form-group">
                <label for="description">description</label>
                <textarea id="article-ckeditor" class="form-control" rows="5" name="description"></textarea>
            </div>
        
            
        
            <button type="submit" class="btn btn-primary">add a Service</button>
            @component('admin.includes.formErrors')
            
            @endcomponent
        </form>
</div>  --}}
</div>




</div>

{{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
    };

    CKEDITOR.replace( 'article-ckeditor', options );

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
                
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#profile-img").change(function(){
        readURL(this);
    });
</script> --}}



@endsection