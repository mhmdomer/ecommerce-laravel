@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" style="margin-bottom: 3em">
        <div class="col-md-5 product-image">
            <img src="{{ Asset('images/products/' . $product->image) }}" height="350px" width="350px">
        </div>
        <div class="product-details col-md-5">
            <h2 class="lead">{{ $product->name }}</h2>
            <p class="light-text">{{ $product->details }}</p>
            <h3 class="lead">${{ $product->price }}</h3>
            <p class="light-text">{{ $product->description }}</p>
            <form action="{{ route('cart.store') }}" method="POST">
                @csrf()
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button type="submit" class="btn custom-border-n">Add to Cart</button>
            </form>
        </div>
    </div>
    <!-- <hr> -->
</div>
@include('partials.might-like')
<!-- end page content -->

@endsection