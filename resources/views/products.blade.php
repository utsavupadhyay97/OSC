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
    </div></section>