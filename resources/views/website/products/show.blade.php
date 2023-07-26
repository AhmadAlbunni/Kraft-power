@extends('website.layouts.app')
@section('content')

    <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6"
             data-img-src="{{asset('images/bg/02.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-name">
                        <h1>{{$product->name}}</h1>
                        <p>We know the secret of your success</p>
                    </div>
                    <ul class="page-breadcrumb">
                        <li><a href="#"><i class="{{url('/')}}"></i> Home</a> <i class="fa fa-angle-double-right"></i>
                        </li>
                        <li><a href="{{route('website.products',$category->slug)}}">{{$category->name}}</a> <i
                                class="fa fa-angle-double-right"></i></li>
                        <li><span>{{$product->name}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="shop-single page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-slick">
                                <div class="slider slider-for detail-big-car-gallery">
                                    @foreach($product->media as $media)
                                        <img class="img-fluid" src="{{$media->image_url}}" alt="">
                                    @endforeach

                                </div>
                                <div class="slider slider-nav">
                                    {{--                                    @foreach($product->media as $media)--}}
                                    {{--                                        <img class="img-fluid" src="{{$media->image_url}}" alt="">--}}
                                    {{--                                    @endforeach--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-detail clearfix">
                                <div class="product-detail-title mb-20 sm-mt-40">
                                    <h4 class="mb-10">{{$product->name}}</h4>
                                    <span> {{$product->short_description}}</span>
                                </div>


                                <div class="product-detail-meta">
                                    <span>SKU: {{$product->sku}} </span>
                                    <span>Category: <a
                                            href="{{route('website.products',$category->slug)}}">{{$category->name}}</a>  </span>

                                    <span>Tags: @foreach($product->tags as $tag)
                                            <a href="#">{{$tag->tag}},</a>
                                        @endforeach


                                    </span>
                                </div>
                                <div class="product-detail-social">
                                    <span>Share:</span>
                                    <ul class="list-style-none">
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-rss"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-envelope-o"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">

                            <div class="tab tab-border mt-50">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="description-tab" data-bs-toggle="tab"
                                           href="#description" role="tab" aria-controls="description"
                                           aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="additional-tab" data-bs-toggle="tab" href="#additional"
                                           role="tab" aria-controls="additional" aria-selected="false">Profile </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews"
                                           role="tab" aria-controls="reviews" aria-selected="false">Portfolio </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="description" role="tabpanel"
                                         aria-labelledby="description-tab">

                                        <p class="mt-20"> {!! $product->description !!} </p>

                                    </div>
                                    <div class="tab-pane fade" id="additional" role="tabpanel"
                                         aria-labelledby="additional-tab">
                                        <table class="table table-bordered">
                                            <tbody>
                                            @foreach($product->attributes as $attribute)
                                                <tr>
                                                    <th scope="row">{{$attribute->name}}</th>
                                                    <td>{{$attribute->value}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel"
                                         aria-labelledby="reviews-tab">

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12 col-md-12">
                            <div class="title mt-30 mb-30">
                                <h6>Related Products</h6>
                            </div>
                            <div class="owl-carousel owl-loaded owl-drag" data-nav-dots="false" data-nav-arrow="true"
                                 data-items="3" data-sm-items="2" data-lg-items="3" data-md-items="3" data-xs-items="2"
                                 data-autoplay="false">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-883px, 0px, 0px); transition: all 0s ease 0s; width: 2945px;">
                                        <div class="owl-item cloned" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/02.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/02.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/02.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/02.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/02.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/02.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/02.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/02.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/02.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 264.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <img class="img-fluid mx-auto" src="{{asset('images/shop/03.jpg')}}" alt="">
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="shop-single.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a href="shop-single.html">Product name</a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del>
                                                            <ins>$12.49</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev"><i
                                            class="fa fa-angle-left fa-2x"></i></button>
                                    <button type="button" role="presentation" class="owl-next"><i
                                            class="fa fa-angle-right fa-2x"></i></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-widgets-wrap">
                        <div class="sidebar-widget mb-40">
                            <h5 class="mb-20">Search</h5>
                            <div class="widget-search">
                                <i class="fa fa-search"></i>
                                <input type="search" class="form-control placeholder" placeholder="Search....">
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h5 class="mb-20">Categories</h5>
                            <div class="widget-link">
                                <ul>
                                    @foreach($categories as $category)
                                        <li><a href="{{route('website.products',$category->slug)}}"> <i
                                                    class="fa fa-angle-double-right"></i>{{$category->name}} </a></li>
                                    @endforeach
                                </ul>
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

@section('scripts')

@endsection

