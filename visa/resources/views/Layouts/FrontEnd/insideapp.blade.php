<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodesolution.com/html/2023/immigro-html/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 14:23:18 GMT -->
<head>
<meta charset="utf-8">
<title>DHWAY Overseas</title>

<script src="{{asset('Customs/FrontEnd/contact_info.js')}}"></script>
<script src="{{asset('Customs/FrontEnd/social_tags.js')}}"></script>
<script src="{{asset('Customs/FrontEnd/logo.js')}}"></script>
<script src="{{asset('Customs/FrontEnd/navbar.js')}}"></script>
<script src="{{asset('Customs/FrontEnd/slider.js')}}"></script>

<!-- Stylesheets -->
<link href="{{asset('Assets/FrontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('Assets/FrontEnd/css/style.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('Assets/FrontEnd/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('Assets/FrontEnd/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

@stack('header_scripts')

</head>

<body>

<div class="page-wrapper">
	
	<!-- Preloader -->
	<!-- <div class="preloader"></div> -->

	<!-- Main Header-->
	<header class="main-header header-style-three">
		<!-- Header Top -->
		<div class="header-top">
			<div class="inner-container">

				<div class="top-left">
					<!-- Info List -->
					<ul class="list-style-one" id="header_contact_info">

						 

					</ul>
				</div>
				
				<div class="top-right">
					<ul class="social-icon-one" id="social_info">

						
					</ul>
				</div>
			</div>
		</div>
		<!-- Header Top -->

		<!-- Header Lower -->
		<div class="header-lower">
			<!-- Main box -->
			<div class="main-box">
				<div class="logo-box">
					<div class="logo" id="logo_id1">

					</div>
				</div>

				<!--Nav Box-->
				<div class="nav-outer">
					
					<nav class="nav main-menu">
						<ul class="navigation" id="dynamic_navbar">
							
						</ul>
					</nav>
					<!-- Main Menu End-->
{{-- 
					<div class="outer-box">                        
						<a href="tel:+92(8800)9806" class="info-btn">
							<img class="icon" src="images/icons/icon-phone.png" alt="">
							<small class="title">Call Anytime</small> 
							<strong class="text">+ 92 ( 8800 ) 86300</strong>
						</a>

						<div class="ui-btn-outer">
							<button class="ui-btn ui-btn search-btn">
								<span class="icon lnr lnr-icon-search"></span>
							</button>
						</div>

						<a href="page-contact.html" class="theme-btn btn-style-one"><span class="btn-title">Book Consultation</span></a>

						<!-- Mobile Nav toggler -->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div> --}}
				</div>
			</div>
		</div>
		<!-- End Header Lower -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
		
			<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			<nav class="menu-box">
				<div class="upper-box">
					<div class="nav-logo"id="logo_id2">

					</div>
					<div class="close-btn"><i class="icon fa fa-times"></i></div>
				</div>
		
				<ul class="navigation clearfix">
					<!--Keep This Empty / Menu will come through Javascript-->
				</ul>
				{{-- <ul class="contact-list-one">
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<i class="icon lnr-icon-phone-handset"></i>
							<span class="title">Call Now</span>
							<a href="tel:+92880098670">+92 (8800) - 98670</a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-envelope1"></span>
							<span class="title">Send Email</span>
							<a href="mailto:help@company.com">help@company.com</a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-clock"></span>
							<span class="title">Send Email</span>
							Mon - Sat 8:00 - 6:30, Sunday - CLOSED
						</div>
					</li>
				</ul> --}}
		
		
				{{-- <ul class="social-links">
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul> --}}
			</nav>
		</div><!-- End Mobile Menu -->

		<!-- Header Search -->
		{{-- <div class="search-popup">
			<span class="search-back-drop"></span>
			<button class="close-search"><span class="fa fa-times"></span></button>
		
			<div class="search-inner">
				<form method="post" action="https://kodesolution.com/html/2023/immigro-html/index.html">
					<div class="form-group">
						<input type="search" name="search-field" value="" placeholder="Search..." required="">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
		</div> --}}
		<!-- End Header Search -->

		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo" id="logo_id3">
						
					</div>
		
					<!--Right Col-->
					<div class="nav-outer">
						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-collapse show collapse clearfix">
								<ul class="navigation clearfix">
									<!--Keep This Empty / Menu will come through Javascript-->
								</ul>
							</div>
						</nav><!-- Main Menu End-->
		
						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div><!-- End Sticky Menu -->
	</header>
	<!--End Main Header -->


	<!-- End Banner Section -->




    @yield('content')







    
	<!-- Main Footer -->
	<footer class="main-footer">
		<div class="bg bg-pattern-7"></div>
		<div class="auto-container">
			<div class="footer-upper">
				<div class="logo-box"id="logo_id4">

				</div>
				<ul class="contact-info" id="footer_contact_info">
					
				</ul>
				{{-- <div class="btn-box">
					<a href="page-contact.html" class="theme-btn btn-style-four"><span class="btn-title">Book Consultation</span></a>
				</div> --}}
			</div>
		</div>

		<!--Widgets Section-->
		{{-- <div class="widgets-section">
			<div class="auto-container">
				<div class="row">
					<!--Footer Column-->
					<div class="footer-column col-xl-6 col-lg-8 col-md-12 mb-0">
						<div class="row">
							<div class="footer-widget col-lg-4 col-md-4 col-ms-12">
								<h6 class="widget-title">Links</h6>
								<ul class="user-links">
									<li><a href="#">About</a></li>
									<li><a href="#">Meet Team</a></li>
									<li><a href="#">News & Media</a></li>
									<li><a href="#">Our Projects</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>

							<div class="footer-widget col-lg-4 col-md-4 col-ms-12">
								<h6 class="widget-title">Visa</h6>
								<ul class="user-links">
									<li><a href="#">Student Visa</a></li>
									<li><a href="#">Business Visa</a></li>
									<li><a href="#">Family Visa</a></li>
									<li><a href="#">Travel Visa</a></li>
									<li><a href="#">Work Visa</a></li>
								</ul>
							</div>

							<div class="footer-widget col-lg-4 col-md-4 col-ms-12">
								<h6 class="widget-title">Services</h6>
								<ul class="user-links">
									<li><a href="#">PR Applicants</a></li>
									<li><a href="#">Visa Consultancy</a></li>
									<li><a href="#">Travel Insurance</a></li>
									<li><a href="#">Work Permits</a></li>
									<li><a href="#">Abrod Study</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-8">
						<div class="footer-widget gallery-widget">
							<h6 class="widget-title">Gallery</h6>
							<div class="widget-content">
								<div class="outer clearfix">
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-1.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-2.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-3.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-4.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-5.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-6.jpg" alt=""></a>
									</figure>
								</div>
							</div>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-12 col-md-6">
						<div class="footer-widget">
							<h6 class="widget-title">Newsletter</h6>
							<div class="subscribe-form">
								<div class="text">Signup for our latest news & articles.</div>
								<form method="post" action="#">
									<div class="form-group">
										<input type="email" name="email" class="email" value="" placeholder="Email Address" required="">
										<button type="button" class="theme-btn"><i class="fa fa-paper-plane"></i></button>
									</div>
								</form>
							</div>
							<ul class="social-icon-two">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div> --}}
	
		<!--Footer Bottom-->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="copyright-text">&copy; Copyright 2023 by  <a href="index.html">DHWAY Overseas</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="{{asset('Assets/FrontEnd/js/jquery.js')}}"></script> 
<script src="{{asset('Assets/FrontEnd/js/popper.min.js')}}"></script>
<!--Revolution Slider-->
{{-- <script src="{{asset('Assets/FrontEnd/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/main-slider-script.js')}}"></script> --}}
<!--Revolution Slider-->
<script src="{{asset('Assets/FrontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/jquery-ui.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/wow.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/appear.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/select2.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/swiper.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/owl.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/script.js')}}"></script>


@stack('footer_scripts')

</body>

<!-- Mirrored from kodesolution.com/html/2023/immigro-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 14:22:41 GMT -->
</html>