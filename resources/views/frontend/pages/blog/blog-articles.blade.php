@extends('frontend.layouts.app')
@section('page-title', __('blog.page-title'))
@section('content')

    <!--=================================
         Banner start-->
    <div class="pq-breadcrumb" style="background-image:url('{{ asset("frontend/images/blog/17.jpg")}}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h2>@lang('blog.page-title')</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale() ) }}"><i class="fas fa-home mr-2"></i>@lang('navbar.nav-home')</a></li>
                                <li class="breadcrumb-item active">@lang('navbar.nav-blog')</li>
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
          1-colume-grid start-->
    <section class="1-colume-grid pq-pb-210">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="pq-blog">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/10.jpg')}}" class="img-fluid" alt="blogimage">
                                        <div class="pq-post-date">
                                            <a href="#"> <span>December 17, 2021</span></a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                <li class="pq-post-comment"> <a href="#"><i class="fa fa-comments"></i>
                                                        2 Comments</a> </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title"><a href="#">Get The Exercise Limited Mobility</a></h5>
                                        <div class="pq-blog-info">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="pq-button-block">
                                            <a href="#" class="pq-button pq-button-flat"> <span class="text">@lang('blog.read-more')</span> <i class="fas fa-plus"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="pq-blog">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/11.jpg')}}" class="img-fluid" alt="blogimage">
                                        <div class="pq-post-date">
                                            <a href="#"> <span>December 5, 2021</span></a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                <li class="pq-post-comment"> <a href="#"><i class="fa fa-comments"></i>
                                                        1 Comment</a> </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title"><a href="#">Transfusion Strategy And Heart Surgery</a>
                                        </h5>
                                        <div class="pq-blog-info">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="pq-button-block">
                                            <a href="#" class="pq-button pq-button-flat"> <span class="text">@lang('blog.read-more')</span> <i class="fas fa-plus"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="pq-blog">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/12.jpg')}}" class="img-fluid" alt="">
                                        <div class="pq-post-date">
                                            <a href="#"> <span>December 5, 2021</span></a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                <li class="pq-post-comment"> <a href="#"><i class="fa fa-comments"></i>
                                                        0 Comments</a> </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title"><a href="#">Latest
                                                Equipment for the Heart Treatment</a>
                                        </h5>
                                        <div class="pq-blog-info">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="pq-button-block">
                                            <a href="#" class="pq-button pq-button-flat"> <span class="text">@lang('blog.read-more')</span> <i class="fas fa-plus"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="pq-blog">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/13.jpg')}}" class="img-fluid" alt="">
                                        <div class="pq-post-date">
                                            <a href="#"> <span>December 5, 2021</span></a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                <li class="pq-post-comment"> <a href="#"><i class="fa fa-comments"></i>
                                                        0 Comments</a> </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title"><a href="#">Goals
                                                Setting the people Heart is Healthy </a>
                                        </h5>
                                        <div class="pq-blog-info">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="pq-button-block">
                                            <a href="#" class="pq-button pq-button-flat"> <span class="text">@lang('blog.read-more')</span> <i class="fas fa-plus"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="pq-blog">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/14.jpg')}}" class="img-fluid" alt="blogimage">
                                        <div class="pq-post-date">
                                            <a href="#"> <span>December 5, 2021</span></a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                <li class="pq-post-comment"> <a href="#"><i
                                                            class="fa fa-comments"></i>
                                                        0 Comments</a> </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title"><a href="#">For
                                                Examination of kids get Special offers</a>
                                        </h5>
                                        <div class="pq-blog-info">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="pq-button-block">
                                            <a href="#" class="pq-button pq-button-flat"> <span class="text">@lang('blog.read-more')</span> <i class="fas fa-plus"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="pq-blog">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/15.jpg')}}" class="img-fluid" alt="blogimage">
                                        <div class="pq-post-date">
                                            <a href="#"> <span>December 5, 2021</span></a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                <li class="pq-post-comment"> <a href="#"><i class="fa fa-comments"></i>
                                                        0 Comments</a> </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title"><a href="#">Heart
                                                Failure Treatment: High Blood Pressure</a>
                                        </h5>
                                        <div class="pq-blog-info">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="pq-button-block">
                                            <a href="#" class="pq-button pq-button-flat"> <span class="text">@lang('blog.read-more')</span> <i class="fas fa-plus"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="pq-blog">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/16.jpg')}}" class="img-fluid" alt="blogimage">
                                        <div class="pq-post-date">
                                            <a href="#"> <span>December 5, 2021</span></a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                <li class="pq-post-comment"> <a href="#"><i class="fa fa-comments"></i>
                                                        0 Comments</a> </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title"><a href="#">Hard
                                                content we decide ourselves a intently</a>
                                        </h5>
                                        <div class="pq-blog-info">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="pq-button-block">
                                            <a href="#" class="pq-button pq-button-flat"> <span class="text">@lang('blog.read-more')</span> <i class="fas fa-plus"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="pq-blog">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/17.jpg')}}" class="img-fluid" alt="blogimage">
                                        <div class="pq-post-date">
                                            <a href="#"> <span>October 18, 2021</span></a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                <li class="pq-post-comment"> <a href="#"><i class="fa fa-comments"></i>
                                                        0 Comments</a> </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title"><a href="#">Hard Content We Decide Ourselves A Intently</a>
                                        </h5>
                                        <div class="pq-blog-info">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="pq-button-block">
                                            <a href="#" class="pq-button pq-button-flat"> <span class="text">@lang('blog.read-more')</span> <i class="fas fa-plus"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-lg-6">
                            <div class="pq-blog">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media"> <img src="{{ asset('frontend/images/blog/18.jpg')}}" class="img-fluid" alt="blogimage">
                                        <div class="pq-post-date">
                                            <a href="#"> <span>October 18, 2021</span></a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                <li class="pq-post-comment"> <a href="#"><i class="fa fa-comments"></i>
                                                        0 Comments</a> </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title"><a href="#"> Is Running
                                                Really Good for the Heart?</a>
                                        </h5>
                                        <div class="pq-blog-info">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="pq-button-block">
                                            <a href="#" class="pq-button pq-button-flat"> <span class="text">@lang('blog.read-more')</span> <i class="fas fa-plus"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-lg-12">
                            <div class="pq-pagination">
                                <nav aria-label="Page navigation">
                                    <ul class="page-numbers">
                                        <li><a href="#" aria-current="page" class="page-numbers current">1</a></li>
                                        <li><a class="page-numbers" href="#">2</a></li>
                                        <li><a class="next page-numbers" href="#">@lang('blog.next-page')</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ps-3 mt-lg-0">
                    <div class="Sidebar">
                        <div class="pq-widget widget_block pq-widget_search">
                            <form role="search" method="get" action="#" class="pq-block-search__button-outside pq-block-search__text-button pq-block-search">
                                <label for="pq-block-search__input-1" class="pq-block-search__label">Search</label>
                                <div class="pq-block-search__inside-wrapper ">
                                    <input type="search" id="pq-block-search__input-1" class="pq-block-search__input " name="s" value="" placeholder="" required>
                                    <button type="submit" class="pq-block-search__button  ">Search</button>
                                </div>
                            </form>
                        </div>

                        <div class="pq-widget pq-widget_block">
                            <div class="pq-block-group">
                                <div class="pq-block-group__inner-container">
                                    <h2>Categories</h2>
                                    <ul class="pq-block-categories-list pq-block-categories">
                                        <li><a href="#">Announcements</a> </li>
                                        <li><a href="#">Assistance</a> </li>
                                        <li><a href="#">Discounts</a> </li>
                                        <li><a href="#">Healthcare</a> </li>
                                        <li><a href="#">Treatment</a> </li>
                                        <li><a href="#">Uncategorized</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="pq-widget pq-widget_block">
                            <div class="pq-block-group">
                                <div class="pq-block-group__inner-container">
                                    <h2>Archives</h2>
                                    <ul class=" pq-block-archives-list pq-block-archives">
                                        <li><a href='#'>December 2021</a></li>
                                        <li><a href='#'>October 2021</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="pq-widget pq-widget_block">
                            <div class="pq-block-group">
                                <div class="pq-block-group__inner-container">
                                    <h2>@lang('blog.tag')</h2>
                                    <p class="pq-block-tag-cloud"> <a href="#" class="tag-cloud-link " aria-label="Adventures">Adventures</a> <a href="#" class="tag-cloud-link " aria-label="Cardiac">Cardiac</a> <a href="#" class="tag-cloud-link" aria-label="Care">Care</a> <a href="#" class="tag-cloud-link" aria-label="Doctors">Doctors</a> <a href="#" class="tag-cloud-link" aria-label="Health">Health</a> <a href="#" class="tag-cloud-link" aria-label="Hospital">Hospital</a> </p>
                                </div>
                            </div>
                        </div>

                        <div class="pq-widget pq-widget_nav_menu">
                            <h2 class="pq-widget-title">services</h2>
                            <div class="menu-service-menu-container">
                                <ul id="menu-service-menu" class="menu">
                                    <li><a href="#">@lang('blog.cardiology')</a></li>
                                    <li><a href="#">@lang('blog.gastrology')</a></li>
                                    <li><a href="#">@lang('blog.neurology')</a></li>
                                    <li><a href="#">@lang('blog.emergency')</a></li>
                                    <li><a href="#">@lang('blog.surgery')</a></li>
                                    <li><a href="#">@lang('blog.orthopaedics')</a></li>
                                    <li><a href="#">@lang('blog.ophthalmology')</a></li>
                                    <li><a href="#">@lang('blog.odontosmatology')</a></li>
                                    <li><a href="#">@lang('blog.oto-rhino-laryngology')</a></li>
                                    <li><a href="#">@lang('blog.pediatry')</a></li>
                                    <li><a href="#">@lang('blog.gynecology')</a></li>
                                </ul>
                            </div>
                        </div>

                       {{-- <div class="pq-widget pq-widget_media_image">
                            <div class="pq-block-group">
                                <div class="pq-block-group__inner-container">
                                    <figure class="pq-block-image size-full is-style-default"><img src="{{ asset('frontend/images/call-img.jpg')}}" alt="" class="img-fluid"></figure>
                                </div>
                            </div>
                        </div>

                        <div class="pq-widget pq-widget_block">
                            <div class="pq-button-block">
                                <a href="index.html" class="pq-button pq-button-flat"> <span class="text">Download Now</span> </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          1-colume-grid end-->
    <!--=================================



@endsection
