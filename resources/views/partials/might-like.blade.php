<div class="suggestions">
    <div class="container" style="padding-top: 3em">
        <h3 class="lead" style="margin-bottom: 2em">You might also like</h3>
        <!-- start products row -->
        <div class="row">
            @foreach ($mightLike as $product)
                <!-- start single product -->
                <div class="col-md-6 col-sm-12 col-lg-4 product">
                    <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                        <div class="card view overlay zoom">
                            <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}<span class="float-right">$ {{ format($product->price) }}</span></h5>
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
</div>
<!--  end suggestions -->