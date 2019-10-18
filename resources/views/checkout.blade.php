@extends('layouts.app')

@section('content')

<!-- start page content -->
<div class="container">
    <div class="row">
        <div class="col-md-5 offset-md-1">
            <hr>
            <h1 class="lead" style="font-size: 1.5em">Checkout</h1>
            <hr>
            <h3 class="lead" style="font-size: 1.2em; margin-bottom: 1.6em;">Billing details</h3>
            <form action="">
                <div class="form-group">
                    <label for="email" class="light-text">Email Address</label>
                    <input type="text" name="email" class="form-control my-input">
                </div>
                <div class="form-group">
                    <label for="name" class="light-text">Name</label>
                    <input type="text" name="name" class="form-control my-input">
                </div>
                <div class="form-group">
                    <label for="address" class="light-text">Address</label>
                    <input type="text" name="address" class="form-control my-input">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city" class="light-text">City</label>
                            <input type="text" name="city" class="form-control my-input">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="province" class="light-text">Province</label>
                        <input type="text" name="province" class="form-control my-input">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postal_code" class="light-text">Postal Code</label>
                            <input type="text" name="postal_code" class="form-control my-input">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="light-text">Phone</label>
                        <input type="text" name="phone" class="form-control my-input">
                    </div>
                </div>
                <h2 style="margin-top:1em; margin-bottom:1em;">Payment details</h2>
                <div class="form-group">
                    <label for="name_card" class="light-text">Name on card</label>
                    <input type="text" name="name_card" class="form-control my-input">
                </div>
                <div class="form-group">
                    <label for="credit_card" class="light-text">Credit Card</label>
                    <input type="text" name="credit_card" class="form-control my-input">
                </div>
                <button type="submit" class="btn btn-success custom-border-success btn-block">Complete Order</button>
            </form>
        </div>
        <div class="col-md-5 offset-md-1">
            <hr>
            <h3>Your Order</h3>
            <hr>
            <table class="table table-borderless">
                <tbody>
                    @foreach (Cart::instance('default')->content() as $item)
                        <tr>
                            <td>
                                <a href="{{ route('shop.show', $item->model->slug) }}">
                                    <img src="{{ Asset('images/products/' . $item->model->image) }}" height="100px" width="100px"></td>
                                </a>
                            <td>
                            <td>
                                <a href="{{ route('shop.show', $item->model->slug) }}" class="text-decoration-none">
                                    <h3 class="lead light-text">{{ $item->model->name }}</h3>
                                    <p class="light-text">{{ $item->model->details }}</p>
                                    <h3 class="light-text lead text-small">${{ $item->model->price }}</h3>
                                </a>
                            </td>
                            <td>
                                <span class="badge badge-info">{{ $item->qty }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <span class="light-text">Subtotal</span>
                </div>
                <div class="col-md-4 offset-md-4">
                    <span class="light-text" style="display: inline-block">${{ Cart::instance('default')->subtotal() }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span class="light-text">Tax(21%)</span>
                </div>
                <div class="col-md-4 offset-md-4">
                    <span class="light-text" style="display: inline-block">${{ Cart::instance('default')->tax() }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span>Total</span>
                </div>
                <div class="col-md-4 offset-md-4">
                    <span class="text-right" style="display: inline-block">${{ Cart::instance('default')->total() }}</span>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
<!-- end page content -->

@endsection