<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Scripts -->
      {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
      <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
      <script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js') }}"></script>
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>
   <body>
<section class="service-area area-padding">
    <div class="container">
       <div class="area-heading">
          <h3 class="line">What We Provide as a <b>Services</b></h3>
          <p>Together female let signs for for fish fowl may first.</p>
       </div>
       <div class="conatiner">
       <div class="row">
          @if ($services)
          @foreach ($services as $service)
          <div class="col-md-6 col-xl-4">
             <div class="single-service">
                 
                <div class="service-icon">
                <img src="http://localhost:8000/images/services/{{ $service->photo}}"  class="img-thumnail" style="width:200px;height:200px;">
                </div>
                
                <div class="service-content">
                   <h5>{{ $service->title}}</h5>
                   {{-- 
                   <p>{{$service->title }}</p>
                   --}}
                </div>
                <a href="{{ url( '/service/' . $service->id) }}" class="btn btn-primary">Hire</a></p>
                {{-- <button type="button" class="btn btn-primary">Hire</button> --}}

             </div>
          </div>
          @endforeach 
          @endif
       </div>
      </div>
  </section>
   </body>
</html>
