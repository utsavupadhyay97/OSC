<!DOCTYPE html>
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
      <div id="app">
         <!doctype html>
         <html lang="en">
            <head>
               <!-- Required meta tags -->
               <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
               <link rel="icon" href="img/favicon.png" type="image/png">
               <title> One Stop Construction</title>
               <!-- Bootstrap CSS -->
               <link rel="stylesheet" href="css/bootstrap.css">
               <link rel="stylesheet" href="css/themify-icons.css">
               <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
               <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
               <link rel="stylesheet" href="vendors/animate-css/animate.css">
               <!-- main css -->
               <link rel="stylesheet" href="css/style.css">
               <link rel="stylesheet" href="css/responsive.css">
            </head>
            <body>
               <!--================Header Menu Area =================-->
              
              {{-- @include('includes.header') --}}
              @component('admin.includes.header')
               @endcomponent

               <!--================Header Menu Area =================-->
               <!--================Home Banner Area =================-->
               <section class="home_banner_area">
                  <div class="banner_inner d-flex align-items-center">
                     <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                     <div class="container">
                        <div class="banner_content text-center">
                           <span>Future construction</span>
                           <h3>Make your dream home with
                              <br/> One Stop Construction
                           </h3>
                           <a class="main_btn" href="#">get a quote</a>
                        </div>
                     </div>
                  </div>
               </section>
               <!--================End Home Banner Area =================-->
               <!--================About  Area =================-->
               <section class="about-area area-padding">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                           <div class="about-img">
                              <img src="img/banner/about1.png" alt="">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="about-content">
                              <h4>WE ARE ON EXPERT <br>
                                 THIS FIELD BUILDINGS<br>
                                 SOLUTIONS SINCE 2000.
                              </h4>
                              <p>Void gathering midst together you're shall. Beast set he <br>likeness spirit winged two all fourth they're gathered<br> seasons very may heaven saying. Fly image th</p>
                              <a class="main_btn" href="#">learn more</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!--================About Area End =================-->
               <!--================Service  Area =================-->
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
                               
                              <div>
                              <img src="http://localhost:8000/images/services/{{ $service->photo}}" class="img-thumnail" style="width:200px;height:200px;">
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
                <section class="service-area area-padding">
                    <div class="container">
                       <div class="area-heading">
                          <h3 class="line">What We Provide as a <b>Products</b></h3>
                          <p>Together female let signs for for fish fowl may first.</p>
                       </div>
                     <div class="continer">
                     <div class="row">
                        @if ($products)
                        @foreach ($products as $product)
                        <div class="col-md-6 col-xl-3">
                           <div class="single-service">
                              <div class="service-icon">
                                 <img src="images/products/{{$product->photo}}" height="100" width="100">
                              </div>
                              <div class="service-content">
                                 <a href="{{ url( '/product/' .$product->id)}}" class="slick-wrapper">product</a>

                                 {{-- <h3>{{ $product->name}}</h3> --}}
                                  {{-- <p>{{str_limit(  $product->description, $limit = 150, $end = '...')}}</p> --}}
                                Price = rs. <p>{{$product->price}}</p>
                              </div>
                              <a href="{{ url( '/product/' . $product->id) }}" class="btn btn-primary">Order now</a></p>
                              <a href="{{ url( '/Cart/' . $product->id) }}" class="btn btn-primary">Add to cart</a></p>
                              {{-- <button type="button" class="btn btn-primary" href="SingleProductController.php" >Order</button> --}}
                           </div>
                        </div>
                        @endforeach 
                        @endif
                     </div>
                    </div>
                     {{-- 
                     <div class="service-content float-left">
                        @if ($services)
                        @foreach ($services as $service)
                        <h5>{{ $service->title}}</h5>
                        <p>You're which creepeth were yielding kind, divide sixten po gatherin all first fill Seed wherein life. Years one fifth </p>
                     </div>
                  </div>
      </div>
      --}}
      <!-- Single service -->
      {{-- <div class="col-md-6 col-xl-3">
      <div class="single-service">
      <div class="service-icon">
      <img src="img/icon/i2.png" alt="">
      </div>
      <div class="service-content">
      <h5>Building Construction</h5>
      <p>You're which creepeth were yielding kind, divide sixten po gatherin all first fill Seed wherein life. Years one fifth </p>
      </div>
      </div>
      </div>
      <!-- Single service -->
      <div class="col-md-6 col-xl-3">
      <div class="single-service">
      <div class="service-icon">
      <img src="img/icon/i3.png" alt="">
      </div>
      <div class="service-content">
      <h5>Building Renovation</h5>
      <p>You're which creepeth were yielding kind, divide sixten po gatherin all first fill Seed wherein life. Years one fifth </p>
      </div>
      </div>
      </div>
      <!-- Single service -->
      <div class="col-md-6 col-xl-3">
      <div class="single-service">
      <div class="service-icon">
      <img src="img/icon/i4.png" alt="">
      </div>
      <div class="service-content">
      <h5>Building Maintenance</h5>
      <p>You're which creepeth were yielding kind, divide sixten po gatherin all first fill Seed wherein life. Years one fifth </p>
      </div>
      </div>
      </div>
      --}}
      </div>
      </div>
      </section>
      <!--================Service Area end =================-->
      <!--================Funny number  Area =================-->
      <section class="number-area" id="number-section">
      <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-5 col-lg-5">
      <div class="number-img">
      <img src="img/banner/about2.png" alt="">
      </div>
      </div>
      <div class="col-md-7 col-lg-6">
      <div class="number-content">
      <h4>Providing Personalized And <br>
      High Quality Service .</h4>
      <p>Grass bearing make open multiply that may fly cattle gathering be unto<br> void moving. Blessed one evening had them heaven<br> divide said heaven whose brought he. Give It fowl green.</p>
      <div class="number-wrapper">
      <div class="single-number">
      <h5><span class="counter">15</span>K+</h5>
      <p>happy customer</p>
      </div>
      <div class="single-number">
      <h5><span class="counter">10</span>K+</h5>
      <p>Project Done</p>
      </div>
      <div class="single-number">
      <h5><span class="counter">9</span>/<span class="counter">10</span></h5>
      <p>Average Rating</p>
      </div>
      </div>
      </div>            
      </div>
      </div>
      </div>
      </section>
      <!--================Funny number Area end =================-->
      <!--================ Start Portfolio Area =================-->
                                                               {{-- @component('admin.includes.recentprojects')
                                                               @endcomponent
                                                               <!--================ End Portfolio Area =================--> --}}
      <!--================ Start Testimonial Area =================-->
      {{-- <section class="testimonial-area area-padding">
      <div class="container">
      <div class="area-heading">
      <h3 class="line">Customer reviews</h3>
      <p>Together female let signs for for fish fowl may first.</p>
      </div>
      <div class="row">
      <div class="active-testimonial-carusel owl-carousel">
      <div class="single-testimonial item d-flex flex-row">
      <div class="thumb">
      <img class="img-fluid" src="img/elements/tes1.jpg" alt="">
      </div>
      <div class="desc">
      <h4>Adame Nesane</h4>
      <p class="designation">Chief Customer</p>
      <p>
      You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.
      </p>    
      </div>
      </div>
      <div class="single-testimonial item d-flex flex-row">
      <div class="thumb">
      <img class="img-fluid" src="img/elements/tex2.jpg" alt="">
      </div>
      <div class="desc">
      <h4>Adam Nahan</h4>
      <p class="designation">Chief Customer</p>
      <p>
      You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.
      </p>
      </div>
      </div>
      <div class="single-testimonial item d-flex flex-row">
      <div class="thumb">
      <img class="img-fluid" src="img/elements/tes1.jpg" alt="">
      </div>
      <div class="desc">
      <h4>Adame Nesane</h4>
      <p class="designation">Chief Customer</p>
      <p>
      You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.
      </p>  
      </div>
      </div>
      <div class="single-testimonial item d-flex flex-row">
      <div class="thumb">
      <img class="img-fluid" src="img/elements/tex2.jpg" alt="">
      </div>
      <div class="desc">
      <h4>Adam Nahan</h4>
      <p class="designation">Chief Customer</p>
      <p>
      You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.
      </p>                 
      </div>
      </div>
      <div class="single-testimonial item d-flex flex-row">
      <div class="thumb">
      <img class="img-fluid" src="img/elements/tes1.jpg" alt="">
      </div>
      <div class="desc">
      <h4>Adame Nesane</h4>
      <p class="designation">Chief Customer</p>
      <p>
      You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.
      </p>  
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <!--================ End Testimonial Area =================--> --}}
      <!--================ Start Blog Area =================-->
      
      @component('admin.includes.recentnews')
      @endcomponent
      <!--================ End Blog Area =================-->
      <!--================ start footer Area =================-->
      
      @component('admin.includes.footer')
      @endcomponent

      
      <!--================ End footer Area =================-->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery-2.2.4.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/stellar.js"></script>
      <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
      <script src="vendors/isotope/isotope.pkgd.min.js"></script>
      <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
      <script src="js/jquery.ajaxchimp.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/waypoints.min.js"></script>
      <script src="js/mail-script.js"></script>
      <script src="js/contact.js"></script>
      <script src="js/jquery.form.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/mail-script.js"></script>
      <script src="js/theme.js"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
      <main class="py-4">
      @yield('content')
      </main>
      </div>
      </body>
      </html>