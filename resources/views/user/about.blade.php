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
         <li class="nav-item active"><a href="{{ route('user.about') }}" class="nav-link">About</a></li>
         <li class="nav-item"><a href="{{ route('user.glampi') }}" class="nav-link">Glamping</a></li>
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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">About Us</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
       <div class="w-100">
        <span class="subheading">Welcome to Pacific</span>
        <h2 class="mb-4">It's time to start your adventure</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
        A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
      </div>
    </div>
    <div class="col-md-6">
						<div class="row">
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-1 d-block img" style="background-image: url('{{ asset('frontend/images/gallery-17.jpg') }}');">
									<div class="media-body">
										<h3 class="heading mb-4">Waterfall</h3>
										<p>Curug Cinangrang, Air terjun tersembunyi dengan ketinggian 20 m bisa dengan santai Anda nikmati dengan aliran sungai yang mengalir tenang.</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-2 d-block img" style="background-image: url('{{ asset('frontend/images/gallery-19.jpg') }}');">
									<div class="media-body">
										<h3 class="heading mb-3">Hot Spring Pools</h3>
										<p>Nikmati sensasi berendam di kolam air panas alami di tengah hutan sambil mendengar suara gemericik air sungai dapat membuat tubuh menjadi rileks.</p>
									</div>
								</div>    
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-3 d-block img" style="background-image: url('{{ asset('frontend/images/gallery-15.jpg') }}');">
									<div class="media-body">
										<h3 class="heading mb-3">Glamping</h3>
										<p>Suasana Glamping di tengah hutan dengan pemandangan air terjun, dekat dengan aliran sungai dan kolam air panas alami</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-4 d-block img" style="background-image: url('{{ asset('frontend/images/image-default.jpg') }}');">
									<div class="media-body">
										<h3 class="heading mb-3">Amphitheater</h3>
										<p>Amfiteater terbuka yang dibuat untuk berbagai keperluan yang lokasinya di antara perpaduan pemandangan hijau, aliran sungai yang cocok untuk kegiatan yang tenang dan damai.</p>
									</div>
								</div>      
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


<section class="ftco-section ftco-about img"style="background-image: url('{{ asset('frontend/images/gallery-24.jpg') }}');">
 <div class="overlay"></div>
 <div class="container py-md-5">
  <div class="row py-md-5">
   <div class="col-md d-flex align-items-center justify-content-center">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/e5zIXf1thbw?si=Jw7mKYC5Kjb-O9Fc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
 </div>
</div>
</div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
 <div class="container">
  <div class="row d-flex">
   <div class="col-md-12 about-intro">
    <div class="row">
     <div class="col-md-6 d-flex align-items-stretch">
      <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url('{{ asset('frontend/images/gallery-15.jpg') }}');">
      </div>
    </div>
    <div class="col-md-6 pl-md-5 py-5">
      <div class="row justify-content-start pb-3">
        <div class="col-md-12 heading-section ftco-animate">
         <span class="subheading">About Us</span>
         <h2 class="mb-4">Experience Nature in Comfort at Bunihayu Forest</h2>
         <p> Nikmati sensasi berendam di kolam air panas alami, bersantai di tengah hutan, atau menjelajahi keindahan Curug Cinangrang yang mempesona.</p>
         <p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>

	<section class="ftco-section testimony-section bg-bottom" style="background-image: url('{{ asset('frontend/images/gallery-28.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Share Your Feedback</h2>
                <p>We’d love to hear your experience with our services!</p>
            </div>
        </div>

        <div class="row justify-content-center ftco-animate">
            <div class="col-md-8">
				@if(session('success'))
    		<div class="alert alert-success text-center">
        		{{ session('success') }}
    		</div>
		@endif
                <form action="{{ route('testimonial.store') }}" 
      method="POST" 
      enctype="multipart/form-data" 
      class="bg-white p-5 rounded-4 shadow-lg border-0">
    @csrf


    {{-- Nama --}}
    <div class="form-group mb-3">
        <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
        <input type="text" 
               id="name" 
               name="name" 
               class="form-control form-control-lg rounded-3 shadow-sm @error('name') is-invalid @enderror" 
               placeholder="Masukkan nama lengkap Anda" 
               value="{{ old('name') }}" 
               required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Rating --}}
    <div class="form-group mb-3">
        <label for="rating" class="form-label fw-semibold">Penilaian Anda</label>
        <select id="rating" 
                name="rating" 
                class="form-select form-select-lg rounded-3 shadow-sm @error('rating') is-invalid @enderror" 
                required>
            <option value="">-- Pilih Rating --</option>
            <option value="5">★★★★★ (5 bintang)</option>
            <option value="4">★★★★☆ (4 bintang)</option>
            <option value="3">★★★☆☆ (3 bintang)</option>
            <option value="2">★★☆☆☆ (2 bintang)</option>
            <option value="1">★☆☆☆☆ (1 bintang)</option>
        </select>
        @error('rating')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Pesan --}}
    <div class="form-group mb-3">
        <label for="message" class="form-label fw-semibold">Pesan</label>
        <textarea id="message" 
                  name="message" 
                  class="form-control form-control-lg rounded-3 shadow-sm @error('message') is-invalid @enderror" 
                  rows="5" 
                  placeholder="Tulis pengalaman Anda di sini..." 
                  required>{{ old('message') }}</textarea>
        @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Foto --}}
    <div class="form-group mb-4">
        <label for="image" class="form-label fw-semibold">Foto Anda (opsional)</label>
        <input type="file" 
               id="image" 
               name="image" 
               class="form-control form-control-lg rounded-3 shadow-sm @error('image') is-invalid @enderror">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Tombol Submit --}}
    <div class="text-center">
        <button type="submit" 
                class="btn btn-primary btn-lg px-5 py-2 rounded-pill fw-semibold shadow-sm">
            <i class="bi bi-send me-2"></i> Kirim Testimonial
        </button>
    </div>
</form>
            </div>
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