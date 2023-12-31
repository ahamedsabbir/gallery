<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ APP\Models\Settings::find(1)->name }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ url('gallery') }}" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="{{ url('stories') }}" class="nav-link">Story</a></li>
            <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
@if (Route::has('login'))
	@auth
		<li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a></li>
	@else
		<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
	@endauth
@endif
</ul>
	<form class="form-inline my-2 my-lg-0" action="{{ url('gallery/search/') }}" method="post">
		@csrf
		<input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
        </div>
    </div>
</nav>
<!-- END nav -->