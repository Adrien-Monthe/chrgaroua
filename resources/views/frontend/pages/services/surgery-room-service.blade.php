@extends('frontend.layouts.services.service-layout')
@section('image-banner',  asset('frontend/images/blog/30.jpg'))
@section('page-title', __('surgery-room-service.page-img-title'))
@section('service-content')

    <div class="pq-menu-content">
        <div class="pq-section-title-box pq-section-title-style-2 pt-4">
            <h4 class="pq-section-title">@lang('surgery-room-service.page-title')</h4>
            <h6>@lang('surgery-room-service.page-heading')</h6>
            <br>
            <div class="pq-section-description">
                <p style="text-align: justify">
                    En plus des appareils sophistiqués disposés autour de la table d'opération flexible, presque toutes les tâches du bloc opératoire sont commandées du doigt.
                </p>
                <p style="text-align: justify">
                    En franchissant la porte de cette unité, on se retrouve dans un couloir présentant à droite, trois grandes salles d'opération, toutes autonomes et à gauche en face des salles d'opération munies de portes vitrées coulissantes et télécommandées, 03 grandes salles de mise en observation (entre 24 et 48 h). Au milieu de chaque salle d'opération, se trouve la table éponyme. Au-dessus de celle-ci, configurable à souhait pour la meilleure position de travail pour le chirurgien et bien fixé au plafond, un scialytique muni de plusieurs bras et relié à une batterie de secours d'une autonomie de 03 heures. Tout autour de la table d'opération, est disposée une kyrielle de matériels et d'ustensiles d'utilités diverses.
                </p>
                <p style="text-align: justify">
                    En premier, le bistouri électrique qui permet non seulement de réaliser une incision avec le maximum de précision, mais aussi de stopper le saignement (hémos-tase). On y retrouve également la colonne d'anesthésie mobile, munie de deux plateaux pour disposer le matériel approprié. Une plage lumineuse ou negato-scope, fixé au mur, permet de lire les radiographies et des scanographies. Un bocal y est disposé pour aspirer les fluides (sang, etc.) pendant l'opération. Plusieurs chariots sur lesquels peut être disposé le matériel chirurgical, s'y retrouvent avec un chariot en forme d'armoire destiné à classer des compresses, les fils, les se-ringues, les solutés...
                </p>
                <p style="text-align: justify">
                    Chaque salle d'opération dispose d'une colonne de laparoscopie. Celle-ci constitue un moyen de procéder à des opérations à travers de très petites précisions, de l'ordre des millimètres. L'opération proprement dite se fait à l'aide d'un instrument optique muni d'une source lumineuse et d'une caméra qui sont introduites dans une cavité abdominale. Bien plus dans chaque salle d'opération se trouve intégré dans le mur un tableau de commande doté d'applications analysant automatiquement et en permanence, les paramètres de l'air (oxygène, nitrogène, monoxyde de carbone) et émettant une alerte sonore en cas d'anomalie.
                </p>
                <p style="text-align: justify">
                    Il y est aussi inséré un négatoscope et un cadrant horaire, mais surtout un sys-teme d'appel inter services permettant au chirurgien en pleine opération de commander un outil ou même d'inviter un spécialiste en salle d'opération, en cas de nécessité. Le bloc opératoire comprend en outre, en plus d'une dizaine d'autres salles, une pharmacie autonome et un local d'entretient avec la famille. Il est aussi doté de salles de stockage de matériels stériles (instruments et tambours pour la stérilisation du matériel) et d'équipement de réserve.
                </p>
                <p style="text-align: justify">
                    il a également été prévu deux salles de repos pour les infirmières de garde, une salle de convivialité, deux vestiaires et des bureaux pour le chef de l'unité et le major.
                </p>

            </div>
        </div>

    </div>

@endsection
