@extends('layouts.app')

@section('content')

<!-- start page content -->
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            @if (Cart::instance('default')->count() > 0)
            <h3 class="lead">{{ Cart::instance('default')->count() }} items in the shopping cart</h3>
            <table class="table">
                <tbody>
                    @foreach (Cart::instance('default')->content() as $item)
                        <tr>
                            <td>
                                <a href="{{ route('shop.show', $item->model->slug) }}">
                                    <img src="{{ Asset('images/back.jpg') }}" height="100px" width="100px">
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('shop.show', $item->model->slug) }}" class="text-decoration-none">
                                    <h3 class="lead light-text">{{ $item->model->name }}</h3>
                                    <p class="light-text">{{ $item->model->details }}</p>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                    @csrf()
                                    @method('DELETE')
                                    <button type="submit" class="cart-option">remove</button><br>
                                </form>
                                <form action="{{ route('cart.save-later', $item->rowId) }}" method="POST">
                                    @csrf()
                                    <button type="submit" class="cart-option text-decoration-none">save for later</button>
                                </form>
                            </td>
                            <td>
                                <div class="center">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                                            <span class="glyphicon glyphicon-minus"></span>
                                            </button>
                                        </span>
                                        <input width="1em" type="text" name="quant[2]" class="form-control input-number" value="10" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>${{ $item->model->price }}</td>
                        </tr>
                        {{-- <hr> --}}
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="summary">
                <div class="row">
                    <div class="col-md-8">
                        <p class="light-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est laborum perspiciatis ullam, aliquam eius deserunt iusto autem. Cumque omnis, architecto nostrum voluptatum quis temporibus alias suscipit quod reprehenderit. Quis, esse.
                        </p>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <p class="text-right light-text">Subtotal &nbsp; &nbsp;${{ Cart::subtotal() }}</p>
                        <p class="text-right light-text">Tax(21%) &nbsp; &nbsp; ${{ Cart::tax() }}</p>
                        <p class="text-right">Total &nbsp; &nbsp; ${{ Cart::total() }}</p>
                    </div>
                </div>
            </div>
            <div class="cart-actions">
                <a class="btn custom-border-n" href="{{ route('shop.index') }}">Continue Shopping</a>
                <a class="float-right btn btn-success custom-border-n" href="{{ route('checkout.index') }}">
                    Proceed to checkout
                </a>
            </div>
            @else
            <div class="alert alert-info">
                <h4 class="lead">No items in the cart <a class="btn custom-border-n" href="{{ route('shop.index') }}">Continue shopping</a></h4>
            </div>
            @endif
            <hr>
            @if (Cart::instance('saveForLater')->count() > 0)
                <h3 class="lead">{{ Cart::instance('saveForLater')->count() }} item saved for later</h3>
                <table class="table">
                    <tbody>
                        @foreach (Cart::instance('saveForLater')->content() as $item)
                            <tr>
                                <td>
                                    <a href="{{ route('shop.show', $item->model->slug) }}">
                                        <img src="{{ Asset('images/back.jpg') }}" height="100px" width="100px"></td>
                                    </a>
                                <td>
                                    <a href="{{ route('shop.show', $item->model->slug) }}" class="text-decoration-none">
                                        <h3 class="lead light-text">{{ $item->model->name }}</h3>
                                        <p class="light-text">{{ $item->model->details }}</p>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                        @csrf()
                                        @method('DELETE')
                                        <button type="submit" class="cart-option">remove</button><br>
                                    </form>
                                    <form action="{{ route('cart.add-to-cart', $item->rowId) }}" method="POST">
                                        @csrf()
                                        <button type="submit" class="cart-option text-decoration-none">Add to cart</button>
                                    </form>
                                </td>
                                <td>
                                    <div class="center">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                                                <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input width="1em" type="text" name="quant[2]" class="form-control input-number" value="10" min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>${{ $item->model->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-primary">
                    <li>No items saved for later</li>
                </div>
            @endif
        </div>
    </div>
</div>
@include('partials.might-like')
<!-- end page content -->

@endsection