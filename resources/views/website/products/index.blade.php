@extends('website.layouts.app')
@section('content')

    <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="images/bg/02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-name">
                        <h1>shop listing</h1>
                        <p>We know the secret of your success</p>
                    </div>
                    <ul class="page-breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i>
                        </li>
                        <li><a href="#">shop</a> <i class="fa fa-angle-double-right"></i></li>
                        <li><span>shop listing</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="shop grid page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="row">

                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product mb-40">
                                    <div class="product-image">
                                        <img class="img-fluid mx-auto" src="{{asset($product->image_url)}}" alt="{{$product->image_name}}">
                                    </div>
                                    <div class="product-des">
                                        <div class="product-title">
                                            <a href="shop-single.html">{{$product->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="sidebar-widgets-wrap">
                        <div class="sidebar-widget mb-40">
                            <h5 class="mb-20">search</h5>
                            <div class="widget-search">
                                <i class="fa fa-search"></i>
                                <input type="search" class="form-control placeholder" placeholder="Search....">
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h5 class="mb-20">categories</h5>
                            <div class="widget-link">
                                <ul>
                                    @foreach($categories as $category)
                                    <li><a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> {{$category->name}} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h5 class="mb-20">Recent items</h5>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/01.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/02.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/03.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h5 class="mb-20">Recently viewed items</h5>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/04.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/05.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/06.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/07.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-0">
                            <h5 class="mb-20">Popular items</h5>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/08.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/09.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/10.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item mb-0 clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/11.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="action-box theme-bg full-width">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 position-relative">
                    <div class="action-box-text">
                        <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
                        <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with
                            powerful features.</p>
                    </div>
                    <div class="action-box-button">
                        <a class="button button-border white" href="#">
                            <span>Purchase Now</span>
                            <i class="fa fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
