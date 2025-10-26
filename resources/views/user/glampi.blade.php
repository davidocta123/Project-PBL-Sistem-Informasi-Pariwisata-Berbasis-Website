<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}">
  
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css')}}">

  
  <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="{{ route('user.home') }}">Pacific<span>Travel Agency</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="{{ route('user.home') }}" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="{{ route('user.about') }}" class="nav-link">About</a></li>
         <li class="nav-item active"><a href="{{ route('user.glampi') }}" class="nav-link">Glamping</a></li>
         <li class="nav-item"><a href="{{ route('user.contac') }}" class="nav-link">Contact</a></li>
         @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                            role="button" data-toggle="dropdown" aria-expanded="false">
                            <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('images/default-user.png') }}"
                                alt="User" class="rounded-circle" width="30" height="30">
                            <span class="ml-2">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                <i class="fas fa-user mr-2"></i>Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Keluar
                                </button>
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-outline-light ml-3">Login</a>
                    </li>
                @endauth
     </ul>
 </div>
</div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('frontend/images/gallery-18.jpg') }}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Glamping List <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Glamping List</h1>
     </div>
 </div>
</div>
</section>

<section class="ftco-section ftco-no-pb">
   <div class="container">
      <div class="row">
            @foreach ($destinations as $item)
                <div class="col-md-4 ftco-animate mb-4">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('{{ asset('storage/' . $item->image) }}');">
                            <span class="price">Rp {{ number_format($item->price, 2) }}</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">{{ $item->capacity }} Person(s)</span>
                            <h3 class="mt-2"><a href="#">{{ $item->name }}</a></h3>
                            <p class="location mb-2">
                                <span class="fa fa-map-marker"></span> {{ $item->location }}
                            </p>
                            
                            {{-- Deskripsi --}}
                            <p class="description text-muted">
                                {{ Str::limit($item->description, 120, '...') }}
                            </p>

                            {{-- Fasilitas --}}
                            @php
                                $facilities = is_array($item->facilities) ? $item->facilities : json_decode($item->facilities, true);
                            @endphp

                            @if (is_array($facilities) && count($facilities) > 0)
                                <ul class="list-unstyled mt-3">
                                    @foreach ($facilities as $facility)
                                        <li class="mb-1 d-flex align-items-center">
                                            {{-- Tentukan icon berdasarkan nama fasilitas --}}
                                            @php
                                                $icon = match(strtolower($facility)) {
                                                    'wifi' => 'fa fa-wifi',
                                                    'pool', 'swimming pool' => 'fa fa-swimming-pool',
                                                    'parking' => 'fa fa-car',
                                                    'breakfast' => 'fa fa-utensils',
                                                    'air conditioner', 'ac' => 'fa fa-asterisk',
                                                    'shower' => 'fa fa-shower',
                                                    'king size bed' => 'fa fa-bed',
                                                    'mountain view' => 'fa fa-mountain',
                                                    'beach view', 'near beach' => 'fa fa-umbrella-beach',
                                                    default => 'fa fa-check',
                                                };
                                            @endphp
                                            <span class="{{ $icon }} me-2 text-primary"></span>
                                            <span>{{ ucfirst($facility) }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            {{-- Rating dan status --}}
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <p class="mb-0">⭐ {{ number_format($item->rating, 1) }}</p>
								<div class="mt-3 text-center">
    <a 
        href="https://wa.me/6285882803703?text=Halo,%20saya%20ingin%20booking%20glamping%20{{ urlencode($item->name) }}%20dengan%20harga%20Rp%20{{ number_format($item->price, 0, ',', '.') }}" 
        target="_blank" 
        class="btn btn-primary btn-sm">
        <i class="fa fa-whatsapp me-1"></i> Booking via WhatsApp
    </a>
</div>
                                @if($item->is_availability)
                                    <span class="badge bg-success">Available</span>
                                @else
                                    <span class="badge bg-danger">Not Available</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
</section>



<section class="ftco-intro ftco-section ftco-no-pt" style="margin-top: 80px;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<div class="img"  style="background-image: url('{{ asset('frontend/images/woods-pattern.jpg') }}');">
							<div class="overlay"></div>
							<h2>BuniHayu Forest</h2>
							<p>Berikan Kritik Dan Masukan Diform Contact Sebagai Evaluasi</p>
							<p class="mb-0"><a href="{{ route('user.contac') }}" class="btn btn-primary px-4 py-3">Evaluasi Tentang BuniHayu</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url('{{ asset('frontend/images/bg_3.jpg') }}');">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md pt-5">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">About</h2>
							<p>Bunihayu Forest adalah sebuah lokasi getaway alam di Subang, Jawa Barat, yang menawarkan glamping (kemah mewah) di tengah hutan dengan pemandangan sungai dan air terjun.</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
								<li class="ftco-animate"><a href="https://www.instagram.com/bunihayu.forest"><span class="fa fa-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-md pt-5 border-left">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">Have a Questions?</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon fa fa-map-marker"></span><span class="text">Jalancagak, Subang, Jawa Barat, Indonesia</span></li>
									<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">085729296893</span></a></li>
									<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">RM.bunihayuforest@temp.co.id</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Bunihayu Forest</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</footer>
			
			

			<!-- loader -->
			<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


			<script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
			<script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
			<script src="{{ asset('frontend/js/popper.min.js')}}"></script>
			<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
			<script src="{{ asset('frontend/js/jquery.easing.1.3.js')}}"></script>
			<script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
			<script src="{{ asset('frontend/js/jquery.stellar.min.js')}}"></script>
			<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
			<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{ asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
			<script src="{{ asset('frontend/js/bootstrap-datepicker.js')}}"></script>
			<script src="{{ asset('frontend/js/scrollax.min.js')}}"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
			<script src="{{ asset('frontend/js/google-map.js')}}"></script>
			<script src="{{ asset('frontend/js/main.js')}}"></script>

</script>
</body>
</html>