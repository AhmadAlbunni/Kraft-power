<header id="header" class="header default fullWidth">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 xs-mb-10">
                    <div class="topbar-call text-center text-md-start">
                        <ul>
                            <li><i class="fa fa-envelope-o theme-color"></i> info@kraft-power.net</li>
                            <li><i class="fa fa-phone"></i> <a href="tel:+7042791249"> <span>+(704) 279-1249 </span>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-social text-center text-md-end">
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-google"></span></a></li>
                            <li><a href="#"><span class="ti-twitter"></span></a></li>
                            <li><a href="#"><span class="ti-linkedin"></span></a></li>
                            <li><a href="#"><span class="ti-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
     mega menu -->

    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu" style="">
            <!-- menu list items container -->
            <section class="menu-list-items" style="height: 90px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 position-relative">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="index-01.html"><img id="logo_img" src="{{asset('images/logo.png')}}"
                                                                 alt="logo"> </a>
                                    <div class="menu-mobile-collapse-trigger"><span></span></div>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <div class="menu-bar">
                                <ul class="menu-links" style="max-height: 400px; display: none;">

                                    <li class="hoverTrigger"><a href="{{route('website.home')}}">Home <i
                                                class="fa fa-indicator"></i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                    </li>

                                    <li class="hoverTrigger"><a href="{{ route('website.products', 'all') }}"> Products <i
                                                class="fa fa-angle-down fa-indicator"></i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                        <!-- drop down multilevel  -->

                                        <ul class="drop-down-multilevel effect-expand-top"
                                            style="transition: all 400ms ease 0s;">
                                            @foreach($categories as $category )
                                                @if($category->parent_id==0)
                                                    <li><a href="{{ route('website.products',$category->slug) }}">{{$category->name}}<i
                                                                class="ti-plus fa-indicator"></i>
                                                            <div class="mobileTriggerButton"></div>
                                                        </a>
                                                        <ul class="drop-down-multilevel effect-expand-top"
                                                            style="transition: all 400ms ease 0s;">
                                                            @foreach($category->subcategories as $sub )
                                                                <li><a href="{{route('website.products',$sub->slug)}}">{{$sub->name}} </a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>

                                    </li>


                                    <li class="hoverTrigger"><a href="{{route('website.solutions')}}">Solutions <i
                                                class="fa fa-angle-down fa-indicator">

                                            </i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                        <!-- drop down multilevel  -->
                                        <ul class="drop-down-multilevel effect-expand-top"
                                            style="transition: all 400ms ease 0s;">
                                            <li class="hoverTrigger">
                                                <a href="javascript:void(0)">blog classic
                                                    <i class="ti-plus fa-indicator"></i>
                                                    <div class="mobileTriggerButton"></div>
                                                </a>

                                                <!-- drop down second level -->
                                                <ul class="drop-down-multilevel effect-expand-top"
                                                    style="transition: all 400ms ease 0s;">
                                                    <li><a href="blog-classic-left-sidebar.html">left sidebar</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="hoverTrigger"><a href="{{route('website.news')}}">News <i
                                                class="fa fa-indicator"></i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                    </li>

                                    <li class="hoverTrigger"><a href="{{route('website.about')}}">About Us <i
                                                class="fa fa-indicator"></i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>
