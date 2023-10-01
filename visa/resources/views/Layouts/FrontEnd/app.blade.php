<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>DHWAY Overseas</title>



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
				<div class="logo-box" id="logo_id1">
					
				</div>

				<!--Nav Box-->
				<div class="nav-outer" >
					
					<nav class="nav main-menu w-100">
				<ul class="navigation clearfix" id="dynamic_navbar1">
						
						</ul>
						<!--<ul class="navigation" id="dynamic_navbar">-->
							
						<!--</ul>-->
						
						<div class="ml-a btn-partnerlogin">
						    <a href="/partner-portal" class="theme-btn btn-style-one"><span class="btn-title">Partner Login</span></a>
						    </div>
					</nav>
					<!-- Main Menu End-->
            
				</div>
			</div>
		</div>
		<!--<div class="header-lower">-->
			<!-- Main box -->
		<!--	<div class="main-box">-->
		<!--		<div class="logo-box">-->
		<!--			<div class="logo" id="logo_id1">-->

		<!--			</div>-->
		<!--		</div>-->

				<!--Nav Box-->
		<!--		<div class="nav-outer">-->
					
		<!--			<nav class="nav main-menu">-->
		<!--				<ul class="navigation" id="dynamic_navbar">-->
							
		<!--				</ul>-->
		<!--			</nav>-->
					<!-- Main Menu End-->

		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->
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
		
				<ul class="navigation clearfix" >
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
								<ul class="navigation clearfix" id="dynamic_navbar2">
								       
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

	<!-- Banner Section -->
	<section class="banner-section-two">
		<div class="banner-carousel owl-carousel owl-theme">
			<!-- Slide Item -->
			<div class="slide-item">
               
				<div class="bg-image">
                    <video class="bg-video" autoplay loop muted >
                        <source src="/Paris.mkv" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                  </div>
                  
				<div class="auto-container">
					<div class="content-box">
						
						<h1  class="number animate-2" id="slider_heading">
DHWAY Overseas 
						</h1>
						<div class="title animate-1" id="slider_sub_heading">
              Simplify your path to France with visa Experts      
						</div>


						<div class="btn-box animate-3">
							<a href="contact-us" class="theme-btn btn-style-one"><span class="btn-title">Contact Now</span></a>
						</div>

					</div>
				</div>
			</div>

		</div>
		<div class="bottom-box">
			<div class="auto-container">
				<div class="content">
					<div class="inner">
						<span class="icon icon-arrow-up"></span>
							<div class="images">
							<img src="{{asset('Assets/FrontEnd/images/resource/avatar-1.jpg')}}" alt="">
							<img src="{{asset('Assets/FrontEnd/images/resource/avatar-3.jpg')}}" alt="">
							<img src="{{asset('Assets/FrontEnd/images/resource/avatar-2.jpg')}}" alt="">
						</div>
						<div class="text"><strong class="color2">37800</strong> satisfied clients with DHWAY Overseas</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
		<div class="widgets-section">
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
						{{-- <div class="footer-widget gallery-widget">
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
						</div> --}}
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-12 col-md-6">
						<div class="footer-widget">
							<h6 class="widget-title">OUR Social Handles</h6>
							{{-- <div class="subscribe-form">
								<div class="text">Signup for our latest news & articles.</div>
								<form method="post" action="#">
									<div class="form-group">
										<input type="email" name="email" class="email" value="" placeholder="Email Address" required="">
										<button type="button" class="theme-btn"><i class="fa fa-paper-plane"></i></button>
									</div>
								</form>
							</div> --}}
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
		</div>
	
		<!--Footer Bottom-->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="copyright-text">&copy; Copyright 2023 by  <a href="/">DHWAY Overseas</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



<script defer src="{{asset('Assets/FrontEnd/js/jquery.js')}}"></script> 
<script defer src="{{asset('Assets/FrontEnd/js/popper.min.js')}}"></script>

{{-- <!--<script defer src="{{asset('Customs/FrontEnd/contact_info.js')}}"></script>-->
<!--<script defer src="{{asset('Customs/FrontEnd/social_tags.js')}}"></script>-->
<!--<script defer src="{{asset('Customs/FrontEnd/logo.js')}}"></script>-->
<!--<script defer src="{{asset('Customs/FrontEnd/slider.js')}}"></script>--> --}}

<script defer src="{{asset('Customs/FrontEnd/navbar.js')}}"></script>
<script defer src="{{asset('Customs/FrontEnd/all_data.js')}}"></script>
<!--Revolution Slider-->

<!--Revolution Slider-->
<script defer src="{{asset('Assets/FrontEnd/js/bootstrap.min.js')}}"></script>
<script defer src="{{asset('Assets/FrontEnd/js/jquery.fancybox.js')}}"></script>
<script defer src="{{asset('Assets/FrontEnd/js/jquery-ui.js')}}"></script>
<script defer src="{{asset('Assets/FrontEnd/js/wow.js')}}"></script>
<script defer src="{{asset('Assets/FrontEnd/js/appear.js')}}"></script>
<script defer src="{{asset('Assets/FrontEnd/js/select2.min.js')}}"></script>
<script defer src="{{asset('Assets/FrontEnd/js/swiper.min.js')}}"></script>
<script defer src="{{asset('Assets/FrontEnd/js/owl.js')}}"></script>
<script defer src="{{asset('Assets/FrontEnd/js/script.js')}}"></script>


@stack('footer_scripts')

</body>

</html>