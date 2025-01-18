@extends('frond_layout.master')



@section('content') 
<main>
  <!-- breadcrumb-area -->
  <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('/')}}frond/img/bg/breadcrumb_bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumb-content">
            <h2 class="title">News Update</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Blog Page
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb-area-end -->

  <!-- blog-area -->
  <section class="blog-area blog-bg" data-background="{{asset('/')}}frond/img/bg/blog_bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          @foreach ($blogs as $blog )
          <div class="blog-post-item">
            <div class="blog-post-thumb">
              <a href="{{route('blog_details',['id' => $blog->id])}}"><img src="{{ Storage::url($blog->image) }}" alt="Blog Image" class="custom-image"> </a>
            </div>
            <div class="blog-post-content">
              <span class="date"><i class="far fa-clock"></i> {{$blog->created_at}}</span>
              <h2 class="title">
                <a href="{{route('blog_details',['id' => $blog->id])}}">{{$blog->content}}</a>
              </h2>
              <p>
             {{$blog->description}}
              </p>
              <div class="blog-post-meta">
                <ul>
                  <li>
                    <i class="far fa-user"></i> by <a href="#">{{$blog->author}}</a>
                  </li>
                  <li id="blog-{{ $blog->id }}">
    <button 
        class="like-btn" 
        data-id="{{ $blog->id }}" 
        style="border: 1px solid gray; padding: 5px; border-radius: 5px; cursor: pointer;">
        <i class="far fa-thumbs-up" style="color: gray;"></i>
        <span class="likes-count">{{ $blog->likes }}</span>
    </button>
</li>
                  <li>
                    <i class="far fa-comments"></i><a href="{{route('blog_details',['id' => $blog->id])}}">{{$blog->comments_count}} Comments</a>
                  </li>
                </ul>
                <div class="read-more">
                  <a href="{{route('blog_details',['id' => $blog->id])}}">Read More <i class="fas fa-angle-double-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
         
  
          <div class="pagination-wrap mt-60">
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
        <div class="col-lg-4">
          <aside class="blog-sidebar">
          
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const likeButtons = document.querySelectorAll('.like-btn');

    likeButtons.forEach(button => {
        const blogId = button.getAttribute('data-id');
        const likesCountSpan = button.querySelector('.likes-count');
        const likeIcon = button.querySelector('i');

        // LocalStorage-də vəziyyəti yoxla
        let isLiked = localStorage.getItem(`liked_blog_${blogId}`) === 'true';

        // İlk görünüşü tənzimlə
        if (isLiked) {
            button.style.border = '1px solid blue';
            likeIcon.style.color = 'blue';
        }

        button.addEventListener('click', function () {
            // İstifadəçi unlike etmək istəyirsə
            const url = isLiked 
                ? `/blogs/${blogId}/unlike` // Unlike üçün URL
                : `/blogs/${blogId}/like`;  // Like üçün URL

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
            })
                .then(response => response.json())
                .then(data => {
                    if (data.likes !== undefined) {
                        // Yeni like sayını yenilə
                        likesCountSpan.textContent = data.likes;

                        // Vəziyyəti dəyiş
                        isLiked = !isLiked;

                        // Görünüşü yenilə
                        if (isLiked) {
                            button.style.border = '1px solid blue';
                            likeIcon.style.color = 'blue';
                            localStorage.setItem(`liked_blog_${blogId}`, 'true');
                        } else {
                            button.style.border = '';
                            likeIcon.style.color = '';
                            localStorage.setItem(`liked_blog_${blogId}`, 'false');
                        }
                    } else {
                        console.error('Like statusunu dəyişmək mümkün olmadı.');
                    }
                })
                .catch(error => console.error('AJAX error:', error));
        });
    });
});


</script>
@endsection