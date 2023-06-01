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
                                    <a href="index-01.html"><img id="logo_img" src="{{asset('images/logo.png')}}" alt="logo"> </a>
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

                                    <li class="hoverTrigger active"><a href="{{route('website.products')}}"> Products <i
                                                class="fa fa-angle-down fa-indicator"></i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                        <!-- drop down multilevel  -->
                                        <ul class="drop-down-multilevel effect-expand-top"
                                            style="transition: all 400ms ease 0s;">
                                            <li class="hoverTrigger active"><a href="javascript:void(0)">Header<i
                                                        class="ti-plus fa-indicator"></i>
                                                    <div class="mobileTriggerButton"></div>
                                                </a>
                                                <ul class="drop-down-multilevel effect-expand-top"
                                                    style="transition: all 400ms ease 0s;">

                                                    <li><a href="header-default.html">default </a></li>

                                                    <li class="hoverTrigger"><a href="javascript:void(0)">Transparent <i
                                                                class="ti-plus fa-indicator"></i>
                                                            <div class="mobileTriggerButton"></div>
                                                        </a>
                                                        <!-- drop down second level -->
                                                        <ul class="drop-down-multilevel effect-expand-top"
                                                            style="transition: all 400ms ease 0s;">
                                                            <li><a href="header-transparent.html">transparent </a></li>
                                                            <li><a href="header-transparent-fullWidth.html">transparent
                                                                    fullWidth </a></li>
                                                            <li><a href="header-transparent-overlay.html">transparent
                                                                    overlay </a></li>
                                                            <li><a href="header-transparent-topbar.html">transparent
                                                                    topbar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="hoverTrigger"><a href="javascript:void(0)">Light <i
                                                                class="ti-plus fa-indicator"></i>
                                                            <div class="mobileTriggerButton"></div>
                                                        </a>
                                                        <!-- drop down second level -->
                                                        <ul class="drop-down-multilevel effect-expand-top"
                                                            style="transition: all 400ms ease 0s;">
                                                            <li><a href="header-light.html">light </a></li>
                                                            <li><a href="header-light-topbar.html">light topbar </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="hoverTrigger"><a href="javascript:void(0)">dark <i
                                                                class="ti-plus fa-indicator"></i>
                                                            <div class="mobileTriggerButton"></div>
                                                        </a>
                                                        <!-- drop down second level -->
                                                        <ul class="drop-down-multilevel effect-expand-top"
                                                            style="transition: all 400ms ease 0s;">
                                                            <li><a href="header-dark.html">dark </a></li>
                                                            <li><a href="header-dark-topbar.html">dark topbar </a></li>
                                                            <li><a href="header-dark-with-topbar.html">dark with
                                                                    topbar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="hoverTrigger"><a href="javascript:void(0)">fancy <i
                                                                class="ti-plus fa-indicator"></i>
                                                            <div class="mobileTriggerButton"></div>
                                                        </a>
                                                        <!-- drop down second level -->
                                                        <ul class="drop-down-multilevel effect-expand-top"
                                                            style="transition: all 400ms ease 0s;">
                                                            <li><a href="header-fancy.html">fancy </a></li>
                                                            <li><a href="header-fancy-topbar.html">fancy topbar </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="hoverTrigger"><a href="javascript:void(0)">Mobile
                                                            OffCanvas <i class="ti-plus fa-indicator"></i>
                                                            <div class="mobileTriggerButton"></div>
                                                        </a>
                                                        <!-- drop down second level -->
                                                        <ul class="drop-down-multilevel effect-expand-top"
                                                            style="transition: all 400ms ease 0s;">
                                                            <li><a href="header-mobile-offcanvas-transparent.html">Transparent </a>
                                                            </li>
                                                            <li><a href="header-mobile-offcanvas-light.html">Light </a>
                                                            </li>
                                                            <li><a href="header-mobile-offcanvas-dark.html">Dark </a>
                                                            </li>
                                                            <li><a href="header-mobile-offcanvas-fancy.html">Fancy </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-left-menu.html">left menu </a></li>
                                                    <li class="active"><a href="header-fullWidth.html">fullWidth </a>
                                                    </li>
                                                    <li><a href="header-left-fixed.html">left fixed </a></li>
                                                    <li><a href="header-logo-center.html">logo center </a></li>
                                                    <li><a href="header-menu-center.html">Menu center <span
                                                                class="badge bg-primary">New</span></a></li>
                                                    <li><a href="header-onepage.html">onepage </a></li>
                                                    <li><a href="header-vertical-left.html">vertical left </a></li>
                                                </ul>
                                            </li>


                                            <li><a href="widget.html">Widget <span class="badge bg-primary"> 15</span>
                                                </a></li>
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

                                    <li class="hoverTrigger"><a href="{{route('website.news')}}">News <i class="fa fa-indicator"></i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                    </li>
                                    <li class="hoverTrigger"><a href="{{route('website.about')}}">About Us <i class="fa fa-indicator"></i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                    </li>


                                </ul>
                                <div class="search-cart">
                                    <div class="search">
                                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                                        <div class="search-box not-click">
                                            <form action="search.html" method="get">
                                                <input type="text" class="not-click form-control" name="search"
                                                       placeholder="Search.." value="">
                                                <button class="search-button" type="submit"><i
                                                        class="fa fa-search not-click"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>
