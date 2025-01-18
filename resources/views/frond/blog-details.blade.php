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
                        <h2 class="title">News Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-details-area -->
    <section class="blog-details-area blog-bg" data-background="{{asset('/')}}frond/img/bg/blog_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-item blog-details-wrap">
                    <div class="blog-post-thumb image-container">
    <a href="#"><img src="{{ Storage::url($blog->image) }}" alt="Blog Image" class="custom-image"></a>
</div>

                        <div class="blog-post-content">
                            <div class="blog-details-top-meta">
                                <span class="user"><i class="far fa-user"></i> by <a href="#">{{$blog->author}}</a></span>
                                <span class="date"><i class="far fa-clock"></i> {{$blog->created_at}}</span>
                                <span class="date"><i class="fa fa-list"></i> {{$blog->category->name}}</span>
                            </div>
                            <h2 class="title">{{$blog->title}}</h2>
                            <p>{{$blog->description}}.</p>
                         
                         
                            <div class="blog-img-wrap">
                                <div class="row">
                                @foreach ($blog->images as $image)
                                <div class="col-sm-6">
                                <img src="{{ Storage::url($image->image_path) }}" alt="Blog Image">
                                    </div>
   
@endforeach
                                   
                                   
                                </div>
                            </div>
                
                            <!-- <div class="blog-post-meta">
                                <div class="blog-details-tags">
                                    <ul>
                                        <li><i class="fas fa-tags"></i> <span>Tags :</span></li>
                                        <li><a href="#">Movies ,</a> <a href="#">Creative ,</a> <a href="#">News
                                                ,</a> <a href="#">English</a></li>
                                    </ul>
                                </div>
                                <div class="blog-post-share">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
            
                    <div class="blog-comment mb-80">
                        <div class="widget-title mb-45">
                            <h5 class="title">Comment's ({{$blog->comments_count}})</h5>
                        </div>
                        <ul>
                        @foreach ($comments as $comment)
                            <li>
                                
                                <div class="single-comment">
                                    <div class="comment-avatar-img">
                                        <img src="{{ Storage::url($comment->image) }}" alt="img">
                                    </div>
                                    <div class="comment-text">
                                        <div class="comment-avatar-info">
                                            <h5>{{$comment->name}} <span class="comment-date">{{$comment->created_at}}</span>
                                            </h5>
                                          
                                        </div>
                                        <p>{{$comment->content}}</p>
                                    </div>
                                </div>
                               
                             
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h5 class="title">Post a Comment</h5>
                        </div>
                        <div class="contact-form">
                            <form action="{{route('comment_store',['blog_id' => $blog->id])}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="You Name *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="You  Email *">
                                    </div>
                                </div>
                                <input type="text" name="subject" placeholder="Subject *">
                                <textarea name="content" placeholder="Type Your Message..."></textarea>
                                <input type="file" name="image" >
                                <button class="btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="blog-sidebar">
                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Search Objects</h5>
                            </div>
                            <form action="#" class="sidebar-search">
                                <input type="text" placeholder="Search...">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Categories</h5>
                            </div>
                            <div class="sidebar-cat">
                                <ul>
                                @foreach ($blogcategories as $blogcategory)
                  <li><a href="#">{{$blogcategory->name}}</a> <span>{{ $blogcategory->blogs_count }}</span></li>
                  @endforeach
                  
                                </ul>
                            </div>
                        </div>
                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Recent Posts</h5>
                            </div>
                            <div class="rc-post">
                                <ul>
                                    <li class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img
                                                    src="{{asset('/')}}frond/img/blog/rc_post_thumb01.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="blog-details.html">Express Management
                                                    Effective</a></h5>
                                            <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                        </div>
                                    </li>
                                    <li class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img
                                                    src="{{asset('/')}}frond/img/blog/rc_post_thumb02.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="blog-details.html">Where watch English movies
                                                    free?</a></h5>
                                            <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                        </div>
                                    </li>
                                    <li class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img
                                                    src="{{asset('/')}}frond/img/blog/rc_post_thumb03.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="blog-details.html">House movie streaming
                                                    website</a></h5>
                                            <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Tag Post</h5>
                            </div>
                            <div class="tag-list">
                                <ul>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Romantic</a></li>
                                    <li><a href="#">Who</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Blending</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->



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