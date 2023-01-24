@extends('frontend.layouts.services.service-layout')
@section('image-banner',  asset('frontend/images/blog/18.jpg'))
@section('page-title', __('laboratory-service.page-title'))
@section('service-content')

<div class="pq-menu-content">
{{--    <div class="pq-rhs-img text-center"> <img src="/frontend/images/blog/33.jpg" alt="" class="rounded img-fluid"> </div>--}}
    <div class="pq-section-title-box pq-section-title-style-2 pt-4">
        <h4 class="pq-section-title">@lang('laboratory-service.page-title') </h4>
        <h6>@lang('laboratory-service.page-heading')</h6>
        <br>
        <div class="pq-section-description">
            <p style="text-align: justify"> La dénomination de grand laboratoire renseignerait mieux sur l'étendue et la qualité de cet espace de travail particulier. A la vérité, le pavillon est composé de 05 paillasses (ou laboratoires autonomes) logées dans une salle présentant des spé. cificités scientifiques particulières et dotées d'équipements de dernière génération. L'ensemble des équipements permet de réaliser des examens de d'hématologie, de sérologie, de bactériologie, de biochimie et de biologie molé. culaire. Il dispose de plusieurs boxes de prélèvements. En fonction de l'examen sollicité, le patient est admis au prélèvement sanguin, à la gynécologie ou à la pa-
                rasitologie.</p>
            <p style="text-align: justify"> La paillasse d'hématologie est réservée aux analyses relatives au sang (électro-phorèse, hémoglobine, test de coagulation...) On y retrouve un appareil d'hémostase permettant de doser le taux de prothrombine afin de limiter les saignements. Un compteur hématologique destiné à identifier et mesurer les constituants du sang. l'ionomètre, pour sa part, détermine la teneur en potas-sium, en sodium et en chlore de l'hémoglobine.</p>
            <p style="text-align: justify"> Les analyses d'urée, de glycémie et de créatine sont effectuées à l'aide d'un spectrophotomètre installé dans la paillasse de biochimie. Dans cette même paillasse, il a été installé un Cobas C111 et des appareils de la chaîne Elisa, disposant de capacité à même d'analyser 60 échantillons et plus en une heure.
                A la paillasse de bactériologie se trouve un détecteur automatique de bactéries. <br>
                En 30 minutes seulement, ce dernier détecte la présence d'une bactérie dans l'échantillon étudié ainsi que sa sensibilité aux traitements médicaux. Avec cet automate, plus besoin des prescriptions provisoires.</p>

            <p style="text-align: justify"> Dans la paillasse sérologie, un automate robuste, réputé simple d'utilisation et appelé Mini Vidas, permet de réaliser les examens de VIH, d'hépatites, de chla-mydia, d'herpes etc. S'agissant de la paillasse de biologie moléculaire, il a été intégré dans le dispositif un thermocycleur polyvalent utilisé pour la réalisation des examens de PCR (réaction de polymérisation en chaîne) de sida, de Covid 19.</p>
            <p style="text-align: justify"> La paillasse d'Anapathe (anatomie cytopathologie) répartie en 03 salles est réservée à l'examen des différentes cellules extraites des tissus afin de déterminer la cause et la nature d'une maladie. Outre les appareils de coupe (des tissus or-ganiques) appelés microtomes, un microscope à fluorescence, qui est un outil d'analyse très puissant, y est utilisé. Une chambre froide, constituée de deux salles munis de volumineux congélateurs réglés à -20° C permettent de conserver entre autre des PCR.</p>
            <p style="text-align: justify"> En plus de ces différentes paillasses, l'unité de laboratoire est complétée par des bureaux, une salle de réunion, une salle de stockage des réactifs, deux vestiaires (homme et femme), deux salles de déchets infectieux et non infectieux.</p>

        </div>
    </div>

</div>

@endsection
