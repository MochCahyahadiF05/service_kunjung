<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('uis/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('uis/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('uis/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('uis/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('uis/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('uis/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('uis/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('uis/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('uis/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('uis/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('uis/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('uis/css/style.css')}}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Home<span>Service</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
              {{-- <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li> --}}
              @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                   </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
              @else
              @endguest
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{asset('templates/img/bg.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Service Motor Kunjungan </h1>
	            <p style="font-size: 18px;">Mempermudah dan Menghemat waktu pelanggan</p>
	            <a href="{{route('service.create')}}" class="btn btn-success"> Boking Service</a>
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('templates/img/admin.png')}});">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	                    <div class="heading-section heading-section-white pl-md-5">
	                        <span class="subheading">About us</span>
                            <h2 class="mb-4">Welcome to Home Serice Motor</h2>

            	            <p>Home service merupakan layanan dimana service dan perawatan sebuah kendaraan bisa dilakukan di rumah masing-masing pelanggan. Sehingga kendaraan tidak perlu datang ke bengkel secara langsung.</p>
            	            <p>Pekerjaan servis yang dilakukan adalah Paket Servis Lengkap/Ringan/Ganti Oli Plus (servis tune up) atau pekerjaan lain yang waktunya pengerjaannya (termasuk servis tune up) tidak lebih dari 1 jam. Adapun penggantian part yang dikerjakan adalah penggantian sparepart fast-moving sepeda motor.</p>
					</div>
				</div>
			</div>
		</section>

		

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('uis/js/jquery.min.js')}}"></script>
  <script src="{{asset('uis/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('uis/js/popper.min.js')}}"></script>
  <script src="{{asset('uis/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('uis/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('uis/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('uis/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('uis/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('uis/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('uis/js/aos.js')}}"></script>
  <script src="{{asset('uis/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('uis/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('uis/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('uis/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('uis/js/google-map.js')}}"></script>
  <script src="{{asset('uis/js/main.js')}}"></script>
    
  </body>
</html>