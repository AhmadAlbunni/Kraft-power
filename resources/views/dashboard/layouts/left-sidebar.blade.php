<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
                <a href="{{url('/backoffice')}}" data-bs-toggle="collapse" data-bs-target="#dashboard">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div>
                    <div class="pull-right"><i></i></div>
                    <div class="clearfix"></div>
                </a>
                <!-- menu title -->
            <li class="mt-10 mb-10 text-muted ps-4 font-medium menu-title">Components</li>
            <!-- menu item Elements-->
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#categories-menu">
                    <div class="pull-left"><i class="fa fa-th-large"></i><span class="right-nav-text">Categories</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="categories-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.categories.index')}}">Brows All Categories</a></li>
                    <li><a href="{{route('dashboard.categories.create')}}">Add New Category</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#products-menu">
                    <div class="pull-left"><i class="fa fa-cube"></i><span class="right-nav-text">Products</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="products-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.products.index')}}">Brows All Products</a></li>
                    <li><a href="{{route('dashboard.product.create')}}">Add New Product </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#solutions-menu">
                    <div class="pull-left"><i class="fa fa-rocket"></i><span class="right-nav-text">Solutions</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="solutions-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{url('/backoffice/products/index')}}">Brows All Solutions</a></li>
                    <li><a href="{{url('/backoffice/products/create')}}">Add New Solution </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#news-menu">
                    <div class="pull-left"><i class="fa fa-newspaper-o"></i><span class="right-nav-text">News</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="news-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="#">Brows All News</a></li>
                    <li><a href="{{url('/backoffice/products/create')}}">Add New News </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#contact-menu">
                    <div class="pull-left"><i class="fa fa-envelope"></i><span class="right-nav-text">Contact</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="contact-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="#">Requested Messages</a></li>
                </ul>

            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#site-menu">
                    <div class="pull-left"><i class="fa fa-user"></i><span class="right-nav-text">About Us</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="site-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="#">Contact Information </a></li>
                </ul>

            </li>

        </ul>
    </div>
</div>
