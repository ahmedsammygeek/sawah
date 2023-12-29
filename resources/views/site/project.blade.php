@extends('site.layouts.master')

@section('page_content')

<!-- start the banner section -->
<section class="banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h2>@lang('site.Our Projects')</h2>
                    <li>
                        <a href="{{ url('/') }}"> @lang('site.home') </a> //
                        @lang('site.Our Projects')
                    </li>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end the banner section -->


<!-- start the gallery section  -->
<section class="gallery">
    <div class="container">
        <div class="row">
            @foreach ($projects as $project)
            <div class="col-lg-4 col-md-4">
                <div class="gallery-box">
                    <div class="gallery-img">
                        <img src="{{ Storage::url('projects/'.$project->image) }}" alt="projects">
                        <div class="overlay">
                            <h3> {{ $project->name }} </h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- end the  gallery section -->


<!-- start the home-banner section -->
<section class="home-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-10 col-md-10">
                <div class="home-banner-box">
                    <h2> @lang('site.Contact us to get your service') </h2>
                    <a href="https://api.whatsapp.com/send?phone={{ $data['settings']->whatsapp }}" target="-blank">
                        <i class='bx bxl-whatsapp'></i>
                        <h4> @lang('site.contact whatsapp') </h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
    </div>
</section>
<!-- end the home-banner section -->


<!-- start the offer section -->
<section class="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <span> @lang('site.our offers') </span>
                <h2> @lang('site.We Provide Some Offers') </h2>
                <div class="move">
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            @php
            $i = 1;
            @endphp
            @foreach ($offers as $offer)
            <div class="col-lg-6 col-md-6">
                <div class="offer-box">
                    <div class="number">
                        {{ $i++ }}
                    </div>
                    <h3> {{ $offer->name }} </h3>
                    <p> {{ $offer->content }} </p>
                    <a href="https://api.whatsapp.com/send?phone={{ $data['settings']->whatsapp }}" target="-blank">
                        @lang('site.contact whatsapp')
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- end the offer section -->


<!-- start the review section -->
<section class="review">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <span> @lang('site.testimonial') </span>
                <h2> @lang('site.We Have Trusted Clients') </h2>
                <div class="move">
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="owl-carousel">
                    @foreach ($reviews as $review)
                    <div class="review-box">
                        <img src="{{ Storage::url('reviews/'.$review->image) }}" alt="review">
                        <p>{{ $review->comment }}</p>
                        <h6>{{ $review->name }}</h6>
                        <li>
                          @for ($i = 0; $i < $review->rate ; $i++)
                          <i class='bx bx-star'></i>                          
                          @endfor
                      </li>
                  </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</section>
<!-- end the review section -->


@endsection