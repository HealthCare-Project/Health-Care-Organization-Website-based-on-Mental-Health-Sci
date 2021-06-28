@extends('layout.main') @section('content')

<section class="dento--blog-area mt-50">
    <div class="container">
      <div class="row">
        <div >
          <!-- Blog Details Area -->
          <div class="blog-details-area">
            <img style="    height: 385px;" src="{{ url($doctorarticle['feature_image']) }}" alt="">

            <h2 class="post-title">{{ $doctorarticle['title'] }}</h2>
            <div class="post-meta">
              <a href="#"><i class="icon_clock_alt"></i>{{ $doctorarticle['publish_date'] }}</a>
            </div>
            <blockquote cite="" class="dento-blockquote d-flex">
              <div class="icon">
                <i class="fa fa-quote-left"></i>
              </div>
              <div class="text">
                <h5>{{ $doctorarticle['content'] }}</h5>
                
              </div>
            </blockquote>
		  </div>
          </div>
          </div>

		  </div>
      <a href="{{ url('doctorarticles') }}">back</a>

@endsection
<!-- ****** Blog Area Start ******* -->
