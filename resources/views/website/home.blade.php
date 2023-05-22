@extends('website.layouts.app')
@section('content')
{{--    Banner--}}
<section id="main-slider" class="shop-05-banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=""></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="img-fluid" src="images/shop/banner/03.jpg" alt="slider">
                <div class="slider-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-start">
                                <div class="slider">
                                    <h1 class="text-uppercase text-white animated6">Men<br>Winter<br>Collection</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img class="img-fluid" src="images/shop/banner/04.jpg" alt="slider">
                <div class="slider-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider float-end text-end">
                                    <h1 class="text-uppercase text-white animated6">Women<br>Winter<br>Collection</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
{{--    End Banner--}}

{{--    New Products--}}
<section class="shop-06-product page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h2 class="title-effect">Explore Our Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-loaded owl-drag" data-nav-dots="false" data-nav-arrow="true" data-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="20">





                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1749px, 0px, 0px); transition: all 1s ease 0s; width: 3790px;"><div class="owl-item cloned" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/02.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/03.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/04.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/05.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/01.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/02.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/03.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/04.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/05.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned active" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/01.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/02.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/03.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 271.5px; margin-right: 20px;"><div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/04.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a class="text-black" href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del> <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left fa-2x"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right fa-2x"></i></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</section>
{{--    End New Products--}}
{{----}}
<section class="split-section black-bg page-section-ptb">
    <div class="side-background">
        <div class="col-lg-6 img-side img-left">
            <div class="img-holder img-cover jarallax" data-speed="0.6" data-img-src="images/bg/09.jpg" style="z-index: 0;">
                <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><img src="images/bg/09.jpg" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 840px; height: 605.2px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 35.4px; transform: translate3d(0px, -114.8px, 0px);"></div></div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-5">
                <div class="section-title">
                    <h6 class="text-white">Why Choose Kraft Power</h6>
                    <h2 class="text-white title-effect">Our Unique Process </h2>
                    <p class="text-white">Know our process and Possimus delectus ex, harum, quis rerum maxime in magnam. lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>
                <div class="tab">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link" href="#research-07" data-bs-toggle="tab">Planning</a></li>
                        <li class="nav-item"><a class="nav-link" href="#design-07" data-bs-toggle="tab">Design</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#develop-07" data-bs-toggle="tab">Development</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="research-07">
                            <p class="text-white">We'll go over your goals, styles you like, layouts &amp; color you like and your projects need. Enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipis official Dolor sit amet consectetur adipisicing elit. </p>
                        </div>
                        <div class="tab-pane fade" id="design-07">
                            <p class="text-white">Here we will take everything we learned during planning and create the design that all you want. modi adipis official Dolor sit amet, consectetur adipisicing elit. Vero quod conseqt quibusdam Vero quod conseqt enim. </p>
                        </div>
                        <div class="tab-pane fade active show" id="develop-07">
                            <p class="text-white">After we have the look for the projects, we will need to code this. all the functionality in place. voluptatem obcaecati impedit iste fugiat eius iusto harum quaerat quisquam ipsum, alias nihil qui error eaque explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{----}}

{{--Categories--}}
<section class="page-section-ptb gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h3>The bottom line is that we must shed the bad and replace with <i class="theme-color">good beliefs</i>  </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="isotope columns-3 popup-gallery no-title" style="position: relative; height: 806px;">
                    <div class="grid-item" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <img src="images/portfolio/small/01.jpg" alt="">
                            <div class="portfolio-overlay bg-white p-4 text-center">
                                <h5 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h5>
                                <a class="tag mt-10" href="#"> Mackup  </a>
                            </div>
                            <a class="popup portfolio-img" href="images/portfolio/small/01.jpg"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                    <div class="grid-item" style="position: absolute; left: 387px; top: 0px;">
                        <div class="portfolio-item">
                            <img src="images/portfolio/small/02.jpg" alt="">
                            <div class="portfolio-overlay bg-white p-4 text-center">
                                <h5 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h5>
                                <a class="tag mt-10" href="#"> Fashion  </a>
                            </div>
                            <a class="popup portfolio-img" href="images/portfolio/small/02.jpg"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                    <div class="grid-item" style="position: absolute; left: 774px; top: 0px;">
                        <div class="portfolio-item">
                            <img src="images/portfolio/small/03.jpg" alt="">
                            <div class="portfolio-overlay bg-white p-4 text-center">
                                <h5 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h5>
                                <a class="tag mt-10" href="#"> Business  </a>
                            </div>
                            <a class="popup portfolio-img" href="images/portfolio/small/03.jpg"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                    <div class="grid-item" style="position: absolute; left: 0px; top: 403px;">
                        <div class="portfolio-item">
                            <img src="images/portfolio/small/04.gif" alt="">
                            <div class="portfolio-overlay bg-white p-4 text-center">
                                <h5 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h5>
                                <a class="tag mt-10" href="#"> Creative  </a>
                            </div>
                            <a class="popup portfolio-img" href="images/portfolio/small/04.gif"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                    <div class="grid-item" style="position: absolute; left: 387px; top: 403px;">
                        <div class="portfolio-item">
                            <img src="images/portfolio/small/05.jpg" alt="">
                            <div class="portfolio-overlay bg-white p-4 text-center">
                                <h5 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h5>
                                <a class="tag mt-10" href="#"> Clothes  </a>
                            </div>
                            <a class="popup portfolio-img" href="images/portfolio/small/05.jpg"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                    <div class="grid-item" style="position: absolute; left: 774px; top: 403px;">
                        <div class="portfolio-item">
                            <img src="images/portfolio/small/06.jpg" alt="">
                            <div class="portfolio-overlay bg-white p-4 text-center">
                                <h5 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h5>
                                <a class="tag mt-10" href="#"> Brand  </a>
                            </div>
                            <a class="popup portfolio-img" href="images/portfolio/small/06.jpg"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--End Categories--}}

{{--    --}}
<section class="shop-block page-section-ptb bg-overlay-black-40 jarallax" data-speed="0.6" data-img-src="images/shop/bg/05.jpg" style="z-index: 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center pt-50 pb-50 position-relative">
                <h2 class="text-white">Women’s lookbook </h2>
                <p class="text-white mt-20 mb-30">Best Watches available on the cheapest prices at Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                <a class="button white button-border" href="#">Shop Now </a>
                <a class="button white ml-10" href="#">Get deale</a>
            </div>
        </div>
    </div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><img src="images/shop/bg/05.jpg" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1680px; height: 548.5px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 63.75px; transform: translate3d(0px, 262.041px, 0px);"></div></section>
{{--    --}}
{{--    News--}}
<section class="our-blog page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h6>Fresh Webster News </h6>
                    <h2 class="title-effect">Latest News</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 xs-mb-30">
                <div class="blog-box  blog-1 h-100">
                    <div class="blog-info">
                        <span class="post-category"><a href="#">Business</a></span>
                        <h4> <a href="#"> Does your life lack meaning</a></h4>
                        <p>I truly believe Augustine’s words are true and if you look at history you know it is true.</p>
                        <span><i class="fa fa-user"></i> By Webster</span>
                        <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                    </div>
                    <div class="blog-box-img" style="background-image:url(images/blog/01.jpg);"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 xs-mb-30">
                <div class="blog-box blog-1 h-100 active">
                    <div class="blog-info">
                        <span class="post-category"><a href="#">Business</a></span>
                        <h4> <a href="#"> Supercharge your motivation</a></h4>
                        <p>We also know those epic stories, those modern-day legends surrounding the early failures.</p>
                        <span><i class="fa fa-user"></i> By Webster</span>
                        <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                    </div>
                    <div class="blog-box-img" style="background-image:url(images/blog/09.jpg);"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blog-box blog-1 h-100">
                    <div class="blog-info">
                        <span class="post-category"><a href="#">Business</a></span>
                        <h4> <a href="#">  Helen keller a teller &amp; a seller </a></h4>
                        <p>I truly believe Augustine’s words are true and if you look at history you know it is true.</p>
                        <span><i class="fa fa-user"></i> By Webster</span>
                        <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                    </div>
                    <div class="blog-box-img" style="background-image:url(images/blog/03.jpg);"></div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--    End News--}}
@endsection
