@extends('layouts.app')
@section('title', $product->name)
@section('content')

<div class="container">
    <div class="row" style="margin-bottom: 3em">
        <div class="col-md-4 product-image">
            <div>
                <img src="{{ productImage($product->image) }}" width="100%" height="100%" id="current-image">
            </div>
            <div class="image-thumbnails">
                @if ($images)
                    <img src="{{ productImage($product->image) }}" class="image-thumbnail active">
                    @foreach ($images as $image)
                        <div>
                            <img src="{{ productImage($image) }}" class="image-thumbnail">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="product-details col-md-5 offset-md-1">
            <h2 class="lead" style="margin-top:1em">{{ $product->name }}</h2>
            <span class="badge badge-success" style="font-size: 1em">{{ $stockLevel }}</span>
            <p class="light-text">{{ $product->details }}</p>
            <h3 class="lead">$ {{ format($product->price) }}</h3>
            <p class="light-text">{!! $product->description !!}</p>
            @if ($product->quantity > 0)
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf()
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn custom-border-n">Add to Cart</button>
                </form>
            @endif
        </div>
    </div>
    <!-- <hr> -->
</div>
@include('partials.might-like')
<!-- end page content -->

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            // force the height to be as as long as the width
            var w = $('#current-image').width();
            $('#current-image').css({'height': w + 'px'});

            $('.image-thumbnail').on('click', (e) => {
                $('.image-thumbnail').removeClass('active');
                $(e.currentTarget).addClass('active');
                if($(e.currentTarget).attr('src') != $('#current-image').attr('src')) {
                    $(e.currentTarget).addClass('active');
                    $('#current-image').animate({'opacity' : 0}, 300, function() {
                        $('#current-image').attr('src', $(e.currentTarget).attr('src'));
                        $('#current-image').animate({'opacity' : 1}, 400);
                    })
                }
            });
            
        });
    </script>

@endsection