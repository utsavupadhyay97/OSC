@extends('layouts.adminlayouts');

@section('content')

<div class="col-sm-4">




@component('admin.includes.title')
 
Edit Services

@endcomponent

  @if (!empty($service))
  <form method="POST" action="/admin/services/{{ $service->id}}" style="text-align:right">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-secondary">Delete service</button>

  </form>
</div>

    <div class="col-sm-4">
    <form action="/admin/services/{{$service->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="name">Service title</label>
    <input type="text" class="form-control" name="title" placeholder="enter the service title" value="{{$service->title}}">
    </div>

    <div class="form-group">
        <label for="file">service pic</label>
        <div>
            {{-- <img src="{{ url(' z_temp\posters\blank.jpg') }}" id="profile-img-tag" width="295px"/> --}}
            <img src="{{ url('images/blank.jpg') }}" id="profile-img-tag" width="200px"/>
        </div>
    <input type="file" name="file" id="profile-img" value="{{ $service->photo}}">
    </div>

    <div class="form-group">
        <label for="description">description</label>
        <textarea id="article-ckeditor" class="form-control" rows="5" name="description"> {{ $service->description}}</textarea>
    </div>


    
    <button type="submit" class="btn btn-primary">edit this Service</button>
    @component('admin.includes.formErrors')
    
    @endcomponent
</form>
@else
<div>Sorry nothing here</div>
@endif

    

</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

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
</script>


@endsection