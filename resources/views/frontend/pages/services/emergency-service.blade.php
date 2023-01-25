@extends('frontend.layouts.services.service-layout')
@section('image-banner',  asset('frontend/images/blog/36.jpeg'))
@section('page-title', __('emergency-service.page-img-title'))
@section('service-content')

    <div class="pq-menu-content">
        <div class="pq-section-title-box pq-section-title-style-2 pt-4">
            <h4 class="pq-section-title">@lang('emergency-service.page-title')</h4>
            <h6>@lang('emergency-service.page-heading')</h6>
            <br>
            <div class="pq-section-description">
                <p style="text-align: justify">
                    La configuration spatiale et le matériel technique dont est doté le service des ur-gences, permettent de réaliser davantage de prouesses, même pour les cas dés-espérés.                </p>
                <p style="text-align: justify">
                    Ainsi dans la salle de déchoquage est déposé un laryngoscope qui permet d'ouvrir les voies respiratoires. Elle dispose d'un défibrillateur, destiné à régulariser ou à relancer le rythme cardiaque via une décharge d'énergie.                </p>
                <p style="text-align: justify">
                    Une autre salle d'intérêt: la salle de bain assisté. C'est dans cette grande douche que certains accidentés, des patients présentant des blessures ouvertes, sont conduit pour une première décontamination avant d'être orientés dans le service adéquat (hospitalisation, bloc opératoire...)                </p>
                <p style="text-align: justify">
                    En dehors de ces deux salles spécialisées, trois autres locaux sont réservés à l'hospitalisation des patients pendant 24 h maximum. Le principe de cette unité est de recevoir le malade, lever l'urgence, le stabiliser et le référer dans le service approprié.                </p>
                <p style="text-align: justify">
                    Chaque lit est doté d'un scope permettant la prise des paramètres du patient dès son arrivée, d'un boîtier multifonctionnel, comprenant un système d'allumage de lampe de chevet, des dispositifs pour l'alimentation en oxygène ainsi que d'un système d'appel malade qui interagit avec l'unité centrale, tenue par les infir-miers. Cette salle est également dotée d'un lève personne et de dispositifs de lave mains. Un ascenseur permet de joindre le premier niveau, lorsque le patient est admis au bloc opératoire. Cette unité comprend aussi des bureaux, des ves-tiaires, des salles d'équipements et une cuisine.                </p>


            </div>
        </div>

    </div>

@endsection
