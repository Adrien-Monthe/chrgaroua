@extends('frontend.layouts.app')

@section('content')
    <!--=================================
         Banner start-->
    <div class="pq-breadcrumb" style="background-image:url(@yield('image-banner')); margin: auto 10px auto 10px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h2 style="color: var(--primary-color)">@yield('page-title')</h2> </div>
                        {{--<div class="pq-breadcrumb-container mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale() ) }}"><i class="fas fa-home mr-2"></i>@lang('navbar.nav-home')</a></li>
                                <li class="breadcrumb-item active">@yield('page-title')</li>
                            </ol>
                        </div> --}}
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
          all services start-->
    <section class="all-services pq-pb-210">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="pq-widget">
                        <div class="pq-widget pq-widget-port p-0">
                            <div class="menu-service-menu-container">
                                <ul id="menu-service-menu" class="menu">
                                    <li class="{{Route::currentRouteName() === 'service_gynecology' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_gynecology', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_gynecology' ? 'page' : ''}}" >@lang('navbar.nav-gynecology') </a> </li>
                                    <li class="{{Route::currentRouteName() === 'service_imaging' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_imaging', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_imaging' ? 'page' : ''}}" >@lang('navbar.nav-digital-imaging') </a> </li>
                                    <li class="{{Route::currentRouteName() === 'service_centralised_monitoring' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_centralised_monitoring', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_centralised_monitoring' ? 'page' : ''}}" >@lang('navbar.nav-centralised-monitoring') </a> </li>
                                    <li class="{{Route::currentRouteName() === 'service_reanimation' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_reanimation', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_reanimation' ? 'page' : ''}}" >@lang('navbar.nav-reanimation') </a> </li>
                                    <li class="{{Route::currentRouteName() === 'service_oto_rhino_laryngology' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_oto_rhino_laryngology', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_oto_rhino_laryngology' ? 'page' : ''}}" >@lang('navbar.nav-oto-rhino-laryngology') </a> </li>
                                    <li class="{{Route::currentRouteName() === 'service_laboratory' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_laboratory', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_oto_rhino_laboratory' ? 'page' : ''}}" >@lang('navbar.nav-laboratory') </a> </li>
                                    <li class="{{Route::currentRouteName() === 'service_surgery_room' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_surgery_room', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_surgery_room' ? 'page' : ''}}" >@lang('navbar.nav-surgery-room') </a> </li>
                                    <li class="{{Route::currentRouteName() === 'service_emergency' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_emergency', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_emergency' ? 'page' : ''}}" >@lang('navbar.nav-emergency') </a> </li>
                                    <li class="{{Route::currentRouteName() === 'service_home' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_home', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_home' ? 'page' : ''}}" >@lang('navbar.nav-hospital-home') </a> </li>
                                    <li class="{{Route::currentRouteName() === 'service_odontosmatology' ? 'current-menu-item' : 'd-none'}}"><a href="{{ route('service_odontosmatology', app()->getLocale() ) }}" aria-current="{{Route::currentRouteName() === 'service_odontosmatology' ? 'page' : ''}}" >@lang('navbar.nav-odontosmatology') </a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    {{--<div id="media_image">
                        <a href="contact-us.html"> <img src="/frontend/images/call-img.jpg" alt="" class="rounded img-fluid"> </a>
                    </div> --}}
                </div>

                <div class="col-lg-8 ps-3 mt-4 mt-lg-0">

                    @yield('service-content')



                </div>
            </div>
        </div>
    </section>
    <!--=================================
          all services end-->
@endsection
