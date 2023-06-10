@extends('klift/app')
@section('content')
<section class="home-slider js-fullheight owl-carousel d-sm-none d-md-block">
@foreach($slider as $slider_key => $slider_value)
  <div class="slider-item js-fullheight" style="background-image:url('{{ asset('/klift/uploads/'.$slider_value->icon) }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
      <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $slider_value->name }}</h1>
        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $slider_value->title }}</p>
        <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3 d-none">View our works</a></p>
      </div>
    </div>
    </div>
  </div>
@endforeach 
</section>

@foreach($about as $about_key => $about_value)
<section class="ftco-section ftc-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 p-md-5 img img-2" style="background-image: url('{{ asset('/klift/uploads/'.$about_value->icon) }}');">
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-5 pl-md-5 heading-section-with-line">
          <div class="pl-md-5 ml-md-5">
            <span class="subheading">{{ $about_value->name }}</span>
            <h2 class="mb-4">{{ $about_value->title }}</h2>
          </div>
        </div>
        <div class="pl-md-5 ml-md-5 mb-5">
          {{ $about_value->description }}
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach

@endsection