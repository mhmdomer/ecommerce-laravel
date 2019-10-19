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
                    @foreach ($categories as $category)
                        <li><a class="text-center {{ $category->name == $categoryName ? 'active-cat' : '' }}" href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- end filter section -->
            <!-- start products section -->
            <div class="col-md-8 offset-md-1">
                <div class="head row">
                    <div class="col-md-6">
                        <h2 class="content-head">
                            {{ $categoryName }}
                        </h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <span class='font-weight-bolder' style="font-size: 1.2em">Price: </span>
                        <span class="align-right"><a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high']) }}" class="text-decoration-none {{ request()->sort == 'low_high' ? 'active-sort' : '' }}">Low to High</a></span>
                        <span class="align-right"><a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low']) }}" class="text-decoration-none {{ request()->sort == 'high_low' ? 'active-sort' : '' }}">High to Low</a></span>
                    </div>
                </div>
                <!-- start products row -->
                <div class="row">
                    @foreach ($products as $product)
                        <!-- start single product -->
                        <div class="col-md-6 col-sm-12 col-lg-4 product">
                            <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                                <div class="card view overlay zoom">
                                    <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="..." height="200px" width="200px">
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
                <div class="text-center">
                    {{ $products->appends(request()->input())->links() }}
                </div>
                <!-- end products row -->
            </div>
            <!-- end products section -->
        </div>
    </div>
    <!-- end page content -->

@endsection