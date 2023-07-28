<!DOCTYPE html>
<html lang="en" >

@include('website.layouts.head')

<body>

<div class="wrapper">

    <!--=================================
     preloader -->

    <div id="pre-loader">
        <img src="{{asset('images/pre-loader/loader-01.svg')}}" alt="">
    </div>

    <!--=================================
     preloader -->
    @include('website.layouts.header')

    <!--=================================
    page-title-->

    @yield('content')
    <!--=================================
     footer -->
    @include('website.layouts.footer')

    <!--=================================
     footer -->

</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- jquery -->
@yield('scripts')

<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

<!-- plugins-jquery -->
<script src="{{asset('js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script>var plugin_path = '{{asset('js')}}'+'/';</script>

<!-- custom -->
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
