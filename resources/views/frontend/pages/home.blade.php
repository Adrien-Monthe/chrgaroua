@extends('frontend.layouts.app')
@section('page-title', __('home.page-title'))
@section('content')

    <style>
        #overlay {
            position: fixed; /* Sit on top of the page content */
            display: none; /* Hidden by default */
            width: 100%; /* Full width (cover the whole page) */
            height: 100%; /* Full height (cover the whole page) */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5); /* Black background with opacity */
            z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
            cursor: pointer; /* Add a pointer on hover */
        }
    </style>

    <!-- START Home 1 REVOLUTION SLIDER 6.5.19



  ================================= -->
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_24_1_wrapper" data-alias="home-1" data-source="gallery"
                    style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_24_1" data-version="6.5.19">
            <rs-slides >

                <rs-slide style="position: absolute;" data-key="rs-84" data-title="Slide"
                          data-thumb="{{asset('frontend/rev/assets/1-51-50x100.jpg')}}" data-anim="ms:600;" data-in="o:0;"
                          data-out="a:false;">
                    <img src="{{asset('frontend/images/home/image_1.jpeg')}}" alt="" title="1-51.jpg"
                         class="rev-slidebg tp-rs-img" data-no-retina>
                    <!--
                    -->
                    <rs-layer id="slider-24-slide-84-layer-0" data-type="text" data-color="#666666" data-rsp_ch="on"
                              data-xy="xo:30px;y:m;yo:2px,17px,29px,17px;"
                              data-text="w:normal;s:16,16,14,12;l:32,24,22,20;fw:600;"
                              data-dim="w:654px,565px,436px,268px;h:auto,auto,45px,27px;" data-vbility="t,t,t,f"
                              data-frame_0="x:50,39,22px,13px;y:0,0,0px,0px;"
                              data-frame_1="x:0,0,0px,0px;y:0,0,0px,0px;st:1100;sp:1000;sR:1100;"
                              data-frame_999="o:0;st:w;sR:6900;" style="z-index:11;font-family:'Quicksand';">It is a long
                        established fact that a reader will be distracted by the readable content of a page when looking
                        at its layout.
                    </rs-layer>

                    <rs-layer id="slider-24-slide-84-layer-2" data-type="text" data-color="#18100f" data-rsp_ch="on"
                              data-xy="xo:30px,30px,30px,31px;y:m;yo:-105px,-75px,-50px,-30px;"
                              data-text="w:normal;s:64,48,42,22;l:72,56,50,30;fw:600;"
                              data-border="boc:#14457b;bow:1px,1px,1px,1px;" data-frame_0="x:50,39,29,17;"
                              data-frame_1="st:900;sp:1000;sR:900;" data-frame_999="o:0;st:w;sR:7100;"
                              style="z-index:10;font-family:'Quicksand';text-transform:capitalize;">Genuine commitment<br>
                        to your health
                    </rs-layer>
                    <!--
                    -->

                    <!--
                    --><a id="slider-24-slide-84-layer-6" class="rs-layer pq-button rev-btn"
                      href="about-us.html" target="_self" data-type="button"
                      data-rsp_ch="on" data-xy="xo:27px,30px,30px,30px;y:m;yo:93px,97px,104px,37px;"
                      data-text="w:normal;s:14,16,16,12;l:22,24,30,20;fw:600;a:left,left,center,center;"
                      data-dim="minh:0px,none,none,none;"
                      data-padding="t:15,15,10,10;r:30,30,25,20;b:15,15,10,10;l:30,30,25,20;"
                      data-border="bor:3px,3px,3px,3px;" data-frame_0="x:50,39,29,17;"
                      data-frame_1="st:1300;sp:1000;sR:1300;" data-frame_999="o:0;st:w;sR:6700;"
                      data-frame_hover="bgc:#14457b;bor:3px,3px,3px,3px;bos:solid;sp:100;bri:120%;"
                      style="z-index:12;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"><span
                            class="text">Read More</span><i class="ion ion-plus-round"></i>
                    </a>
                    <!--
                    -->
                </rs-slide>

                <rs-slide style="position: absolute;" data-key="rs-85" data-title="Slide"
                          data-thumb="{{ asset('frontend/rev/assets/2-51-50x100.jpg')}}" data-in="o:0;" data-out="a:false;">
                    <img src="{{asset('frontend/images/home/image_2.jpeg')}}" alt="" title="2-51.jpg"
                         class="rev-slidebg tp-rs-img" data-no-retina>
                    <!--
                    -->
                    <rs-layer id="slider-24-slide-85-layer-0" data-type="text" data-color="#666666" data-rsp_ch="on"
                              data-xy="xo:30px;y:m;yo:2px,17px,29px,17px;"
                              data-text="w:normal;s:16,16,14,12;l:32,24,22,20;fw:600;"
                              data-dim="w:654px,565px,436px,268px;h:auto,auto,45px,27px;" data-vbility="t,t,t,f"
                              data-frame_0="x:50,39,22px,13px;y:0,0,0px,0px;"
                              data-frame_1="x:0,0,0px,0px;y:0,0,0px,0px;st:1700;sp:1000;" data-frame_999="o:0;st:w;sR:6370;"
                              style="z-index:11;font-family:'Quicksand';">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.
                    </rs-layer>
                    <!--
                    -->
                    <rs-layer id="slider-24-slide-85-layer-1" data-type="text" data-color="#2490eb" data-rsp_ch="on"
                              data-xy="xo:41px,38px,38px,37px;y:m;yo:-197px,-154px,-121px,-75px;"
                              data-text="w:normal;s:14,14,14,13;l:22,22,26,21;fw:600;" data-frame_0="x:50,39,29,17;"
                              data-frame_1="st:1100;sp:1000;sR:1100;" data-frame_999="o:0;st:w;sR:6900;"
                              style="z-index:9;font-family:'Quicksand';text-transform:uppercase;">Great Experience In Bulding
                    </rs-layer>
                    <!--
                    -->
                    <rs-layer id="slider-24-slide-85-layer-2" data-type="text" data-color="#18100f" data-rsp_ch="on"
                              data-xy="xo:30px,30px,30px,31px;y:m;yo:-105px,-75px,-50px,-30px;"
                              data-text="w:normal;s:64,48,42,22;l:72,56,50,30;fw:600;"
                              data-border="boc:#14457b;bow:1px,1px,1px,1px;" data-frame_0="x:50,39,29,17;"
                              data-frame_1="st:1400;sp:1000;sR:1400;" data-frame_999="o:0;st:w;sR:6600;"
                              style="z-index:10;font-family:'Quicksand';text-transform:capitalize;">Orthopedic Treatment
                        <br>
                        Accute Pain
                    </rs-layer>
                    <!--
                    -->
                    <rs-layer id="slider-24-slide-85-layer-4" data-type="shape" data-rsp_ch="on"
                              data-xy="xo:30px;yo:202px,155px,114px,86px;" data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                              data-dim="w:233px,227px,227px,212px;h:30px,30px,30px,25px;" data-border="bor:3px,3px,3px,3px;"
                              data-frame_0="x:50,39,29,17;" data-frame_1="st:1100;sp:1000;" data-frame_999="o:0;st:w;"
                              style="z-index:8;background-color:#d3e9fb;">
                    </rs-layer>
                    <!--
                    --><a id="slider-24-slide-85-layer-6" class="rs-layer pq-button rev-btn"
                      href="about-us.html" target="_self" data-type="button"
                      data-rsp_ch="on" data-xy="xo:27px,30px,30px,30px;y:m;yo:93px,97px,104px,37px;"
                      data-text="w:normal;s:14,16,16,12;l:22,24,30,20;fw:600;a:left,left,center,center;"
                      data-dim="minh:0px,none,none,none;"
                      data-padding="t:15,15,10,10;r:30,30,25,20;b:15,15,10,10;l:30,30,25,20;"
                      data-border="bor:3px,3px,3px,3px;" data-frame_0="x:50,39,29,17;"
                      data-frame_1="st:1900;sp:1000;sR:1800;" data-frame_999="o:0;st:w;sR:6200;"
                      data-frame_hover="bgc:#14457b;bor:3px,3px,3px,3px;bos:solid;sp:100;bri:120%;"
                      style="z-index:12;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"><span
                            class="text">Read More</span><i class="ion ion-plus-round"></i>
                    </a>
                    <!--
                    -->
                </rs-slide>

                <rs-slide style="position: absolute;" data-key="rs-86" data-title="Slide"
                          data-thumb="{{ asset('frontend/rev/assets/3-2-50x100.jpg')}}" data-in="o:0;" data-out="a:false;">
                    <img src="{{asset('frontend/images/home/image_3.jpg')}}" alt="" title="3-2"
                         class="rev-slidebg tp-rs-img" data-no-retina>
                    <!--
                    -->
                    <rs-layer id="slider-24-slide-86-layer-0" data-type="text" data-color="#666666" data-rsp_ch="on"
                              data-xy="xo:30px;y:m;yo:2px,17px,29px,17px;"
                              data-text="w:normal;s:16,16,14,12;l:32,24,22,20;fw:600;"
                              data-dim="w:654px,565px,436px,268px;h:auto,auto,45px,27px;" data-vbility="t,t,t,f"
                              data-frame_0="x:50,39,22px,13px;y:0,0,0px,0px;"
                              data-frame_1="x:0,0,0px,0px;y:0,0,0px,0px;st:1700;sp:1000;" data-frame_999="o:0;st:w;sR:6370;"
                              style="z-index:11;font-family:'Quicksand';">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.
                    </rs-layer>
                    <!--
                    -->
                    <rs-layer id="slider-24-slide-86-layer-1" data-type="text" data-color="#2490eb" data-rsp_ch="on"
                              data-xy="xo:41px,38px,38px,37px;y:m;yo:-197px,-154px,-121px,-81px;"
                              data-text="w:normal;s:14,14,14,13;l:22,22,26,21;fw:600;" data-frame_0="x:50,39,29,17;"
                              data-frame_1="st:1100;sp:1000;sR:1100;" data-frame_999="o:0;st:w;sR:6900;"
                              style="z-index:9;font-family:'Quicksand';text-transform:uppercase;">higher level of care
                    </rs-layer>
                    <!--
                    -->
                    <rs-layer id="slider-24-slide-86-layer-2" data-type="text" data-color="#18100f" data-rsp_ch="on"
                              data-xy="xo:30px,30px,30px,31px;y:m;yo:-105px,-75px,-50px,-30px;"
                              data-text="w:normal;s:64,48,42,22;l:72,56,50,30;fw:600;"
                              data-border="boc:#14457b;bow:1px,1px,1px,1px;" data-frame_0="x:50,39,29,17;"
                              data-frame_1="st:1400;sp:1000;sR:1400;" data-frame_999="o:0;st:w;sR:6600;"
                              style="z-index:10;font-family:'Quicksand';text-transform:capitalize;">Setting standards<br>
                        in physiotherapy
                    </rs-layer>
                    <!--
                    -->
                    <rs-layer id="slider-24-slide-86-layer-4" data-type="shape" data-rsp_ch="on"
                              data-xy="xo:30px;yo:202px,155px,114px,81px;" data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                              data-dim="w:178px,171px,172px,158px;h:30px,30px,30px,25px;" data-border="bor:3px,3px,3px,3px;"
                              data-frame_0="x:50,39,29,17;" data-frame_1="st:1100;sp:1000;" data-frame_999="o:0;st:w;"
                              style="z-index:8;background-color:#d3e9fb;">
                    </rs-layer>
                    <!--
                    --><a id="slider-24-slide-86-layer-6" class="rs-layer pq-button rev-btn"
                      href="about-us.html" target="_self" data-type="button"
                      data-rsp_ch="on" data-xy="xo:27px,30px,30px,30px;y:m;yo:93px,97px,104px,37px;"
                      data-text="w:normal;s:14,16,16,12;l:22,24,30,20;fw:600;a:left,left,center,center;"
                      data-dim="minh:0px,none,none,none;"
                      data-padding="t:15,15,10,10;r:30,30,25,20;b:15,15,10,10;l:30,30,25,20;"
                      data-border="bor:3px,3px,3px,3px;" data-frame_0="x:50,39,29,17;"
                      data-frame_1="st:1900;sp:1000;sR:1800;" data-frame_999="o:0;st:w;sR:6200;"
                      data-frame_hover="bgc:#14457b;bor:3px,3px,3px,3px;bos:solid;sp:100;bri:120%;"
                      style="z-index:12;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"><span
                            class="text">Read More</span><i class="ion ion-plus-round"></i>
                    </a>
                    <!--
                    -->
                </rs-slide>

            </rs-slides>
            <rs-static-layers>
                <!--
                -->
            </rs-static-layers>
        </rs-module>
    </rs-module-wrap>

    <!--=================================
          END REVOLUTION SLIDER
          ================================= -->

    <section class="servicebox p-lg-0 pb-0 pq-bg-grey ">
        <div class="container pq-mt-60">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-xl-4">
                    <div class="pq-info-box pq-style-1">
                        <div class="pq-info-box-right-icon"> <i class=" flaticon-medical-doctor"></i> </div>
                        <div class="pq-info-box-icon"><i class=" flaticon-medical-doctor"></i></div>
                        <h5 class="pq-info-title">@lang('home.emergency-cases')</h5>
                        <p class="pq-infobox-description">@lang('home.emergency-cases-text') </p>
                        <div class="pq-info-call"> <i class="fas fa-phone-alt"></i>
                            <h4 class="cpq-call-number">1510</h4> </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-4 pt-md-0 pt-4">
                    <div class="pq-info-box pq-style-2">
                        <div class="pq-info-box-right-icon"> <i class=" flaticon-doctor"></i> </div>
                        <div class="pq-info-box-icon"><i class=" flaticon-doctor"></i></div>
                        <h5 class="pq-info-title">@lang('home.doctors-timetable')</h5>
                        <p class="pq-infobox-description"> @lang('home.doctors-timetable-text') </p>
                        <a class="pq-button pq-button-flat" href="#">
                            <div class="pq-button-block"> <span class="pq-button-text">Contact</span> <i class="ion ion-plus-round"></i> </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-4 pt-xl-0 pt-4">
                    <div class="pq-info-box pq-style-3">
                        <div class="pq-info-box-right-icon"> <i class=" flaticon-care"></i> </div>
                        <div class="pq-info-box-icon"><i class=" flaticon-medical-history"></i></div>
                        <h5 class="pq-info-title">@lang('home.opening-hours')</h5>
                        <div class="pq-info-hours">
                            <div class="pq-info-hours-row">
                                <ul class="pq-list-info">
                                    <li>
                                        <div class="pq-info-hours-title"> Lundi - Vendredi </div>
                                        <div class="pq-info-hours-content"> 8:00 - 19:00 </div>
                                    </li>
                                    <li>
                                        <div class="pq-info-hours-title"> Samedi </div>
                                        <div class="pq-info-hours-content"> 06:00 - 17:00 </div>
                                    </li>
                                    <li>
                                        <div class="pq-info-hours-title"> Dimanche </div>
                                        <div class="pq-info-hours-content"> 09:00 - 16:00 </div>
                                    </li>
                                    <li>
                                        <div class="pq-info-hours-title"> Urgences </div>
                                        <div class="pq-info-hours-content"> 24HRS 7Jours </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section End-->

    <!--Section about-us start-->
    <section class="pq-bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6"> <img src="{{ asset('frontend/images/About-us/1.jpg')}}" class="img-fluid pe-xl-5 wow fadeInLeft" alt="home"> </div>
                <div class="col-lg-6 align-self-center mt-lg-0 mt-4">
                    <div class="pq-section pq-style-1 text-left"> <span class="pq-section-sub-title">Centre Hospitalier Regional de Garoua</span>
                        <h5 class="pq-section-title">The Heart and Science of Medicate test</h5>
                        <p class="pq-section-description">It is a long established fact that a reader will be distracted by at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <ul class="pq-list-check pq-text-dark mt-3 mb-4">
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Comprehensive Inpatient Services</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Medical And Surgical Services</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Outpatient Services</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Medicine & instrument</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Specialised Support Service</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Instant Operation & Appointment</span></li>
                    </ul>
                    <a class="pq-button pq-button-flat mt-3" href="about-us.html">
                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Section about-us End-->
    <!--Section service start-->
    <section class="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">FACILITIES WE HAVE</span>
                        <h5 class="pq-section-title">What Facilities We Provided</h5> </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-4">
                    <div class="pq-service-box pq-style-1">
                        <div class="pq-service-block">
                            <div class="pq-service-img"><img src="{{ asset('frontend/images/services/1.jpg')}}" class="img-fluid" alt="servicebox"></div>
                            <div class="pq-service-box-info">
                                <div class="pq-info-text"> <span class="pq-service-sub-title">Medical Surgery </span>
                                    <a href="eye-care-services.html">
                                        <h5 class="pq-service-title">Eye Care Services</h5> </a>
                                </div>
                                <div class="pq-service-icon"> <i class=" flaticon-laboratory"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-4 pt-md-0 pt-4">
                    <div class="pq-service-box pq-style-1">
                        <div class="pq-service-block">
                            <div class="pq-service-img"><img src="{{ asset('frontend/images/services/2.jpg')}}" class="img-fluid" alt="servicebox"></div>
                            <div class="pq-service-box-info">
                                <div class="pq-info-text"> <span class="pq-service-sub-title">Medical Therapy </span>
                                    <a href="cardiology-services.html">
                                        <h5 class="pq-service-title">Cardiology Services</h5> </a>
                                </div>
                                <div class="pq-service-icon"><i class=" flaticon-doctor-1"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-4 pt-4 pt-xl-0">
                    <div class="pq-service-box pq-style-1">
                        <div class="pq-service-block">
                            <div class="pq-service-img"><img src="{{ asset('frontend/images/services/3.jpg')}}" class="img-fluid" alt="servicebox"></div>
                            <div class="pq-service-box-info">
                                <div class="pq-info-text"> <span class="pq-service-sub-title">Medical Pediatrics</span>
                                    <a href="dental-services.html">
                                        <h5 class="pq-service-title">Dental Services</h5>
                                    </a>
                                </div>
                                <div class="pq-service-icon"><i class=" flaticon-medical-prescription"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section service End-->
    <!--Section about start-->
    <section class="about pq-bg-grey pq-dark-bg-side-right">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-xl-5 pb-lg-0 pb-5">
                    <div class="pq-section pq-style-1 text-left mb-4"> <span class="pq-section-sub-title">About Us</span>
                        <h5 class="pq-section-title">Joining Hands with Techno Easement</h5>
                        <p class="pq-section-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text&nbsp;</p>
                    </div>
                    <div class="pq-about-info-box mt-1">
                        <div class="pq-about-info-box-icon">
                            <i aria-hidden="true" class=" flaticon-stethoscope"></i>
                        </div>
                        <div class="pq-about-info-box-info">
                            <h5>infection prevention</h5>
                            <p>There are many variations of passages of LoremIpsum available majority.</p>
                        </div>
                    </div>
                    <a class="pq-button pq-button-flat mt-4" href="about-us.html">
                        <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12 col-xl-5 pe-lg-3 pq-img-none">
                    <img src="{{('frontend/images/1.jpg')}}" class="img-fluid" alt="servicebox">
                </div>
                <div class="col-xl-2 col-lg-12 col-md-12 py-xl-0 py-5 align-self-center pq-form-counter pq-bg-primary-dark">
                    <div class="pq-counter pq-style-2">
                        <div class="pq-counter-contain">
                            <div class="pq-counter-info text-center">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="450" data-speed="5000">450</h5> <span class="pq-counter-prefix">+</span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="450" data-speed="5000">450</h5> <span class="pq-counter-prefix">+</span> </div>
                                <p class="pq-counter-description">HAPPY PATIENTS</p>
                            </div>
                        </div>
                    </div>
                    <div class="pq-counter pq-style-2">
                        <div class="pq-counter-contain">
                            <div class="pq-counter-info text-center">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="100" data-speed="5000">100</h5> <span class="pq-counter-prefix">+</span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="100" data-speed="5000">100</h5> <span class="pq-counter-prefix">+</span> </div>
                                <p class="pq-counter-description">SAVED HEARTS</p>
                            </div>
                        </div>
                    </div>
                    <div class="pq-counter pq-style-2">
                        <div class="pq-counter-contain">
                            <div class="pq-counter-info text-center">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="59" data-speed="5000">59</h5> <span class="pq-counter-prefix">+</span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="59" data-speed="5000">59</h5> <span class="pq-counter-prefix">+</span> </div>
                                <p class="pq-counter-description">EXPERT DOCTORS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section about End-->
    <!--Section service start-->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">Our Services</span>
                        <h5 class="pq-section-title">We provide  various Directions</h5> </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pq-lg-border-bottom pq-lg-border-right">
                    <div class="pq-fancy-box pq-style-1 text-center">
                        <div class="pq-fancy-box-icon"><i class=" flaticon-doctor-1"></i></div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Angioplasty</h5>
                            <p class="pq-fancybox-description">There are many variations of pas of Lorem Ipsum availab. </p>
                            <a class="pq-button pq-button-link" href="angioplasty-services.html">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pq-lg-border-bottom pq-lg-border-right">
                    <div class="pq-fancy-box pq-style-1 text-center">
                        <div class="pq-fancy-box-icon"><i class=" flaticon-care"></i></div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Cardiology</h5>
                            <p class="pq-fancybox-description">There are many variations of pas of Lorem Ipsum availab. </p>
                            <a class="pq-button pq-button-link" href="cardiology-services.html">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pq-lg-border-bottom pq-lg-border-right">
                    <div class="pq-fancy-box pq-style-1 text-center">
                        <div class="pq-fancy-box-icon"><i class=" flaticon-examination"></i></div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Dental</h5>
                            <p class="pq-fancybox-description">There are many variations of pas of Lorem Ipsum availab. </p>
                            <a class="pq-button pq-button-link" href="dental-services.html">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pq-lg-border-bottom pq-lg-border-right">
                    <div class="pq-fancy-box pq-style-1 text-center">
                        <div class="pq-fancy-box-icon"><i class=" flaticon-syringe"></i></div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Endocrinology</h5>
                            <p class="pq-fancybox-description">There are many variations of pas of Lorem Ipsum availab. </p>
                            <a class="pq-button pq-button-link" href="endocrinology-services.html">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pq-lg-border-right pq-lg-border-bottom">
                    <div class="pq-fancy-box pq-style-1 text-center">
                        <div class="pq-fancy-box-icon"><i class=" flaticon-medical"></i></div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Eye Care</h5>
                            <p class="pq-fancybox-description">There are many variations of pas of Lorem Ipsum availab. </p>
                            <a class="pq-button pq-button-link" href="eye-care-services.html">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pq-lg-border-bottom pq-lg-border-right">
                    <div class="pq-fancy-box pq-style-1 text-center">
                        <div class="pq-fancy-box-icon"><i class=" flaticon-heartbeat"></i></div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Neurology</h5>
                            <p class="pq-fancybox-description">There are many variations of pas of Lorem Ipsum availab. </p>
                            <a class="pq-button pq-button-link" href="nurology-service.html">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pq-lg-border-right pq-lg-border-bottom">
                    <div class="pq-fancy-box pq-style-1 text-center">
                        <div class="pq-fancy-box-icon"><i class=" flaticon-x-ray"></i></div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Orthopaedics</h5>
                            <p class="pq-fancybox-description">There are many variations of pas of Lorem Ipsum availab. </p>
                            <a class="pq-button pq-button-link" href="orthopaedics-services.html">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pq-lg-border-right pq-lg-border-bottom">
                    <div class="pq-fancy-box pq-style-1 text-center">
                        <div class="pq-fancy-box-icon"><i class=" flaticon-drugs"></i></div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">RMI</h5>
                            <p class="pq-fancybox-description">There are many variations of pas of Lorem Ipsum availab. </p>
                            <a class="pq-button pq-button-link" href="rmi-services.html">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section service End-->

    <!--Section portfolio start-->
    @include('frontend.layouts.equipments-area')
    <!--Section portfolio End-->

    <!--Section team start-->
    <section class="team pq-bg-grey pq-team-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">Our Team</span>
                        <h5 class="pq-section-title">Meet Our Heart Specialists</h5> </div>
                </div>
                <div class="col-lg-12 pb-dot-mt-0">
                    <div class="owl-carousel owl-theme " data-dots="true" data-nav="false" data-desk_num="3" data-lap_num="3" data-tab_num="2" data-mob_num="2" data-mob_sm="1" data-autoplay="false" data-loop="false" data-margin="30">
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img"> <img src="{{ asset('frontend/images/team/1.jpg')}}" class="img-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="#" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="#" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html">
                                            Naidan Smith                      </a>
                                    </h5> <span class="pq-team-designation">Outpatient Surgery</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img"> <img src="{{ asset('frontend/images/team/2.jpg')}}" class="img-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="#" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="#" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html">
                                            Danial Frankie                     </a>
                                    </h5> <span class="pq-team-designation">Outpatient Surgery</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img"> <img src="{{ asset('frontend/images/team/3.jpg')}}" class="img-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="#" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="#" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html">
                                            Alex Jhon                    </a>
                                    </h5> <span class="pq-team-designation">Outpatient Surgery</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img"> <img src="{{ asset('frontend/images/team/4.jpg')}}" class="img-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="#" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="#" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html">
                                            Rihana Roy               </a>
                                    </h5> <span class="pq-team-designation">Outpatient Surgery</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img"> <img src="{{ asset('frontend/images/team/5.jpg')}}" class="ig-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="#" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="#" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html">
                                            Jason Roy                      </a>
                                    </h5> <span class="pq-team-designation">Outpatient Surgery</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section team End-->
    <!--Section form start-->
    <section class="pq-form">
        <div class="container">
            <div class="row align-items-center pq-bg-primary pq-reveser flex-md-column-reverse flex-lg-row">
                <div class="col-lg-4 text-center"> <img src="{{ asset('frontend/images/2.png')}}" class="img-fluid pq-form-img-overflow" alt="..."> </div>
                <div class="col-lg-8 mt-5 mt-lg-0 pq-form-pad pq-blue-section-side-right">
                    <div class="pq-section pq-style-1 text-left"> <span class="pq-section-sub-title">Appointment</span>
                        <h5 class="pq-section-title pq-text-white">Apply for free treatments</h5>
                    </div>
                    <form action="#" class="pq-applyform mt-5" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="your-name" id="first-name" class="pq-bg-transparent name-field" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="your-email" id="e-mail" class="pq-bg-transparent e-mail-field" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="your-doctor-name" id="doctor-name" class="pq-bg-transparent doctor-name-field" placeholder="Your Doctor Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="your-disease" id="disease-name" class="pq-bg-transparent disease-name-field" placeholder="Your Disease Name" required>
                            </div>
                            <div class="col-md-12">
                                <a class="pq-button pq-button-bg-white form-btn">
                                    <div class="pq-button-block">
                                        <span class="pq-button-text-dark me-0">send message</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Section form End-->
    <!--Section testimonial Start-->

    @include('frontend.layouts.home-testimonials-area')
    <!--Section testimonial End-->
    <!--Section client Start-->
    <div class="pq-client">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" data-dots="false" data-nav="false" data-desk_num="5" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/client/1.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/client/1.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/client/2.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/client/2.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/client/3.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/client/3.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/client/4.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/client/4.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/client/5.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/client/5.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/client/1.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/client/1.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/client/2.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/client/2.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section client End-->
    <!--Section blog Start-->
    @include('frontend.layouts.blog.blog-area')
    <!--Section blog End-->
@endsection
