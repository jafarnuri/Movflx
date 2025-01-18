
@extends('frond_layout.master')



@section('content') 
<main>
    <!-- banner-area -->
    <section class="banner-area banner-bg" data-background="{{asset('/')}}frond/img/banner/banner_bg01.jpg">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="banner-content">
                        <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">
                            Movflx
                        </h6>
                        <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">
                            Unlimited <span>Movie</span>, TVs Shows, &
                            More.
                        </h2>
                        <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                            <ul>
                                <li class="quality">
                                    <span>Pg 18</span>
                                    <span>hd</span>
                                </li>
                                <li class="category">
                                    <a href="#">Romance,</a>
                                    <a href="#">Drama</a>
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i>
                                        2021</span>
                                    <span><i class="far fa-clock"></i>
                                        128 min</span>
                                </li>
                            </ul>
                        </div>
                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                            class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s"
                            data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- up-coming-movie-area -->
    <section class="ucm-area ucm-bg" data-background="{{asset('/')}}frond/img/bg/ucm_bg.jpg">
        <div class="ucm-bg-shape" data-background="{{asset('/')}}frond/img/bg/ucm_bg_shape.png"></div>
        <div class="container">
            <div class="row align-items-end mb-55">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Upcoming Movies</h2>
                    </div>#
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
            <div class="tab-content" id="myTabContent">
           
                <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                    <div class="ucm-active owl-carousel">
                    @foreach ($movie as $movies)
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="{{route('movie_details',['id' => $movies->id])}}"><img src="{{ Storage::url($movies->poster_image) }}"
                                        alt="" /></a>
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
                                        <li>
                                            <span class="quality">{{$movies->quality}}</span>
                                        </li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i>
                                            {{$movies->duration}} min</span>
                                           
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                   
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- up-coming-movie-area-end -->

    <!-- services-area -->
    <!-- <section class="services-area services-bg" data-background="{{asset('/')}}frond/img/bg/services_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="services-img-wrap">
                        <img src="{{asset('/')}}frond/img/images/services_img.jpg" alt="" />
                        <a href="{{asset('/')}}frond/img/images/services_img.jpg" class="download-btn" download>Download
                            <img src="{{asset('/')}}frond/fonts/download.svg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-content-wrap">
                        <div class="section-title title-style-two mb-20">
                            <span class="sub-title">Our Services</span>
                            <h2 class="title">
                                Download Your Shows Watch Offline.
                            </h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consecetur
                            adipiscing elseddo eiusmod tempor.There are
                            many variations of passages of lorem Ipsum
                            available, but the majority have suffered
                            alteration in some injected humour.
                        </p>
                        <div class="services-list">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-tv"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Enjoy on Your TV.</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consecetur adipiscing elit,
                                            sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-video"></i>
                                    </div>

                                    <div class="content">
                                        <h5>Watch Everywhere.</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consecetur adipiscing elit,
                                            sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- services-area-end -->

    <!-- top-rated-movie -->
    <section class="top-rated-movie tr-movie-bg" data-background="{{asset('/')}}frond/img/bg/tr_movies_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Top Rated Movies</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tr-movie-menu-active text-center">
                    @foreach ($movcategories as $movcategory)
                        <button class="active" data-filter="*">
                           {{$movcategory->name}}
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row tr-movie-active">
            @foreach ($movie as $movies)
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="{{route('movie_details',['id' => $movies->id])}}"><img src="{{ Storage::url($movies->poster_image) }}"
                                    alt="" /></a>
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
                                    <li>
                                        <span class="quality">{{$movies->quality}}</span>
                                    </li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i>
                                        {{$movies->duration}} min</span>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                
                
               
            </div>
        </div>
    </section>
    <!-- top-rated-movie-end -->

    <!-- live-area -->
    <!-- <section class="live-area live-bg fix" data-background="{{asset('/')}}frond/img/bg/live_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title title-style-two mb-25">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">
                            Live Movie & TV Shows For Friends & Family
                        </h2>
                    </div>
                    <div class="live-movie-content">
                        <p>
                            Lorem ipsum dolor sit amet, consecetur
                            adipiscing elseddo eiusmod There are many
                            variations of passages of lorem Ipsum
                            available, but the majority have suffered
                            alteration.
                        </p>
                        <div class="live-fact-wrap">
                            <div class="resolution">
                                <h2>HD 4K</h2>
                            </div>
                            <div class="active-customer">
                                <h4>
                                    <span class="odometer" data-count="20"></span>K+
                                </h4>
                                <p>Active Customer</p>
                            </div>
                        </div>
                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i
                                class="fas fa-play"></i> Watch Now</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="live-movie-img wow fadeInRight" data-wow-delay=".2s" data-wow-duration="1.8s">
                        <img src="{{asset('/')}}frond/img/images/live_img.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- live-area-end -->

    <!-- tv-series-area -->
    <section class="tv-series-area tv-series-bg" data-background="{{asset('/')}}frond/img/bg/tv_series_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Best TV Series</span>
                        <h2 class="title">World Best TV Series</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            @foreach ($movie as $movies)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="movie-item mb-50">
                        <div class="movie-poster">
                            <a href="{{route('movie_details',['id' => $movies->id])}}"><img src="{{ Storage::url($movies->poster_image) }}"
                                    alt="" /></a>
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
                                    <li>
                                        <span class="quality">{{$movies->quality}}</span>
                                    </li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i>
                                        {{$movies->duration}} min</span>
                                       
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             
         
            </div>
        </div>
    </section>
    <!-- tv-series-area-end -->

    <!-- newsletter-area -->
    <!-- <section class="newsletter-area newsletter-bg" data-background="{{asset('/')}}frond/img/bg/newsletter_bg.jpg">
        <div class="container">
            <div class="newsletter-inner-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h4>Trial Start First 30 Days.</h4>
                            <p>
                                Enter your email to create or restart
                                your membership.
                            </p>
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
@endsection