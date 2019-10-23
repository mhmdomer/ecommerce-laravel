@component('mail::message')
Your Order is sent successfully!

<h3>Order: </h3>
<li>mail : {{ $order->billing_email }}</li>
<li>Name : {{ $order->billing_name }}</li>
<li>Total : {{ $order->billing_total }}</li>
<h4>products: </h4>
@foreach ($order->products as $product)
    {{ $product->name }} : {{ $product->pivot->quantity }}
@endforeach

@component('mail::button', ['url' => config('app.url')])
Go To The Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
