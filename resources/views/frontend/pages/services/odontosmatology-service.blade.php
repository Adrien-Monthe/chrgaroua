@extends('frontend.layouts.services.service-layout')
@section('image-banner',  asset('frontend/images/blog/35.jpg'))
@section('page-title', __('odontosmatology-service.page-img-title'))
@section('service-content')

    <div class="pq-menu-content">
        <div class="pq-rhs-img text-center"> <img src="/frontend/images/blog/34.jpg" alt="" class="rounded img-fluid"> </div>
        <div class="pq-section-title-box pq-section-title-style-2 pt-4">
            <h4 class="pq-section-title">@lang('odontosmatology-service.page-title')</h4>
            <h6>@lang('odontosmatology-service.page-heading')</h6>
            <br>
            <div class="pq-section-description">
                <p style="text-align: justify">
                    Il s'agit de la médecine de la bouche et de la dentition. C'est la spécialité médicale et chirurgicale consacrée à la prévention, au diagnostic et au traitement des maladies et des anomalies. Elle se rapporte à la face et à la cavité buccale, avec des possibilités d'actes chirurgicaux dans les zones cranio maxillo faciales.
                </p>
                <p style="text-align: justify">
                    Globalement, le service dispose d'un fauteuil dentaire électronique multi réglable. <br>
                    Cet outil relié à une console et à un compresseur, permet toutes les explorations radiographiques, les aspirations chirurgicales et traitements qu'offre la médecine moderne grâce à des instruments lumières et non lumières. Il est aussi équipé d'un matériel de stérilisation.
                </p>

            </div>
        </div>

    </div>

@endsection
