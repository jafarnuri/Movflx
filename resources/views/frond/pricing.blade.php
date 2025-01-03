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
            <h2 class="title">Our Plan</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Pricing
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb-area-end -->

  <!-- pricing-area -->
  <section class="pricing-area pricing-bg" data-background="{{asset('/')}}frond/img/bg/pricing_bg.jpg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title title-style-three text-center mb-70">
            <span class="sub-title">our pricing plans</span>
            <h2 class="title">Our Pricing Strategy</h2>
          </div>
        </div>
      </div>
      <div class="pricing-box-wrap">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="pricing-box-item mb-30">
              <div class="pricing-top">
                <h6>premium</h6>
                <div class="price">
                  <h3>$7.99</h3>
                  <span>Monthly</span>
                </div>
              </div>
              <div class="pricing-list">
                <ul>
                  <li class="quality">
                    <i class="fas fa-check"></i> Video quality
                    <span>Good</span>
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Resolution
                    <span>480p</span>
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Screens you can watch
                    <span>1</span>
                  </li>
                  <li><i class="fas fa-check"></i> Cancel anytime</li>
                </ul>
              </div>
              <div class="pricing-btn">
                <a href="#" class="btn">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="pricing-box-item active mb-30">
              <div class="pricing-top">
                <h6>standard</h6>
                <div class="price">
                  <h3>$9.99</h3>
                  <span>Monthly</span>
                </div>
              </div>
              <div class="pricing-list">
                <ul>
                  <li class="quality">
                    <i class="fas fa-check"></i> Video quality
                    <span>Better</span>
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Resolution
                    <span>1080p</span>
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Screens you can watch
                    <span>2</span>
                  </li>
                  <li><i class="fas fa-check"></i> Cancel anytime</li>
                </ul>
              </div>
              <div class="pricing-btn">
                <a href="#" class="btn">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="pricing-box-item mb-30">
              <div class="pricing-top">
                <h6>premium</h6>
                <div class="price">
                  <h3>$11.99</h3>
                  <span>Monthly</span>
                </div>
              </div>
              <div class="pricing-list">
                <ul>
                  <li class="quality">
                    <i class="fas fa-check"></i> Video quality
                    <span>Best</span>
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Resolution
                    <span>4K+HDR</span>
                  </li>
                  <li>
                    <i class="fas fa-check"></i> Screens you can watch
                    <span>4</span>
                  </li>
                  <li><i class="fas fa-check"></i> Cancel anytime</li>
                </ul>
              </div>
              <div class="pricing-btn">
                <a href="#" class="btn">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- pricing-area-end -->

  <!-- newsletter-area -->
  <section class="newsletter-area newsletter-bg" data-background="{{asset('/')}}frond/img/bg/newsletter_bg.jpg">
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
  </section>
  <!-- newsletter-area-end -->
</main>
<!-- main-area-end -->

@endsection