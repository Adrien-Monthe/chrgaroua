@extends('frontend.layouts.services.service-layout')
@section('image-banner',  asset('frontend/images/blog/28.jpg'))
@section('page-title', __('home-service.page-img-title'))
@section('service-content')

    <div class="pq-menu-content">
        <div class="pq-rhs-img text-center"> <img src="/frontend/images/blog/28.jpg" alt="" class="rounded img-fluid"> </div>
        <div class="pq-section-title-box pq-section-title-style-2 pt-4">
            <h4 class="pq-section-title">@lang('home-service.page-title')</h4>
            <h6>@lang('home-service.page-heading')</h6>
            <br>
            <div class="pq-section-description">
                <p style="text-align: justify">
                    L'unité comme son nom l'indique est chargée de l'accueil, du renseignement, de l'orientation et de la prise des rendez-vous hospitaliers.
                </p>
                <p style="text-align: justify">
                    Installé au rez-de-chaussée, ce service est tenu par une infirmière d'accueil et d'orientation qui effectue le tri permettant ainsi de catégoriser les usagers afin d'apporter une réponse idoine à leurs préoccupations. Pour le patient, la première consigne est l'écoute dans l'isoloir aménagé à cet effet.
                </p>
                <p style="text-align: justify">
                    A la fin de la consultation, c'est encore à ce service qu'il revient d'orienter le patient pour une prise en charge adéquate. Il renseigne également sur les horaires de retrait des résultats des examens, le prochain rendez-vous, la disponibilité des spécialistes etc...
                </p>

            </div>
        </div>

    </div>

@endsection
