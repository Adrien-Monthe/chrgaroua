@extends('frontend.layouts.services.service-layout')
@section('image-banner',  asset('frontend/images/blog/33.jpg'))
@section('page-title', __('laryngology-service.page-title'))
@section('service-content')

    <div class="pq-menu-content">
        <div class="pq-rhs-img text-center"> <img src="/frontend/images/blog/33.jpg" alt="" class="rounded img-fluid"> </div>
        <div class="pq-section-title-box pq-section-title-style-2 pt-4">
            <h4 class="pq-section-title">L'oto-rhino-laryngologie</h4>
            <h6>un audiomètre pour apprécier les capacités d'audition du patient</h6>
            <br>
            <div class="pq-section-description">
                <p style="text-align: justify"> C'est une branche de la médecine spécialisée dans le diagnostic et le traitement des troubles du nez, de la gorge, de l'oreille, de la région tête et cou.
                    Logé dans un même pavillon que l'ophtalmologie et l'odontologie, ce service dispose d'une salle de consultation. Il est équipé d'un audiomètre pour apprécier les capacités d'audition du patient.</p>

            </div>
        </div>

    </div>

@endsection
