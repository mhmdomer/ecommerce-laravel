@extends('layouts.app')

@section('content')

<!-- start page content -->
<div class="container">
        <div class="row">
            <!-- start filter section -->
            <div class="col-md-2" style="margin-top:1em">
                <h4 class="filter-header">
                    By category
                </h4>
                <ul class="filter-ul">
                    <li><a class="text-center" href="">Laptops</a></li>
                    <li><a class="text-center" href="">Desktops</a></li>
                    <li><a class="text-center" href="">Mobile Phones</a></li>
                    <li><a class="text-center" href="">Tablets</a></li>
                    <li><a class="text-center" href="">TVs</a></li>
                    <li><a class="text-center" href="">Digital Cameras</a></li>
                </ul>
                <h4 class="filter-header">
                    By price
                </h4>
                <ul class="filter-ul">
                    <li><a class="text-center" href="">$0 - $700</a></li>
                    <li><a class="text-center" href="">$700 - $2500</a></li>
                    <li><a class="text-center" href="">$2500+</a></li>
                </ul>
            </div>
            <!-- end filter section -->
            <!-- start products section -->
            <div class="col-md-8 offset-md-1">
                <h2 class="content-head">
                    Featured
                </h2>
                <!-- start products row -->
                <div class="row">
                    @foreach ($products as $product)
                        <!-- start single product -->
                        <div class="col-md-6 col-sm-12 col-lg-4 product">
                            <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                                <div class="card view overlay zoom">
                                    <img src="{{ Asset('images/back.jpg') }}" class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}<span class="float-right">${{ $product->price }}</span></h5>
                                        <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                            <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                            <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                            <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- end single product -->
                    @endforeach
                </div>
                <!-- end products row -->
            </div>
            <!-- end products section -->
        </div>
    </div>
    <!-- end page content -->

@endsection