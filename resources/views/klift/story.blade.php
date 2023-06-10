@extends('klift/app')
@section('content')
	<section class="home-slider js-fullheight owl-carousel d-sm-none d-md-block">
	  <div class="slider-item js-fullheight" style="background-image:url('{{ asset('/klift/uploads/'.$story->thumb) }}');">
		<div class="overlay"></div>
		<div class="container">
		  <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
		  <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
			<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $story->title }}</h1>
			<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $story->created_at }}</p>
		  </div>
		</div>
		</div>
	  </div>
	</section>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
			  <div class="col-md-7 heading-section ftco-animate">
				<h2 class="mb-4">{{ $story->title }}</h2>
				<p>{{ $story->created_at }}</p>
			  </div>
			</div>	
			<hr />
			<div class="row">
				<div class="col-md-12">
					{{ $story->description }}
				</div>
			</div>
		</div>
	</section>
@endsection