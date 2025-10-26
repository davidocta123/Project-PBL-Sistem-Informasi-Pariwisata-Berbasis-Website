<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome Buni Hayu</title>
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
         <li class="nav-item"><a href="{{ route('user.glampi') }}" class="nav-link">Glamping</a></li>
         <li class="nav-item active"><a href="{{ route('user.contac') }}" class="nav-link">Contact</a></li>
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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Contact us</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pb contact-section mb-4">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-3 d-flex">
       <div class="align-self-stretch box p-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-map-marker"></span>
       </div>
       <h3 class="mb-2">Address</h3>
       <p>Jalancagak, Subang, Jawa Barat, Indonesia</p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="align-self-stretch box p-4 text-center">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-phone"></span>
     </div>
     <h3 class="mb-2">Contact Number</h3>
     <p><a href="tel://1234567920">085729296893</a></p>
   </div>
 </div>
 <div class="col-md-3 d-flex">
   <div class="align-self-stretch box p-4 text-center">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="fa fa-paper-plane"></span>
   </div>
   <h3 class="mb-2">Email Address</h3>
   <p><a href="mailto:info@yoursite.com">RM.bunihayuforest@temp.
    co.id</a></p>
 </div>
</div>
<div class="col-md-3 d-flex">
 <div class="align-self-stretch box p-4 text-center">
  <div class="icon d-flex align-items-center justify-content-center">
   <span class="fa fa-globe"></span>
 </div>
 <h3 class="mb-2">Website</h3>
 <p><a href="https://bunihayu.com/">bunihayu.com</a></p>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section contact-section ftco-no-pt">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="{{ route('contact.store') }}" method="POST" class="bg-light p-5 contact-form">
    @csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Your Name">
    </div>
    <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Your Email">
    </div>
    <div class="form-group">
        <input type="number" name="phone" class="form-control" placeholder="Phone">
    </div>
    <div class="form-group">
        <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
    </div>
</form>
        
      </div>

      <div class="col-md-6 d-flex">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0031805463755!2d107.66936987378654!3d-6.646524964972239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6923eafc03c7a3%3A0x5f1727e3a413afea!2sBunihayu%20Forest!5e0!3m2!1sid!2sid!4v1761475911576!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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