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

<section class="ftco-section contact-section">
  <div class="container">
	<div class="row d-flex mb-5 contact-info">
	  <div class="col-md-12 mb-4">
		<h2 class="h4">Contact Information</h2>
	  </div>
	  <div class="w-100"></div>
	  <div class="col-md-3">
		<p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
	  </div>
	  <div class="col-md-3">
		<p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
	  </div>
	  <div class="col-md-3">
		<p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	  </div>
	  <div class="col-md-3">
		<p><span>Website</span> <a href="#">yoursite.com</a></p>
	  </div>
	</div>
	<div class="row block-9">
	  <div class="col-md-6 order-md-last pr-md-5">
		<form action="#">
		  <div class="form-group">
			<input type="text" class="form-control" placeholder="Your Name">
		  </div>
		  <div class="form-group">
			<input type="text" class="form-control" placeholder="Your Email">
		  </div>
		  <div class="form-group">
			<input type="text" class="form-control" placeholder="Subject">
		  </div>
		  <div class="form-group">
			<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
		  </div>
		  <div class="form-group">
			<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
		  </div>
		</form>
	  
	  </div>

	  <div class="col-md-6">
		<div id="map"></div>
	  </div>
	</div>
  </div>
</section>
@endsection