@extends('layouts.app')
@section('title', 'Cart')
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
                                    <img src="{{ productImage($item->model->image) }}" height="100px" width="100px">
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('shop.show', $item->model->slug) }}" class="text-decoration-none">
                                    <h3 class="lead light-text">{{ $item->model->name }}</h3>
                                    <p class="light-text">{{ $item->model->details }}</p>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('cart.destroy', [$item->rowId, 'default']) }}" method="POST" id="delete-item">
                                    @csrf()
                                    @method('DELETE')
                                </form>
                                <form action="{{ route('cart.save-later', $item->rowId) }}" method="POST" id="save-later">
                                    @csrf()
                                </form>
                                <button class="cart-option btn btn-danger btn-sm custom-border" onclick="
                                    document.getElementById('delete-item').submit();">
                                    remove
                                </button>
                                <button class="cart-option btn btn-success btn-sm custom-border" onclick="
                                document.getElementById('save-later').submit();">
                                    Save for later
                                </button>
                            </td>
                            <td class="">
                                <select class='quantity' data-id='{{ $item->rowId }}' data-productQuantity='{{ $item->model->quantity }}'>
                                    @for ($i = 1; $i < 10; $i++)
                                        <option class="option" value="{{ $i }}" {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </td>
                            <td>${{ format($item->subtotal) }}</td>
                        </tr>
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
                        <p class="text-right light-text">Subtotal &nbsp; &nbsp;${{ format(Cart::subtotal()) }}</p>
                        <p class="text-right light-text">Tax(21%) &nbsp; &nbsp; ${{ format(Cart::tax()) }}</p>
                        <p class="text-right">Total &nbsp; &nbsp; ${{ format(Cart::total()) }}</p>
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
                                        <img src="{{ productImage($item->model->image) }}" height="100px" width="100px"></td>
                                    </a>
                                <td>
                                    <a href="{{ route('shop.show', $item->model->slug) }}" class="text-decoration-none">
                                        <h3 class="lead light-text">{{ $item->model->name }}</h3>
                                        <p class="light-text">{{ $item->model->details }}</p>
                                    </a>
                                </td>
                                <td>
                                    <button class="cart-option btn btn-danger btn-sm custom-border" onclick="
                                        document.getElementById('delete-form').submit();">
                                        remove
                                    </button>
                                    <button class="cart-option btn btn-success btn-sm custom-border" onclick="
                                    document.getElementById('add-form').submit();">
                                        Add to cart
                                    </button>
                                </td>
                                <td>${{ format($item->model->price) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <form action="{{ route('cart.destroy', [$item->rowId, 'saveForLater']) }}" method="POST" id="delete-form">
                        @csrf()
                        @method('DELETE')
                    </form>
                    <form action="{{ route('cart.add-to-cart', $item->rowId) }}" method="POST" id="add-form">
                        @csrf()
                    </form>

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

@section('scripts')

<script type="text/javascript">

$(document).ready(function () {
    $('.quantity').on('change', function() {
        const id = this.getAttribute('data-id')
        console.log(id)
        const productQuantity = this.getAttribute('data-productQuantity')
        axios.patch('/cart/' + id, {quantity: this.value, productQuantity: productQuantity})
            .then(response => {
                console.log(response)
                window.location.href = '{{ route('cart.index') }}'
            }).catch(error => {
                window.location.href = '{{ route('cart.index') }}'
            })
    });
});

</script>

@endsection