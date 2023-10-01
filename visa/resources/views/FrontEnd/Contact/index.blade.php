@extends('Layouts.FrontEnd.app')

@section('content')
    
@push('footer_scripts')
<script src="{{asset('Customs/FrontEnd/tourist_visa.js')}}"></script>

@endpush

<section class="services-details">
    <div class="container">
        <div class="row">
            <!--Start Services Details Sidebar-->
            <div class="col-xl-4 col-lg-4">
                <div class="service-sidebar">
                    <!--Start Services Details Sidebar Single-->
                    <div class="sidebar-widget service-sidebar-single">
                        <div class="service-sidebar wow fadeInUp"
                            data-wow-delay="0.1s" data-wow-duration="1200m">
                            <div class="service-list">
                            <ul>
                            <li><a href="/tourist-visa" class="current"><i class="fas fa-angle-right"></i><span>Tourist Visa</span></a></li>
                            {{-- <li><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>Family Visa</span></a></li>
                            <li><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>Tourist Visa</span></a></li>
                            <li><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>Business Visa</span></a></li>
                            <li><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>Worker Visa</span></a></li>
                            <li><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>Diplomatic Visa</span></a></li> --}}
                            </ul>
                            </div>
                        </div>
                    </div>

                    <!--End Services Details Sidebar Single-->
                    <div class="sidebar-widget banner-widget">

                        
                      <div class="widget-content" style="background-image: url({{asset('Assets/FrontEnd/images/resource/contact.jpg')}});">
                        <div class="shape" style="background-image: url({{asset('Assets/FrontEnd/images/resource/overlay-shape.png')}});"></div>
                        <div class="content-box">
                          <div class="icon-box">
                            <i class="lnr lnr-icon-pie-chart"></i>
                          </div>
                          <h3>Apply for visa now</h3>
                          <a href="/contact-us" class="theme-btn btn-style-one light"><span class="btn-title"> Contact us</span></a>
                        </div>
                      </div>
                    </div>

                    <!--Start Services Details Sidebar Single-->
                    {{-- <div class="sidebar-widget service-sidebar-single mt-5">
                        <div class="service-sidebar-single-btn wow fadeInUp"
                            data-wow-delay="0.5s" data-wow-duration="1200m">
                            <a href="#" class="theme-btn btn-style-one d-grid"><span class="btn-title"><span class="fas fa-file-pdf"></span> download pdf file</span></a>
                        </div>
                    </div> --}}
                    <!--End Services Details Sidebar Single-->
                </div>
            </div>
            <!--End Services Details Sidebar-->

            <!--Start Services Details Content-->
            <div class="col-xl-8 col-lg-8">
                <div class="services-details__content">
                    <div id="image">
                        {{-- <img src="Assets/FrontEnd/images/resource/service-details.jpg" alt="" /> --}}
                    </div>
                    <h2 class="mt-4" id="heading_1">

                    </h2>
                    <p id="info_1">
                        
                    </p>
                        <div class="content mt-40">
                        <div class="text">
                            <h3>Visa Center</h3>
                            <p>
                                <h5 id="heading_2">

                                </h5>
                                <p id="info_2">

                                </p>
                            </p>
                            </div>
                        <div class="feature-list">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-check-circle"></i></div>
                                        <h6 class="title" id="p1"></h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-check-circle"></i></div>
                                        <h6 class="title" id="p2"></h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-check-circle"></i></div>
                                        <h6 class="title" id="p3"></h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-check-circle"></i></div>
                                        <h6 class="title" id="p4"></h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-check-circle"></i></div>
                                        <h6 class="title" id="p5"></h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-check-circle"></i></div>
                                        <h6 class="title" id="p6"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class=" mt-25">
                        <h3>Frequently Asked Question</h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <ul class="accordion-box wow fadeInRight">
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">How to soft launch your business?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Is my technology allowed on tech?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <!--End Services Details Content-->
        </div>
    </div>
</section>


@endsection