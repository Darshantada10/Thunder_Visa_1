@extends('layouts.frontend.app')

@section('content')
	<!-- About Section -->
	<section class="about-section">
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">about the company</span>
							<h2 id="heading1">

							</h2>
							<h4 id="sub_heading1"></h4>
							<div class="text" id="information1">

							</div>
						</div>

						<div class="row">
							<div class="about-block col-lg-6 col-md-6">
								<div class="inner">
									<i class="icon flaticon-passport-16"></i>
									<h6 class="title" id="title1">

									</h6>
								</div>
							</div>
							
							<div class="text-block col-lg-6 col-md-6">
								<div class="inner">
									<div class="text" id="title_description1">

									</div>
								</div>
							</div>
						</div>
						
						{{-- <div class="btm-box">
							<a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Discover More</span></a>
						</div> --}}
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<div class="row">
							<div class="column col-lg-6 col-md-6">
								<div class="image-box">
									<figure class="map"><img src="Assets/FrontEnd/images/icons/map.png" alt=""></figure>
									<figure class="image-1 overlay-anim wow fadeInUp"><img src="Assets/FrontEnd/images/resource/about-1.jpg" alt=""></figure>
									<figure class="image-2 overlay-anim wow fadeInRight"><img src="Assets/FrontEnd/images/resource/about-2.jpg" alt=""></figure>
								</div>
							</div>
							<div class="column col-lg-6 col-md-6">
								<div class="image-box">
									<figure class="image-3 overlay-anim wow fadeInLeft"><img src="Assets/FrontEnd/images/resource/about-3.jpg" alt=""></figure>
									<div class="experience bounce-y">
										<div class="inner">
											<i class="icon flaticon-loyalty"></i>
											<div class="text"><strong>5986</strong> Satisfied Clients</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->
	
	<!-- Why Choose US -->
	<section class="why-choose-us pt-0">
		<div class="bg bg-pattern-1"></div>

		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">countries you can visit</span>
				<h2>Few reasons to choose <br>our visa <span class="color3">company</span></h2>
			</div>

			<div class="row">
				<!-- Features Block -->
				<div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<i class="icon flaticon-interview"></i>
						<span class="cat">#1</span>
						<h6 class="title">Direct Interviews</h6>
					</div>
				</div>

				<!-- Features Block -->
				<div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="content">
							<i class="icon flaticon-low-cost"></i>
							<span class="cat">#2</span>
							<h6 class="title">Cost Effective</h6>
						</div>
					</div>
				</div>

				<!-- Features Block -->
				<div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<div class="content">
							<i class="icon flaticon-loyalty"></i>
							<span class="cat">#3</span>
							<h6 class="title">Trusted Customers</h6>
						</div>
					</div>
				</div>

				<!-- Features Block -->
				<div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
					<div class="inner-box">
						<div class="content">
							<i class="icon flaticon-online-support"></i>
							<span class="cat">#4</span>
							<h6 class="title">Support Team</h6>
						</div>
					</div>
				</div>
			</div>

			<div class="bottom-text">Top rated by customers & immigration firms with 100% success rate and building relation since 25 years.</div>
		</div>
	</section>
	{{-- <!--Emd Why Cho --}}

        	<section class="services-section">
		<div class="auto-container">
			
			<div class="row">
				<div class="col-lg-6">
					<div class="sec-title">
						<span class="sub-title">What do we offer</span>
						<h2 id="heading2"></h2>
						<div class="text" id="information2">
							                            
                        </div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="/student-visa"><img src="Assets/FrontEnd/images/resource/service-1.jpg" alt=""></a></figure>
							<i class="icon fa fa-graduation-cap"></i>
							<h6 class="title">Student Visa</h6>
						</div>
						<div class="content-box">
							<h6 class="title"><a href="/student-visa">Student Visa</a></h6>
							<div class="text">We have to a tendency to believe the idea that smart looking of any website.</div>
							<a href="/student-visa" class="read-more">More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="200ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="/business-visa"><img src="Assets/FrontEnd/images/resource/service-2.jpg" alt=""></a></figure>
							<i class="icon fa fa-briefcase"></i>
							<h6 class="title">Business Visa</h6>
						</div>
						<div class="content-box">
							<h6 class="title"><a href="/business-visa">Business Visa</a></h6>
							<div class="text">We have to a tendency to believe the idea that smart looking of any website.</div>
							<a href="/business-visa" class="read-more">More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="/business-visa"><img src="Assets/FrontEnd/images/resource/service-3.jpg" alt=""></a></figure>
							<i class="icon fa fa-family"></i>
							<h6 class="title">Family Visa</h6>
						</div>
						<div class="content-box">
							<h6 class="title"><a href="/business-visa">Family Visa</a></h6>
							<div class="text">We have to a tendency to believe the idea that smart looking of any website.</div>
							<a href="/business-visa" class="read-more">More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="200ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="/visit-visa"><img src="Assets/FrontEnd/images/resource/service-4.jpg" alt=""></a></figure>
							<i class="icon fa fa-camera"></i>
							<h6 class="title">Tourist Visa</h6>
						</div>
						<div class="content-box">
							<h6 class="title"><a href="/visit-visa">Tourist Visa</a></h6>
							<div class="text">We have to a tendency to believe the idea that smart looking of any website.</div>
							<a href="/visit-visa" class="read-more">More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="/work-permit"><img src="Assets/FrontEnd/images/resource/service-5.jpg" alt=""></a></figure>
							<i class="icon fa fa-home"></i>
							<h6 class="title">Work Permit</h6>
						</div>
						<div class="content-box">
							<h6 class="title"><a href="/work-permit">Work Permit</a></h6>
							<div class="text">We have to a tendency to believe the idea that smart looking of any website.</div>
							<a href="/work-permit" class="read-more">More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>

				<!-- CTA Block -->
				<div class="cta-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<h4 class="title">Get visa with 100% success rate</h4>
						<a href="/contact" class="theme-btn btn-style-three small">Apply Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>


<script>
	function about_page()
	{
		fetch("http://localhost:8000/api/about-page").then((res)=>res.json()).then((response)=>
		{
			// console.log(response);
			heading1 = ""
			information1 = ""
			sub_heading1 = ""
			title1 = ""
			title_description1 = ""
			heading2 = ""
			information2 = ""
			response.forEach(about =>
			{

				heading1 += `${response[0].heading1}`
				document.getElementById("heading1").innerHTML = heading1	
				
				sub_heading1 += `${response[0].sub_heading1}`
				document.getElementById("sub_heading1").innerHTML = sub_heading1	
				
				information1 += `${response[0].information1}`
				document.getElementById("information1").innerHTML = information1	
				
				title1 += `${response[0].title1}`
				document.getElementById("title1").innerHTML = title1	
				
				title_description1 += `${response[0].title_description1}`
				document.getElementById("title_description1").innerHTML = title_description1	
				
				heading2 += `${response[0].heading2}`
				document.getElementById("heading2").innerHTML = heading2	
				
				information2 += `${response[0].information2}`
				document.getElementById("information2").innerHTML = information2	
				
			});
		});
	}
	about_page()
</script>

    @endsection