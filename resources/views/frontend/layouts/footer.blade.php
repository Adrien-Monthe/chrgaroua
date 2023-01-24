<!-- =========================
     Footer start
     ============================== -->

<footer id="pq-footer">
    <div class="pq-footer-style-1">
        <div class="pq-subscribe align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="pq-subscribe-bg">
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <div class="pq-subscribe-block"> <img src="{{ asset('frontend/images/Subscribe.png')}}" class="pq-subscribe-img img-fluid" alt="medicate-subscribe-image">
                                        <div class="pq-subscribe-details">
                                            <h5>@lang('footer.subscribe-newsletter') </h5> </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="pq-subscribe-from">
                                        <form id="form" class="form">
                                            <div class="form-fields">
                                                <input class="w-100 pq-bg-transparent" type="email" name="EMAIL" placeholder="@lang('footer.enter-email')" required="">
                                                <input class="" type="submit"  value="@lang('footer.sign-up')">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--
        <div class="pq-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="pq-footer-block">
                            <img src="{{ asset('frontend/images/logo_chr_transp.png')}}"
                                 class="pq-footer-logo img-fluid" alt="medicate-footer-logo">CHR GAROUA
                            <p>It helps designers plan out where the content will sit, the content to be written and
                                approved.</p>

                            <div class="pq-footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6">
                        <div class="pq-footer-block">
                            <h4 class="footer-title">@lang('footer.quick-links')</h4>
                            <div class="menu-useful-links-container">
                                <ul id="menu-useful-links" class="menu">
                                    <li><a href="{{ route('home', app()->getLocale() ) }}">@lang('footer.nav-home')</a>
                                    </li>
                                    <li><a
                                        href="{{ route('about', app()->getLocale() ) }}">@lang('footer.nav-about-us')</a>
                                    </li>
                                    <li><a
                                        href="{{ route('contact', app()->getLocale() ) }}">@lang('footer.nav-contact')</a>
                                    </li>
                                    <li><a
                                        href="{{ route('services', app()->getLocale() ) }}">@lang('footer.nav-services')</a>
                                    </li>
                                    <li><a
                                        href="{{ route('appointment', app()->getLocale() ) }}">@lang('footer.nav-appointment')</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6">
                        <div class="pq-footer-block">
                            <h4 class="footer-title">@lang('footer.recent-posts')</h4>
                            <div class="pq-footer-recent-post">
                                <div class="pq-footer-recent-post-media">
                                    <a href="get-the-exercise-limited-mobility.html"> <img
                                        src="{{ asset('frontend/images/footer-image/1.jpg')}}" alt=""></a>
                                </div>
                                <div class="pq-footer-recent-post-info">
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-post-date"> <i
                                        class="far fa-calendar-alt"></i>December <span>12</span>, 2021 </a>
                                    <h6><a href="get-the-exercise-limited-mobility.html">Get the Exercise Limited
                                        Mobility</a></h6></div>
                            </div>
                            <div class="pq-footer-recent-post">
                                <div class="pq-footer-recent-post-media">
                                    <a href="get-the-exercise-limited-mobility.html"> <img
                                        src="{{ asset('frontend/images/footer-image/2.jpg')}}" alt=""></a>
                                </div>
                                <div class="pq-footer-recent-post-info">
                                    <a href="get-the-exercise-limited-mobility.html" class="pq-post-date"> <i
                                        class="far fa-calendar-alt"></i>December <span>12</span>, 2021 </a>
                                    <h6><a href="get-the-exercise-limited-mobility.html">Transfusion strategy and heart
                                        surgery</a></h6></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6">
                        <div class="pq-footer-block">
                            <h4 class="footer-title">@lang('navbar.nav-contact') </h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="pq-contact">
                                        <li><a href="tel:1510"><i class="fas fa-phone"></i>
                                            <span> 1510</span>
                                        </a></li>
                                        <li><a href=""><i class="fas fa-envelope"></i><span>contact@chr-garoua.cm</span></a>
                                        </li>
                                        <li><i class="fas fa-map-marker"></i> <span>Garoua, Cameroun</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}}

        <br>
        @yield('footer-content')
        <br>
        <br>

        <div class="pq-copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center "> <span class="pq-copyright"> @lang('footer.copyright')</span> </div>
                </div>
            </div>
        </div>

    </div>
</footer>
<!--Footer End-->
