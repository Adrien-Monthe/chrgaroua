<!doctype html>
<html lang="en">


<!-- Mirrored from peacefulqode.com/themes/medicate/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 18:20:27 GMT -->
<head>
    @include('frontend.layouts.meta')
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo_chr.jpeg')}}">

    @include('frontend.layouts.css')

</head>

<body>
{{--<!--loading start-->
<div id="pq-loading">
    <div id="pq-loading-center">
        <img src="{{ asset('frontend/images/logo_chr.jpeg')}}" class="img-fluid" alt="loading">
    </div>
</div>
<!--loading End--> --}}

<!--=============== header start ==================-->
@include('frontend.layouts.header')
<!--============== Header end =================-->

    @yield('content')

<!-- =========================
     Footer start
     ============================== -->

@include('frontend.layouts.footer')
<!--Footer End-->

<!--Back To Top start-->
<div id="back-to-top">
    <a class="topbtn" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
</div>
<!--Back To Top End-->
@include('frontend.layouts.scripts')
</body>


<!-- Mirrored from peacefulqode.com/themes/medicate/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 18:22:31 GMT -->
</html>
