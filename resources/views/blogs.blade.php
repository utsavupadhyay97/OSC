<section class="portfolio_area area-padding" id="portfolio">
    <div class="container">
    <div class="area-heading">
    <h3 class="line">Our Recent Project</h3>
    <p>Together female let signs for for fish fowl may first.</p>
    </div>
    {{-- <div class="filters portfolio-filter">
    <ul>
    <li class="active" data-filter="*">all</li>
    <li data-filter=".popular">buildings</li>
    <li data-filter=".latest"> offices</li>
    <li data-filter=".following">rebuild</li>
    <li data-filter=".upcoming">architecture</li>
    </ul>
    </div> --}}
    <div class="filters-content">
    <div class="row portfolio-grid">
    @if ($blogs)
    @foreach ($blogs as $blog)
    <div class="grid-sizer col-md-3 col-lg-6"></div>
    <div class="col-lg-6 col-md-6 all following">
    <div class="single_portfolio">
    <img class="img-fluid w-100" src="images/Blogs/{{$blog->photo}}" alt="">
    <div class="short_info">
    {{$blog->title}}
    {{$blog->description}}
    {{-- <p>construction</p> --}}
    {{-- <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>                             --}}
    </div>
    </div>
    </div>
    @endforeach 
    @endif
    </div>
    </div>
    </div></section>  