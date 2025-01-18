@extends('frond_layout.master')



@section('content') 

<!-- main-area -->
<main>

    <!-- movie-details-area -->
    <section class="movie-details-area" data-background="{{asset('/')}}frond/img/bg/movie_details_bg.jpg">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-xl-3 col-lg-4">
                    <div class="movie-details-img">
                    <img src="{{ Storage::url($movies->poster_image) }}" alt="Movie Poster" class="custom-movie-poster">

                        <a href="{{$movies->trailer_url}}" class="popup-video"><img
                                src="{{asset('/')}}frond/img/images/play_icon.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="movie-details-content">
                        <h5>{{$movies->title}}</h5>
                        <h2>{{$movies->subtitle}}</h2>
                        <div class="banner-meta">
                            <ul>
                                <li class="quality">
                                    <span>{{$movies->quality}}</span>
                                    
                                </li>
                                <li class="category">
                                    <a href="#">{{$movies->category->name}}</a>
                            
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i>{{$movies->release_year}}</span>
                                    <span><i class="far fa-clock"></i>{{$movies->duration}}min</span>
                                </li>
                            </ul>
                        </div>
                        <p>{{$movies->description}}</p>
                        <div class="movie-details-prime">
                            <ul>
                                <li class="share fas fa-share-alt"> Share </li>
                                <li class="streaming">
                                    <h6>Prime Video</h6>
                                    <span>Streaming Channels</span>
                                </li>
                                <li class="watch"><a href="{{$movies->movie_url}}"
                                        class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
         
            </div>
        </div>
    </section>
    <!-- movie-details-area-end -->

    <!-- episode-area -->
    <section class="episode-area episode-bg" data-background="{{asset('/')}}frond/img/bg/episode_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="movie-episode-wrap">
                        <div class="episode-top-wrap">
                            <div class="section-title">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">Watch Full Episode</h2>
                            </div>
                            <div class="total-views-count">
                                <p>2.7 million <i class="far fa-eye"></i></p>
                            </div>
                        </div>
                        <div class="episode-watch-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn-block text-left" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="season">Season 2</span>
                                            <span class="video-count">5 Full Episodes</span>
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 1 - The
                                                        World Is Purple</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 2 -
                                                        Meaner Than Evil</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 3 - I
                                                        Killed a Man Today</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 4 -
                                                        Cowboys and Dreamers</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 5 -
                                                        Freight Trains and Monsters</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <button class="btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <span class="season">Season 1</span>
                                            <span class="video-count">5 Full Episodes</span>
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 1 - The
                                                        World Is Purple</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span>
                                                </li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 2 -
                                                        Meaner Than Evil</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 3 - I
                                                        Killed a Man Today</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span>
                                                </li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 4 -
                                                        Cowboys and Dreamers</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span>
                                                </li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E"
                                                        class="popup-video"><i class="fas fa-play"></i> Episode 5 -
                                                        Freight Trains and Monsters</a> <span class="duration"><i
                                                            class="far fa-clock"></i> 28 Min</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="episode-img">
                        <img src="img/images/episode_img.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="movie-history-wrap">
                        <h3 class="title">About <span>History</span></h3>
                        <p>{{$movies->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- episode-area-end -->

    <!-- tv-series-area -->
    <section class="tv-series-area tv-series-bg" data-background="{{asset('/')}}frond/img/bg/tv_series_bg02.jpg">
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
            @foreach ($movie as $mov)
        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
          <div class="movie-item movie-item-three mb-50">
            <div class="movie-poster">
             <img src="{{ Storage::url($mov->poster_image) }}" alt="">
                <ul class="overlay-btn">
                    <li>
                    <a href="{{$mov->trailer_url}}" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                    <a href="{{route('movie_details',['id' => $mov->id])}}" class="btn">Details</a>
                    </li>
                </ul>
            </div>
            <div class="movie-content">
              <div class="top">
                <h5 class="title">
                  <a href="{{route('movie_details',['id' => $mov->id])}}">{{$mov->title}}</a>
                </h5>
                <span class="date">{{$mov->release_year}}</span>
              </div>
              <div class="bottom">
                <ul>
                  <li><span class="quality">{{$mov->quality}}</span></li>
                  <li>
                    <span class="duration"><i class="far fa-clock"></i> {{$mov->duration}} min</span>
                    
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endforeach
             

                </div>
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
                            <p>Enter your email to create or restart your membership.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" class="newsletter-form">
                            <input type="email" required placeholder="Enter your email">
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