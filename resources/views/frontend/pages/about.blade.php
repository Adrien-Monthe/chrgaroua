@extends('frontend.layouts.app')
@section('page-title', __('about.page-title'))
@section('content')
    <!--=================================
         Banner start-->
    <div class="pq-breadcrumb" style="background-image:url('{{ asset('frontend/images/about/page_banner_4.jpeg')}}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h2>@lang('about.page-title') </h2> </div>
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
                <div class="col-xl-6 pe-xl-5"> <img src="{{ asset('frontend/images/about/page_banner_2.jpg')}}" class="img-fluid wow fadeInLeft" alt="home"> </div>
                <div class="col-xl-6 px-xl-4 mt-4 mt-xl-0">
                   <div class="pq-section pq-style-1 text-left"> {{--<span class="pq-section-sub-title">@lang('about.chrg_text')</span>--}}
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

    <!--Section about start-->
    <section class="about pq-bg-grey pq-dark-bg-side-right">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-xl-5 pb-lg-0 pb-5">
                    <div class="pq-section pq-style-1 text-left mb-4"> <span class="pq-section-sub-title">@lang('about.about-us')</span>
                        <h5 class="pq-section-title">@lang('about.about-us-head')</h5>
                        <p class="pq-section-description">@lang('about.about-us-text')</p>
                    </div>
                    <div class="pq-about-info-box mt-1">
                        <div class="pq-about-info-box-icon">
                            <i aria-hidden="true" class=" flaticon-stethoscope"></i>
                        </div>
                        <div class="pq-about-info-box-info">
                            <h5>@lang('about.our-mission')</h5>
                            <p>@lang('about.our-mission-text')</p>
                        </div>
                    </div>
                    <div class="pq-about-info-box mt-1">
                        <div class="pq-about-info-box-icon">
                            <i aria-hidden="true" class=" flaticon-stethoscope"></i>
                        </div>
                        <div class="pq-about-info-box-info">
                            <h5>@lang('about.our-vision')</h5>
                            <p>@lang('about.our-vision-text')</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-xl-5 pe-lg-3 pq-img-none">
                    <img src="{{ asset('frontend/images/about/image_1.jpeg')}}" class="img-fluid" alt="servicebox">
                    <br>
                    <br>
                    <img src="{{ asset('frontend/images/about/image_2.jpeg')}}" class="img-fluid" alt="servicebox">
                </div>
                <div class="col-xl-2 col-lg-12 col-md-12 py-xl-0 py-5 align-self-center pq-form-counter pq-bg-primary-dark">
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
                </div>
            </div>
        </div>
    </section>
    <!--Section about End-->

    @include('frontend.layouts.services.our-main-services-area')

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
                                    <h5 class="timer" data-to="554" data-speed="5000">554</h5> <span class="pq-counter-prefix"></span> </div>
                                <div class="pq-counter-num-prefix pq-prefix-top">
                                    <h5 class="timer" data-to="554" data-speed="5000">554</h5> <span class="pq-counter-prefix"></span> </div>
                                <p class="pq-counter-description">@lang('about.happy-patients')</p>
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
{{--    @include('frontend.layouts.testimonials-area')--}}
    <!--=================================
          our-client end-->

    <!--Section portfolio start-->
    @include('frontend.layouts.equipments-area')
    <!--Section portfolio End-->

    <!--=================================
          our-blog start-->
    @include('frontend.layouts.blog.blog-area')
    <!--=================================
          our-blog end-->

@endsection
