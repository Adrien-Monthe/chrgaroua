@extends('frontend.layouts.app')
@section('page-title', __('about.page-title'))
@section('content')
    <!--=================================
         Banner start-->
    <div class="pq-breadcrumb" style="background-image:url('{{ asset('frontend/images/about/page_banner_3.png')}}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h2>@lang('about.page-title') </h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale() ) }}"><i class="fas fa-home mr-2"></i>@lang('navbar.nav-home')</a></li>
                                <li class="breadcrumb-item active">@lang('navbar.nav-about-us') </li>
                            </ol>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-4">
                    <div class="pq-breadcrumb-img text-right wow fadeInRight"></div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
          Banner end-->
    <!--=================================
          about-us start-->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 pe-xl-5"> <img src="{{ asset('frontend/images/about/page_banner_2.jpg')}}" class="img-fluid wow fadeInLeft" alt="home"> </div>
                <div class="col-xl-6 px-xl-4 mt-4 mt-xl-0">
                    <div class="pq-section pq-style-1 text-left"> <span class="pq-section-sub-title">@lang('about.chrg_text')</span>
                        <h5 class="pq-section-title">@lang('about.welcome_to_chrg')  </h5>
                        <p class="pq-section-description">@lang('about.welcome_to_chrg_text') </p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6">
                            <ul class="pq-list-check ">
                                <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>@lang('about.patient-centered-care')</span></li>
                                <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>@lang('about.evidence-based-practice')</span></li>
                                <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>@lang('about.continuous-improvement')</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <ul class="pq-list-check">
                                <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>@lang('about.quality-assurance')</span></li>
                                <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>@lang('about.interdisciplinary-teamwork')</span></li>
                                <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>@lang('about.communication-transparency')</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-md-5">
                            <div class="pq-contact-box1">
                                <h4 class="pq-contact-title">1510</h4>
                                <p class="pq-contact-desciption pq-text-primary mb-0">@lang('about.do-you-have-questions')</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--=================================
          about-us end-->
    <!--=================================
          our-service start-->
    <section class="service pq-bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">OUR SERVICES</span>
                            <h5 class="pq-section-title">@lang('about.our-main-services')</h5> </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pq-fancy-box pq-style-3">
                        <div class="pq-fancy-box-hoverbg"> <img src="{{ asset('frontend/images/services/1.jpg')}}" class="img-fluid" alt="Images"> </div>
                        <div class="pq-fancy-box-icon"> <i class=" flaticon-heartbeat"></i> </div>
                        <div class="pq-fancy-box-info left">
                            <h5 class="pq-fancy-box-title">@lang('about.cardiology')</h5>
                            <p class="pq-fancybox-description">@lang('about.cardiology_text')</p>
                            <a class="pq-button pq-button-link" href="#">
                                <div class="pq-button-block"> <span class="pq-button-text">@lang('about.read_more')</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-xl-0 mt-md-0 mt-4">
                    <div class="pq-fancy-box pq-style-3">
                        <div class="pq-fancy-box-hoverbg"> <img src="{{ asset('frontend/images/services/2.jpg')}}" class="img-fluid" alt="Images"> </div>
                        <div class="pq-fancy-box-icon"><i class=" flaticon-first-aid-box"></i></div>
                        <div class="pq-fancy-box-info left">
                            <h5 class="pq-fancy-box-title">@lang('about.emergency')</h5>
                            <p class="pq-fancybox-description">@lang('about.emergency_text')</p>
                            <a class="pq-button pq-button-link" href="#">
                                <div class="pq-button-block"> <span class="pq-button-text">@lang('about.read_more')</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 mt-4 mt-xl-0">
                    <div class="pq-fancy-box pq-style-3">
                        <div class="pq-fancy-box-hoverbg"> <img src="{{ asset('frontend/images/services/3.jpg')}}" class="img-fluid" alt="Images"> </div>
                        <div class="pq-fancy-box-icon"> <i class="flaticon-healthcare"></i> </div>
                        <div class="pq-fancy-box-info left">
                            <h5 class="pq-fancy-box-title">@lang('about.reanimation')</h5>
                            <p class="pq-fancybox-description">@lang('about.reanimation_text')</p>
                            <a class="pq-button pq-button-link" href="#">
                                <div class="pq-button-block"> <span class="pq-button-text">@lang('about.read_more')</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6  mt-4">
                    <div class="pq-fancy-box pq-style-3">
                        <div class="pq-fancy-box-hoverbg"> <img src="{{ asset('frontend/images/services/2.jpg')}}" class="img-fluid" alt="Images"> </div>
                        <div class="pq-fancy-box-icon"> <i class="  flaticon-ct-scan"></i> </div>
                        <div class="pq-fancy-box-info left">
                            <h5 class="pq-fancy-box-title">@lang('about.ophthalmology')</h5>
                            <p class="pq-fancybox-description">@lang('about.ophthalmology_text')</p>
                            <a class="pq-button pq-button-link" href="#">
                                <div class="pq-button-block"> <span class="pq-button-text">@lang('about.read_more')</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="pq-fancy-box pq-style-3">
                        <div class="pq-fancy-box-hoverbg"> <img src="{{ asset('frontend/images/services/3.jpg')}}" class="img-fluid" alt="Images"> </div>
                        <div class="pq-fancy-box-icon"> <i class=" flaticon-x-ray-1"></i> </div>
                        <div class="pq-fancy-box-info left">
                            <h5 class="pq-fancy-box-title">@lang('about.neurology')</h5>
                            <p class="pq-fancybox-description">@lang('about.neurology_text')</p>
                            <a class="pq-button pq-button-link" href="#">
                                <div class="pq-button-block"> <span class="pq-button-text">@lang('about.read_more')</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 mt-4">
                    <div class="pq-fancy-box pq-style-3">
                        <div class="pq-fancy-box-hoverbg"> <img src="{{ asset('frontend/images/services/1.jpg')}}" class="img-fluid" alt="Images"> </div>
                        <div class="pq-fancy-box-icon"> <i class=" flaticon-health-insurance"></i> </div>
                        <div class="pq-fancy-box-info left">
                            <h5 class="pq-fancy-box-title">@lang('about.orthopaedics')</h5>
                            <p class="pq-fancybox-description">@lang('about.orthopaedics_text')</p>
                            <a class="pq-button pq-button-link" href="#">
                                <div class="pq-button-block"> <span class="pq-button-text">@lang('about.read_more')</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          our-service end-->
    <!--=================================
          counter start-->
    <section class=" pq-counter-60 pq-bg-primary-dark pq-py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 ">
                    <div class="pq-counter pq-style-2 text-center">
                        <div class="pq-counter-contain">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="100" data-speed="5000">100</h5> <span class="pq-counter-prefix">k</span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="100" data-speed="5000">100</h5> <span class="pq-counter-prefix">k</span> </div>
                                <p class="pq-counter-description">Saves Hearts</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-lg-0  mt-md-0 mt-4  ">
                    <div class="pq-counter pq-style-2 text-center">
                        <div class="pq-counter-contain">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="125" data-speed="5000">125</h5> <span class="pq-counter-prefix">k</span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="125" data-speed="5000">125</h5> <span class="pq-counter-prefix">k</span> </div>
                                <p class="pq-counter-description">Expert Doctors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0  mt-4 ">
                    <div class="pq-counter pq-style-2 text-center">
                        <div class="pq-counter-contain">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="250" data-speed="5000">250</h5> <span class="pq-counter-prefix">k</span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="250" data-speed="5000">250</h5> <span class="pq-counter-prefix">k</span> </div>
                                <p class="pq-counter-description">saved tooth</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-4 ">
                    <div class="pq-counter pq-style-2 text-center">
                        <div class="pq-counter-contain border-0">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="554" data-speed="5000">554</h5> <span class="pq-counter-prefix">k</span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="554" data-speed="5000">554</h5> <span class="pq-counter-prefix">k</span> </div>
                                <p class="pq-counter-description">Happy Patients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          counter end-->
    <!--=================================
          our-client start-->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">Our Clients</span>
                        <h5 class="pq-section-title">Our Client Happy Say About Us</h5> </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" data-dots="true" data-nav="false" data-desk_num="2" data-lap_num="2" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                        <div class="item">
                            <div class="pq-testimonial-box pq-style-1">
                                <div class="pq-testimonial-info">
                                    <div class="pq-testimonial-content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</p>
                                    </div>
                                </div>
                                <div class="pq-testimonial-media">
                                    <div class="pq-testimonial-img"> <img src="{{ asset('frontend/images/testimonial/1.png')}}" class="img-fluid" alt="testimonial-image"> </div>
                                    <div class="pq-testimonial-meta">
                                        <h5>Dr. john Martin</h5> <span>Cancer Research </span> </div>
                                    <div class="pq-testimonial-icon"> <i class="fas fa-quote-right"></i> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-testimonial-box pq-style-1">
                                <div class="pq-testimonial-info">
                                    <div class="pq-testimonial-content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</p>
                                    </div>
                                </div>
                                <div class="pq-testimonial-media">
                                    <div class="pq-testimonial-img"> <img src="{{ asset('frontend/images/testimonial/2.png')}}" class="img-fluid" alt="testimonial-image"> </div>
                                    <div class="pq-testimonial-meta">
                                        <h5>Dr. john Martin</h5> <span>Cancer Research </span> </div>
                                    <div class="pq-testimonial-icon"> <i class="fas fa-quote-right"></i> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-testimonial-box pq-style-1">
                                <div class="pq-testimonial-info">
                                    <div class="pq-testimonial-content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</p>
                                    </div>
                                </div>
                                <div class="pq-testimonial-media">
                                    <div class="pq-testimonial-img"> <img src="{{ asset('frontend/images/testimonial/3.png')}}" class="img-fluid" alt="testimonial-image"> </div>
                                    <div class="pq-testimonial-meta">
                                        <h5>Dr. john Martin</h5> <span>Cancer Research </span> </div>
                                    <div class="pq-testimonial-icon"> <i class="fas fa-quote-right"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          our-client end-->
    <!--=================================
          our-step start-->
    <section class="process-step pq-bg-img-2 pq-bg-grey ">
        <div class="container  ">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">OUR STEP</span>
                        <h5 class="pq-section-title">Our Workig Best Process</h5> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="pq-process-step pq-process-style-2 ">
                        <div class="pq-process-media">
                            <div class="pq-process-img"><img src="{{asset('frontend/images/process/1.png')}}" class="img-fluid" alt="medicate"> </div>
                            <div class="pq-process-number"> <span>01</span> </div>
                        </div>
                        <div class="pq-process-step-info">
                            <h5 class="pq-process-title">Emergency Care</h5> <span class="pq-process-sub-title"></span>
                            <div class="pq-process-description">
                                <p>There are many variations of passages Lorem Ipsum available</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="pq-process-step pq-process-style-2 ">
                        <div class="pq-process-media">
                            <div class="pq-process-img"><img src="{{asset('frontend/images/process/2.png')}}" class="img-fluid" alt="medicate"> </div>
                            <div class="pq-process-number"> <span>02</span> </div>
                        </div>
                        <div class="pq-process-step-info">
                            <h5 class="pq-process-title">Emergency Care</h5> <span class="pq-process-sub-title"></span>
                            <div class="pq-process-description">
                                <p>There are many variations of passages Lorem Ipsum available</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="pq-process-step pq-process-style-2 ">
                        <div class="pq-process-media">
                            <div class="pq-process-img"><img src="{{asset('frontend/images/process/3.png')}}" class="img-fluid" alt="medicate"> </div>
                            <div class="pq-process-number"> <span>03</span> </div>
                        </div>
                        <div class="pq-process-step-info">
                            <h5 class="pq-process-title">Emergency Care</h5> <span class="pq-process-sub-title"></span>
                            <div class="pq-process-description">
                                <p>There are many variations of passages Lorem Ipsum available</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="pq-process-step pq-process-style-2 ">
                        <div class="pq-process-media">
                            <div class="pq-process-img"><img src="{{asset('frontend/images/process/4.png')}}" class="img-fluid" alt="medicate"> </div>
                            <div class="pq-process-number"> <span>04</span> </div>
                        </div>
                        <div class="pq-process-step-info">
                            <h5 class="pq-process-title">Emergency Care</h5> <span class="pq-process-sub-title"></span>
                            <div class="pq-process-description">
                                <p>There are many variations of passages Lorem Ipsum available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt-4">
                    <a class="pq-button pq-button-flat" href="make-appoinment.html">
                        <div class="pq-button-block"> <span class="pq-button-text">Get Appointment</span> <i class="ion ion-plus-round"></i> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          our-step end-->
    <!--=================================
          our-blog start-->
    <section class="pq-blog  pq-pb-210">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">our blog</span>
                        <h5 class="pq-section-title">See Our Latest Blog</h5> </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" data-dots="false" data-nav="false" data-desk_num="3" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                        <div class="item">
                            <div class="pq-blog-post pq-style-1 pq-bg-grey">
                                <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/1.jpg')}}" class="img-fluid" alt="images">
                                    <div class="pq-post-date">
                                        <a href="get-the-exercise-limited-mobility.html"> <span>December 5, 2021</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i class="fa fa-comments"></i>
                                                    0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">Get the Exercise Limited Mobility</a></h5>
                                    <div class="pq-blog-info">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-button pq-button-link">
                                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-blog-post pq-style-1 pq-bg-grey">
                                <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/2.jpg')}}" class="img-fluid" alt="images">
                                    <div class="pq-post-date">
                                        <a href="get-the-exercise-limited-mobility.html"> <span>December 5, 2021</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i class="fa fa-comments"></i>
                                                    0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">Transfusion strategy and heart surgery</a></h5>
                                    <div class="pq-blog-info">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-button pq-button-link">
                                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-blog-post pq-style-1 pq-bg-grey">
                                <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/3.jpg')}}" class="img-fluid" alt="images">
                                    <div class="pq-post-date">
                                        <a href="get-the-exercise-limited-mobility.html"> <span>December 5, 2021</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i class="fa fa-comments"></i>
                                                    0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">Latest Equipment for the Heart Treatment</a></h5>
                                    <div class="pq-blog-info">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-button pq-button-link">
                                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-blog-post pq-style-1 pq-bg-grey">
                                <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/4.jpg')}}" class="img-fluid" alt="images">
                                    <div class="pq-post-date">
                                        <a href="get-the-exercise-limited-mobility.html"> <span>December 5, 2021</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i class="fa fa-comments"></i>
                                                    0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">What is Future of Blood Pressure Monitoring?</a></h5>
                                    <div class="pq-blog-info">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-button pq-button-link">
                                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-blog-post pq-style-1 pq-bg-grey">
                                <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/5.jpg')}}" class="img-fluid" alt="images">
                                    <div class="pq-post-date">
                                        <a href="get-the-exercise-limited-mobility.html"> <span>December 5, 2021</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i class="fa fa-comments"></i>
                                                    0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">Goals Setting the people Heart is Healthy</a></h5>
                                    <div class="pq-blog-info">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-button pq-button-link">
                                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-blog-post pq-style-1 pq-bg-grey">
                                <div class="pq-post-media"> <img src="images/blog/6.jpg" class="img-fluid" alt="images">
                                    <div class="pq-post-date">
                                        <a href="get-the-exercise-limited-mobility.html"> <span>December 5, 2021</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i class="fa fa-comments"></i>
                                                    0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">For Examination of kids get Special offers</a></h5>
                                    <div class="pq-blog-info">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-button pq-button-link">
                                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-blog-post pq-style-1 pq-bg-grey">
                                <div class="pq-post-media"> <img src="images/blog/7.jpg" class="img-fluid" alt="images">
                                    <div class="pq-post-date">
                                        <a href="get-the-exercise-limited-mobility.html"> <span>December 5, 2021</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i class="fa fa-comments"></i>
                                                    0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">Heart Failure Treatment: High Blood Pressure</a></h5>
                                    <div class="pq-blog-info">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-button pq-button-link">
                                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-blog-post pq-style-1 pq-bg-grey">
                                <div class="pq-post-media"> <img src="images/blog/8.jpg" class="img-fluid" alt="images">
                                    <div class="pq-post-date">
                                        <a href="get-the-exercise-limited-mobility.html"> <span>December 5, 2021</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i class="fa fa-comments"></i>
                                                    0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">Hard content we decide ourselves a intently</a></h5>
                                    <div class="pq-blog-info">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-button pq-button-link">
                                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-blog-post pq-style-1 pq-bg-grey">
                                <div class="pq-post-media"> <img src="images/blog/9.jpg" class="img-fluid" alt="images">
                                    <div class="pq-post-date">
                                        <a href="get-the-exercise-limited-mobility.html"> <span>December 5, 2021</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i class="fa fa-comments"></i>
                                                    0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">Is Running Really Good for the Heart?</a></h5>
                                    <div class="pq-blog-info">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-button pq-button-link">
                                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          our-blog end-->

@endsection
