<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ route('home', app()->getLocale() ) }}">
        <img class="img-fluid logo" src="{{ asset('frontend/images/logo_chr.jpeg')}}" alt="CHR Garoua"> <strong>CHR GAROUA</strong>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div id="pq-menu-contain" class="pq-menu-contain">
            <ul id="pq-main-menu" class="navbar-nav ml-auto">

                <li class="menu-item  {{Route::currentRouteName() === 'home' ? 'current-menu-item' : ''}} ">
                    <a href="{{ route('home', app()->getLocale() ) }}">@lang('navbar.nav-home')</a>
                </li>
                <li class="menu-item {{Route::currentRouteName() === 'about' ? 'current-menu-item' : ''}}">
                    <a href="{{ route('about', app()->getLocale() ) }}">@lang('navbar.nav-about-us')</a>
                </li>

                <li class="menu-item "> <a href="#">@lang('navbar.nav-services')</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                    <ul class="sub-menu">
                        <li class="menu-item "> <a href="{{ route('service_gynecology', app()->getLocale() ) }}">@lang('navbar.nav-gynecology')</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item {{Route::currentRouteName() === 'services' ? 'current-menu-item' : ''}}">
                    <a href="{{ route('services', app()->getLocale() ) }}">@lang('navbar.nav-services')</a>
                </li>
                <li class="menu-item {{Route::currentRouteName() === 'blog' ? 'current-menu-item' : ''}}">
                    <a href="{{ route('blog', app()->getLocale() ) }}">@lang('navbar.nav-blog')</a>
                </li>
                <li class="menu-item {{Route::currentRouteName() === 'contact' ? 'current-menu-item' : ''}}">
                    <a href="{{ route('contact', app()->getLocale() ) }}">@lang('navbar.nav-contact')</a>
                </li>


                @if(app()->getLocale() === "en")
                    <li class="menu-item "> <a href="#">ENGlISH</a><i
                            class="fa fa-chevron-down pq-submenu-icon"></i>
                        <ul class="sub-menu">
                            <li class="menu-item "> <a href="{{ route(Route::currentRouteName(), ['fr',Route::current()->Parameter('product_id')]) }}">FRANCAIS</a> </li>
                        </ul>
                    </li>

                @elseif(app()->getLocale() === "fr")
                    <li class="menu-item "> <a href="#">FRANCAIS</a><i
                            class="fa fa-chevron-down pq-submenu-icon"></i>
                        <ul class="sub-menu">
                            <li class="menu-item "> <a href="{{ route(Route::currentRouteName(), ['en',Route::current()->Parameter('product_id')]) }}">ENGLISH</a> </li>
                        </ul>
                    </li>
                @else
                    <li class="menu-item "> <a href="#">FRANCAIS</a><i
                            class="fa fa-chevron-down pq-submenu-icon"></i>
                        <ul class="sub-menu">
                            <li class="menu-item "> <a href="{{ route(Route::currentRouteName(), ['en',Route::current()->Parameter('product_id')]) }}">ENGLISH</a> </li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </div>
    {{--<div class="pq-menu-search-block">
        <a href="javascript:void(0)" id="pq-seacrh-btn"><i class="ti-search"></i></a>
        <div class="pq-search-form">
            <form role="search" method="get" class="search-form" action="https://peacefulqode.com/themes/medicate/html/.html">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="search-field" placeholder="Search …" value=""
                           name="s">
                </label>
                <button type="submit" class="search-submit"><span
                        class="screen-reader-text">Search</span></button>
            </form>
        </div>
    </div> --}}
    <a href="#" class="pq-button">
        <div class="pq-button-block">
            <span class="pq-button-text">@lang('navbar.nav-appointment')</span>
            <i class="ion ion-plus-round"></i>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
</nav>
