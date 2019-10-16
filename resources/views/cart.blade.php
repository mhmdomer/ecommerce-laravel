@extends('layouts.app')

@section('content')

<!-- start page content -->
<div class="container">
    <div class="col-md-8 offset-md-1">
        <h3 class="lead">3 items in the shopping cart</h3>
        <hr>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td><img src="{{ Asset('images/back.jpg') }}" height="80px" width="80px"></td>
                    <td>
                        <h3 class="lead light-text">Laptop</h3>
                        <p class="light-text">laptop hp 14 inches 1TB SSD</p>
                    </td>
                    <td>
                        <a href="">remove</a><br>
                        <a href="">save for later</a>
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
                    <td>$433</td>
                </tr>
                <tr>
                    <td><img src="{{ Asset('images/back.jpg') }}" height="80px" width="80px"></td>
                    <td>
                        <h3 class="lead light-text">Laptop</h3>
                        <p class="light-text">laptop hp 14 inches 1TB SSD</p>
                    </td>
                    <td>
                        <a href="">remove</a><br>
                        <a href="">save for later</a>
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
                    <td>$433</td>
                </tr>
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
                    <p class="text-right light-text">Subtotal &nbsp; &nbsp;$344</p>
                    <p class="text-right light-text">Tax &nbsp; &nbsp; $344</p>
                    <p class="text-right">Total &nbsp; &nbsp; $344</p>
                </div>
            </div>
        </div>
        <div class="cart-actions">
            <button class="btn custom-border-n">Continue Shopping</button>
            <button class="float-right btn btn-success custom-border-success">Proceed to checkout</button>
        </div>
        <hr>
        <h3 class="lead">1 item saved for later</h3>
        <hr>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td><img src="{{ Asset('images/back.jpg') }}" height="80px" width="80px"></td>
                    <td>
                        <h3 class="lead light-text">Laptop</h3>
                        <p class="light-text">laptop hp 14 inches 1TB SSD</p>
                    </td>
                    <td>
                        <a href="">remove</a><br>
                        <a href="">move to cart</a>
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
                    <td>$433</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@include('partials.might-like')
<!-- end page content -->

@endsection