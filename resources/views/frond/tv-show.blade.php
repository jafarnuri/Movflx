@extends('frond_layout.master')



@section('content') 
<!-- main-area -->
<main>
  <!-- breadcrumb-area -->
  <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('/')}}frond/img/bg/breadcrumb_bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumb-content">
            <h2 class="title">Tv <span>Show</span></h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  tv show
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb-area-end -->

  <!-- movie-area -->
  <section class="movie-area movie-bg" data-background="{{asset('/')}}frond/img/bg/movie_bg.jpg">
    <div class="container">
      <div class="row align-items-end mb-60">
        <div class="col-lg-6">
          <div class="section-title text-center text-lg-left">
            <span class="sub-title">ONLINE STREAMING</span>
            <h2 class="title">New Tv Show</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="movie-page-meta">
            <div class="tr-movie-menu-active text-center">
            @foreach ($movcategories as $movcategory)
              <button class="active" data-filter="*">{{$movcategory->name}}</button>
              @endforeach
            </div>
         
          </div>
        </div>
      </div>
      <div class="row tr-movie-active">
      @foreach ($movie as $movies)
      <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
          <div class="movie-item movie-item-three mb-50">
            <div class="movie-poster">
              <img src="{{ Storage::url($movies->poster_image) }}" alt="" />
              <ul class="overlay-btn">
          
                <li>
                  <a href="{{$movies->trailer_url}}" class="popup-video btn">Watch Now</a>
                </li>
                <li>
                  <a href="{{route('movie_details',['id' => $movies->id])}}" class="btn">Details</a>
                </li>
              </ul>
            </div>
            <div class="movie-content">
              <div class="top">
                <h5 class="title">
                  <a href="{{route('movie_details',['id' => $movies->id])}}">{{$movies->title}}</a>
                </h5>
                <span class="date">{{$movies->release_year}}</span>
              </div>
              <div class="bottom">
                <ul>
                  <li><span class="quality">{{$movies->quality}}</span></li>
                  <li>
                    <span class="duration"><i class="far fa-clock"></i> {{$movies->duration}} min</span>
                    
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        @endforeach
       
      </div>
      <div class="row">
        <div class="col-12">
          <div class="pagination-wrap mt-30">
            <nav>
              <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- movie-area-end -->

  <!-- newsletter-area -->
  <!-- <section class="newsletter-area newsletter-bg" data-background="{{asset('/')}}frond/img/bg/newsletter_bg.jpg">
    <div class="container">
      <div class="newsletter-inner-wrap">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="newsletter-content">
              <h4>Trial Start First 30 Days.</h4>
              <p>Enter your email to create or restart your membership.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="#" class="newsletter-form">
              <input type="email" required placeholder="Enter your email" />
              <button class="btn">get started</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- newsletter-area-end -->
</main>
<!-- main-area-end -->
@endsection