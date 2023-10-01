{{-- @push('footer_scripts')

<script src="{{asset('Customs/FrontEnd/about.js')}}"></script>

@endpush --}}

<section class="about-section-three pull-down">
    <div class="bg bg-pattern-8"></div>
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">about the company</span>
                        <h2 id="about_heading">

                        </h2>
                        <div class="text" id="about_description">

                        </div>
                    </div>

                    <div class="row">
                        <div class="info-box col-lg-6 col-md-6">
                            <div class="inner">
                                <h6 class="title" id="about_point_1">
                                
                                </h6>
                                <div class="text" id="about_description_1">

                                </div>
                            </div>
                        </div>
                    
                        <div class="info-box col-lg-6 col-md-6">
                            <div class="inner">
                                <h6 class="title" id="about_point_2">
                                    <i class="icon fa fa-circle-arrow-right"></i> 100% Approval
                                </h6>
                                <div class="text" id="about_description_2">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-box">
                        <!-- Founder Info -->
                        {{-- <div class="founder-info">
                            <figure class="thumb"><img src="images/resource/ceo-thumb.jpg" alt=""></figure>
                            <h6 class="name">Aleesha Brown</h6>
                            <span class="designation">CEO & CO Founder</span>
                        </div> --}}
                        
                        <a href="/contact-us" class="theme-btn btn-style-one hvr-dark"><span class="btn-title">Explore More</span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="abs-image"><img src="{{asset('Assets/FrontEnd/images/resource/image-2.png')}}" alt=""></figure>
                        <figure class="image-1 overlay-anim wow fadeInRight" id="about_image_1">
                            <img src="{{asset('Assets/FrontEnd/images/resource/about-7.jpg')}}" alt="">
                        </figure>
                        <figure class="image-2 overlay-anim wow fadeInRight" id="about_image_2">
                            <img src="{{asset('Assets/FrontEnd/images/resource/about-8.jpg')}}" alt="">

                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>