<ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('shop.index') }}">Shop</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cart.index') }}">
            Cart 
            @if (Cart::instance('default')->count() > 0)
                <span class="badge badge-primary">
                    {{ Cart::instance('default')->count() }}
                </span>
            @endif
        </a>
    </li>
</ul>