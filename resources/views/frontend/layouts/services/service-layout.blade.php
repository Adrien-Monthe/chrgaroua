@extends('frontend.layouts.app')

@section('content')
    <!--=================================
         Banner start-->
    <div class="pq-breadcrumb" style="background-image:url('/frontend/images/breadcrumb.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h2>@yield('page-title')</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale() ) }}"><i class="fas fa-home mr-2"></i>@lang('navbar.nav-home')</a></li>
                                <li class="breadcrumb-item active">@yield('page-title')</li>
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
          all services start-->
    <section class="all-services pq-pb-210">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="pq-widget">
                        <div class="pq-widget pq-widget-port p-0">
                            <div class="menu-service-menu-container">
                                <ul id="menu-service-menu" class="menu">
                                    <li class=" current-menu-item"> <a href="angioplasty-services.html" aria-current="page">Angioplasty Services</a> </li>
                                    <li><a href="cardiology-services.html">Cardiology Services </a> </li>
                                    <li><a href="dental-services.html">Dental Services</a> </li>
                                    <li><a href="endocrinology-services.html">Endocrinology Services</a> </li>
                                    <li> <a href="eye-care-services.html">Eye Care Services</a> </li>
                                    <li> <a href="nurology-service.html">Neurology Services</a> </li>
                                    <li> <a href="orthopaedics-services.html">Orthopaedics Services</a> </li>
                                    <li> <a href="rmi-services.html">RMI Services</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="media_image">
                        <a href="contact-us.html"> <img src="images/call-img.jpg" alt="" class="rounded img-fluid"> </a>
                    </div>
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
