@extends('frontend.layouts.app')
@section('page-title', __('about.page-title'))
@section('content')
    <!--=================================
         Banner start-->
    <div class="pq-breadcrumb" style="background-image:url('{{ asset('frontend/images/about/page_banner_5.png')}}'); margin: 0px 10px 0px 10px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                           <h3 style="color: white">@lang('about.page-title') </h3>
                        </div>
                        <div class="pq-breadcrumb-container mt-2">
                           {{-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale() ) }}"><i class="fas fa-home mr-2"></i>@lang('navbar.nav-home')</a></li>
                                <li class="breadcrumb-item active">@lang('navbar.nav-about-us') </li>
                            </ol> --}}
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
                <div class="col-xl-6 pe-xl-5"> {{--<img src="{{ asset('frontend/images/about/page_banner_2.jpg')}}" class="img-fluid wow fadeInLeft" alt="home">--}} </div>
                <div class="col-xl-6 px-xl-4 mt-4 mt-xl-0">
                   <div class="pq-section pq-style-1 text-left"> {{--<span class="pq-section-sub-title">@lang('about.chrg_text')</span>--}}
                        <h5 style="text-transform: none;" class="pq-section-title">{{--@lang('about.welcome_to_chrg')--}} Mot du Directeur de l’hôpital </h5>
                        <p class="pq-section-description" style="text-align: justify">{{--@lang('about.welcome_to_chrg_text')--}} Le Centre Hospitalier Régional (CHR) de Garoua est une valeur ajoutée substantielle de l'offre sanitaire de ces dernières années dans la région du Nord, elle est marquée par une infrastructure moderne. La seule façade extérieure renseigne, à suffisance, sur le standing de ce joyau érigé aux normes et standards internationaux en vigueur.</p><p style="text-align: justify">
                            Hôpital de 2è catégorie, d'une capacité de 110 lits et places dont 86 lits d'hospitalisation conventionnelle et 24 places d'hospitalisation de jour, le CHR est bâti sur un site de 5Ha avec près de 14 000 m? de surface d'exploitation. Il dispose d'un ensemble de 14 bâtiments principaux abritant les services administratifs et logistiques, les unités cliniques, les services médicotechniques et les salles </p>
                    </div>
                    {{--<div class="row mt-3">
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

                    </div> --}}

                </div>
            </div>
        </div>
    </section>
    <!--=================================
          about-us end-->

    <!--Section about start-->
    <style>
        .pq-dark-bg-side-right::before {
            content: "";
            position: absolute;
            left: 55%;
            top: 0;
            display: inline-block;
            width: 100%;
            height: 85%;
            background: var(--primary-dark-color);
        }
    </style>
    <section class="about pq-bg-grey pq-dark-bg-side-right" style="">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-xl-5 pb-lg-0 pb-5">
                   {{-- <div class="pq-section pq-style-1 text-left mb-4"> <span class="pq-section-sub-title">@lang('about.about-us')</span>
                        <h5 class="pq-section-title">@lang('about.about-us-head')</h5>
                        <p class="pq-section-description" style="text-align: justify">@lang('about.about-us-text')</p>
                    </div> --}}
                    <div class="pq-about-info-box mt-1">
                        <div class="pq-about-info-box-icon">
                            <i aria-hidden="true" class=" flaticon-stethoscope"></i>
                        </div>
                        <div class="pq-about-info-box-info">
                            <h5>@lang('about.our-mission')</h5>
                            <p style="text-align: justify">@lang('about.our-mission-text')</p>
                        </div>
                    </div>
                   {{-- <div class="pq-about-info-box mt-1">
                        <div class="pq-about-info-box-icon">
                            <i aria-hidden="true" class=" flaticon-stethoscope"></i>
                        </div>
                        <div class="pq-about-info-box-info">
                            <h5>@lang('about.our-vision')</h5>
                            <p style="text-align: justify">@lang('about.our-vision-text')</p>
                        </div>
                    </div> --}}

                </div>
                <div class="col-lg-6 col-md-12 col-xl-5 pe-lg-3 pq-img-none">
                    <img src="{{ asset('frontend/images/home/IMG_8410.JPG')}}" class="img-fluid" alt="servicebox" style="max-height: 250px; object-fit: cover">
                    <br>
                    <br>
                    <img src="{{ asset('frontend/images/home/IMG_8415.JPG')}}" class="img-fluid" alt="servicebox" style="max-height: 250px; object-fit: cover">
                </div>
               {{-- <div class="col-xl-2 col-lg-12 col-md-12 py-xl-0 py-5 align-self-center pq-form-counter pq-bg-primary-dark">
                    <div class="pq-counter pq-style-2">
                        <div class="pq-counter-contain">
                            <div class="pq-counter-info text-center">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="450" data-speed="5000">450</h5> <span class="pq-counter-prefix">+</span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="450" data-speed="5000">450</h5> <span class="pq-counter-prefix">+</span> </div>
                                <p class="pq-counter-description">@lang('about.medical-beds')</p>
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
                                <p class="pq-counter-description">@lang('about.labs')</p>
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
                                <p class="pq-counter-description">@lang('about.digital-imaging-rooms')</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--Section about End-->

{{--    @include('frontend.layouts.services.our-main-services-area')--}}


    <!--=================================
          our-client start-->
{{--    @include('frontend.layouts.testimonials-area')--}}
    <!--=================================
          our-client end-->

    <!--Section portfolio start-->
    @include('frontend.layouts.equipments-area')
    <!--Section portfolio End-->
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>



    <!--=================================
          our-blog start-->
{{--    @include('frontend.layouts.blog.blog-area')--}}
    <!--=================================
          our-blog end-->

@endsection

@section('footer-content')
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
                                    <h5 class="timer" data-to="100" data-speed="5000">100</h5> <span class="pq-counter-prefix"></span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="100" data-speed="5000">100</h5> <span class="pq-counter-prefix"></span> </div>
                                <p class="pq-counter-description">@lang('about.successful-surgery') </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-lg-0  mt-md-0 mt-4  ">
                    <div class="pq-counter pq-style-2 text-center">
                        <div class="pq-counter-contain">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="125" data-speed="5000">125</h5> <span class="pq-counter-prefix"></span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="125" data-speed="5000">125</h5> <span class="pq-counter-prefix"></span> </div>
                                <p class="pq-counter-description">@lang('about.expert-doctors')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0  mt-4 ">
                    <div class="pq-counter pq-style-2 text-center">
                        <div class="pq-counter-contain">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="20" data-speed="5000">20</h5> <span class="pq-counter-prefix"></span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="20" data-speed="5000">20</h5> <span class="pq-counter-prefix"></span> </div>
                                <p class="pq-counter-description">@lang('about.medical-units')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-4 ">
                    <div class="pq-counter pq-style-2 text-center">
                        <div class="pq-counter-contain border-0">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="110" data-speed="5000">110</h5> <span class="pq-counter-prefix"></span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="110" data-speed="5000">110</h5> <span class="pq-counter-prefix"></span> </div>
                                <p class="pq-counter-description">{{--@lang('about.happy-patients')--}} Lits</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          counter end-->
@endsection
