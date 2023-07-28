@extends('website.layouts.app')
@section('content')

    <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6"
             data-img-src="{{asset('images/bg/02.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-name">
                        <h1>{{$category}}</h1>
                        <p>We know the secret of your success</p>
                    </div>
                    <ul class="page-breadcrumb">
                        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a> <i
                                class="fa fa-angle-double-right"></i>
                        </li>
                        <li><a href="{{route('website.products', 'all')}}">Products</a> <i
                                class="fa fa-angle-double-right"></i></li>
                        <li><span>{{$category}}</span></li>
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

                                        <img class="img-fluid mx-auto" src="{{asset($product->image_url)}}"
                                             alt="{{$product->image_name}}">
                                    </div>
                                    <div class="product-des">
                                        <div class="product-title">
                                            <a href="{{route('website.product.details',$product->id)}}">{{$product->name}}</a>
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
                                        <li><a href="{{route('website.products', $category->slug)}}"> <i
                                                    class="fa fa-angle-double-right"></i> {{$category->name}} </a></li>
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


