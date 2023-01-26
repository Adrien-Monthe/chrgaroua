@extends('frontend.layouts.app')
@section('page-title', __('appointment.page-title'))
@section('content')

    <!--=================================
         Banner start-->
    <div class="pq-breadcrumb" style="background-image:url('{{ asset("frontend/images/blog/16.jpg")}}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h2>@lang('navbar.nav-appointment') </h2> </div>
                        {{-- <div class="pq-breadcrumb-container mt-2">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale() ) }}"><i class="fas fa-home mr-2"></i>@lang('navbar.nav-home') </a></li>
                                 <li class="breadcrumb-item active">@lang('navbar.nav-contact')</li>
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

    <!--Estimate Start-->
    <section class="pq-bg-grey pq-bg-img-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="pq-section pq-style-1 text-left">

                        <h5 class="pq-section-title">Vous êtes en ligne, Nous aussi</h5>
                        <p class="pq-section-description">Prenez un rendez-vous pour une consultation avec un de nos médécins depuis chez vous. C'est simple et rapide alors n'hésitez pas.
                        </p>

                    </div>

                    <div class="pq-progressbar-box pq-progressbar-style-1" data-h="5">
                        <div class="pq-progressbar-content">
                            <span class="progress-title"> Satisfaction Patient</span>
                            <span class="progress-value">85% </span>
                            <div class="pq-progress-bar">
                                <span data-width="85" class="show-progress"></span>
                            </div>
                        </div>
                        <div class="pq-progressbar-content">
                            <span class="progress-title">Expertise</span>
                            <span class="progress-value">87% </span>
                            <div class="pq-progress-bar">
                                <span data-width="87" class="show-progress"></span>
                            </div>
                        </div>
                        <div class="pq-progressbar-content">
                            <span class="progress-title">Diagnostic Précis</span>
                            <span class="progress-value">95% </span>
                            <div class="pq-progress-bar">
                                <span data-width="95" class="show-progress"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 ps-xl-5">

                    <form action="#" class="pq-applyform pq-cost-calculator">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-6">

                                    <input type="text" name="name" style="background-color: var(--grey-color);" id="name" placeholder="Entrez votre noms">
                                </div>

                                <div class="col-lg-6">

                                    <input type="text" name="phonenumber" style="background-color: var(--grey-color);" id="phonenumber" placeholder="Numéro de Téléphone">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-6">

                                    <span class="pq-cost-title">Unité </span>
                                    <select class="treatment form-select" name="medical-unit" id="medical-unit">
                                        <option value="cardiologie">Cardiologie</option>
                                        <option value="gastrolgie">Gastrologie</option>
                                        <option value="neurologie">Neurologie</option>
                                        <option value="urgences">Urgences</option>
                                        <option value="chirurgie">Chirurgies</option>
                                        <option value="L'ophthalmologie">L'ophthalmologie</option>
                                        <option value="L'odontostomatologie">L'odontostomatologie</option>
                                        <option value="L'oto-rhino-laryngologie">L'oto-rhino-laryngologie</option>
                                        <option value="La pediatrie">La Pédiatrie</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <span class="pq-cost-title">Docteur</span>
                                    <select class="treatment-plan form-select" name="doctor-name" id="doctor-name">
                                        <option value="Dr. Joel" data-plan="700">Dr. Joel</option>
                                        <option value="Dr. Joel" data-plan="700">Dr. Emma</option>
                                        <option value="Dr. Steve" data-plan="2000">Dr. Steve</option>
                                        <option value="Dr. Adrien" data-plan="2000">Dr. Adrien</option>
                                        <option value="Dr. Berend" data-plan="2000">Dr. Berend</option>
                                        <option value="Autres" data-plan="2000">Autres</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="pq-cost-title">Horraire</span>
                                    <select class="location form-select" name="location" id="location">
                                        <option value="morning" >En Matinée</option>
                                        <option value="midday" >Á Midi</option>
                                        <option value="evening" >En Soirée</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                            <textarea name="your-message" id="message" cols="40" rows="10" placeholder="Message"
                                                      required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <a class="pq-button form-btn">
                                    <div class="pq-button-block">
                                        <span class="pq-button-text me-0">@lang('contact.send-message')</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!--Estimate End-->
@endsection
