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
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Our Projects</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
      </div>
    </div>
  </div>
  <div class="container-wrap">
    <div class="row no-gutters">
	@foreach($category as $category_key => $category_value)    
	  <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{ asset('/klift/uploads/'.$category_value->icon) }}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <h3>{{ $category_value->title }}</h3>
          </div>
          <a href="{{ asset('/klift/uploads/'.$category_value->icon) }}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="">{{ $category_value->title }}</span>
          </a>
        </div>
		<div class="text-center py-2" style="background-color:red;">
			<a class="icon" href="{{ url('gallery/category/'.$category_value->id) }}">{{ $category_value->title }}</a>
		</div>
      </div>
	  @endforeach
    </div>
  </div>
</section>
@endsection