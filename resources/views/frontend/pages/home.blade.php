@extends('frontend.layouts.app')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('frontend/images/logo_chr.jpeg')}}" />
    <meta property="og:description" content=" L'Hôpital Régional de Garoua est une valeur ajoutée substantielle de l'offre sanitaire de ces dernières années dans la région du Nord. " />
    <meta property="og:keywords" content=" Hopital, Garoua, Cameroun, Centre Hospitalier, Soins, Medecine, Cardiologie, Gastrologie, Neurologie, , Foot " />

    <meta property="og:url"content="{{ route('home', app()->getLocale() ) }}" />

    <meta property="og:title" content="Luvnation Football Agency" />

@endsection

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
                    {{--<rs-layer id="slider-24-slide-84-layer-0" data-type="text" data-color="#666666" data-rsp_ch="on"
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
                    </a> --}}
                    <!--
                    -->
                </rs-slide>

                <rs-slide style="position: absolute;" data-key="rs-85" data-title="Slide"
                          data-thumb="{{ asset('frontend/rev/assets/2-51-50x100.jpg')}}" data-in="o:0;" data-out="a:false;">
                    <img src="{{asset('frontend/images/home/image_2.jpeg')}}" alt="" title="2-51.jpg"
                         class="rev-slidebg tp-rs-img" data-no-retina>
                    <!--
                    -->
                   {{-- <rs-layer id="slider-24-slide-85-layer-0" data-type="text" data-color="#666666" data-rsp_ch="on"
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
                    </a> --}}
                    <!--
                    -->
                </rs-slide>

                <rs-slide style="position: absolute;" data-key="rs-86" data-title="Slide"
                          data-thumb="{{ asset('frontend/rev/assets/3-2-50x100.jpg')}}" data-in="o:0;" data-out="a:false;">
                    <img src="{{asset('frontend/images/home/image_3.jpg')}}" alt="" title="3-2"
                         class="rev-slidebg tp-rs-img" data-no-retina>
                    <!--
                    -->
                   {{-- <rs-layer id="slider-24-slide-86-layer-0" data-type="text" data-color="#666666" data-rsp_ch="on"
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
                    </a> --}}
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
                <div class="col-lg-6">
                    <div class="about-us-img">
                        <img src="/frontend/images/blog/12.jpg" class="img-fluid pq-image1 wow fadeInRight " alt="home">
                        <img src="/frontend/images/blog/14.jpg" class="img-fluid pq-image2 wow fadeInRight " alt="home">
                    </div>

                </div>
                <div class="col-lg-6 align-self-center mt-lg-0 mt-4">
                    <div class="pq-section pq-style-1 text-left">
                        <h5 class="pq-section-title">@lang('about.welcome_to_chrg')</h5>
                        <p class="pq-section-description" style="text-align: justify">@lang('about.welcome_to_chrg_text'). Il est marquée par une infrastructure moderne. La seule façade extérieure renseigne, à suffisance, sur le standing de ce joyau érigé aux normes et standards internationaux en vigueur.</p>

                        <p style="text-align: justify">Avec 400 appareils connectés à un système d'alimentation sans interruption
                            (ASI), cette officine est dotée d'équipements et de technologies de standard international en matière d'imagerie médical, mais aussi de l'ensemble des spécialisations médicales et services.</p>
                    </div>
                    {{--<ul class="pq-list-check pq-text-dark mt-3 mb-4">
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Un scanner à 16 coupes</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>La radiologie conventionnelle à numérisation indirecte</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Un système de radio fluoroscopie à numérisation indirecte</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>La mammographie</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Des échographes</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>L'angiographie pour salle d'opération</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Une colonne de laparoscopie</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Un équipement de néonatalogie (couveuses, photothérapie mobile...)</span></li>
                    </ul> --}}
                    <a class="pq-button pq-button-flat mt-3" href="{{ route('about', app()->getLocale() ) }}">
                        <div class="pq-button-block"> <span class="pq-button-text">Plus D'info</span> <i class="ion ion-plus-round"></i> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Section about-us End-->

    <br>
    <br>
    <br>
    <br>



    <section class="medical-skills py-0 pq-bg-img-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 pq-padding-arround pq-bg-primary-dark pq-primary-dark-section-side-left">
                    <div class="pq-section pq-style-1 text-left">

                        <h5 class="pq-section-title pq-text-white">Nos unités Spécialisés</h5>
                        <p class="pq-section-description pq-text-white">Le Centre hospitalier est composé d'un totale de 8 Unité Majeures qui sont:</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <ul class="pq-list-check">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span class="pq-text-white">Les Urgences</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span class="pq-text-white">La chirurgie</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span class="pq-text-white">Ophthalmologie</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span class="pq-text-white">Pédiatrie</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <ul class="pq-list-check">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span class="pq-text-white">Odontosmatologie</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span class="pq-text-white">La Gynécologie</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span class="pq-text-white">L'oto-Rhino-Laryngologie</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span class="pq-text-white">La médécine génerale</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('about', app()->getLocale() ) }}l" class="pq-button pq-button-flat pq-mt-30">
                        <div class="pq-button-block">
                            <span class="pq-button-text">Plus D'info</span>
                            <i class="ion ion-plus-round"></i>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 p-xl-0">
                    <img src="/frontend/images/blog/37.jpg" class="d-xl-none" alt="">
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>




    @include('frontend.layouts.services.our-main-services-area')
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--Section form start-->
    <section class="pq-form">
        <div class="container">
            <div class="row align-items-center pq-bg-primary pq-reveser flex-md-column-reverse flex-lg-row">
                <div class="col-lg-4 text-center"> <img src="{{ asset('frontend/images/home/image_4.png')}}" class="img-fluid pq-form-img-overflow" alt="..."> </div>
                <div class="col-lg-8 mt-5 mt-lg-0 pq-form-pad pq-blue-section-side-right">
                    <div class="pq-section pq-style-1 text-left">
                        <h5 class="pq-section-title pq-text-white">Prenez Un rendez Vous</h5>
                    </div>
                    <form action="#" class="pq-applyform mt-5" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="your-name" id="first-name" class="pq-bg-transparent name-field" placeholder="Votre Noms" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="your-email" id="e-mail" class="pq-bg-transparent e-mail-field" placeholder="Votre Couriel" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="your-doctor-name" id="doctor-name" class="pq-bg-transparent doctor-name-field" placeholder="Noms du Docteur" required>
                            </div>
                            <div class="col-md-6">
                                <select class="pq-bg-transparent doctor-name-field" id="doctor-name" name="your-doctor-name">
                                    <option value="Dr. Monthe">Dr. Monthe</option>
                                    <option value="Dr. Monthe">Dr. Adrien</option>
                                    <option value="Dr. Monthe">Dr. Meudje</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="your-disease" id="disease-name" class="pq-bg-transparent disease-name-field" placeholder="Vos Symptoms" required>
                            </div>
                            <div class="col-md-12">
                                <a class="pq-button pq-button-bg-white form-btn">
                                    <div class="pq-button-block">
                                        <span class="pq-button-text-dark me-0">Envoyez votre message</span>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--Section client Start-->
    <div class="pq-client">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" data-dots="false" data-nav="false" data-desk_num="5" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/partners/1.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/partners/1.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/partners/3.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/partners/3.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/partners/4.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/partners/4.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/partners/2.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/partners/2.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/partners/5.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/partners/5.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/partners/6.svg')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/partners/6.svg')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-clientbox pq-style-1">
                                <a href="#"> <img src="{{ asset('frontend/images/partners/7.png')}}" alt="pq-client-img" class="pq-client-img img-fluid"> <img src="{{ asset('frontend/images/partners/7.png')}}" alt="pq-client-img" class="pq-client-hover-img img-fluid"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section client End-->
    <br>
    <br>
    <br>
    <br>


@endsection

