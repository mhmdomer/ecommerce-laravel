<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body>
    <div id='app'>
        @include('partials.nav')
        <div class="py-4" style="margin-top: {{ Request::is('/') ? '2em' : '5em' }}">
            @include('partials.session')
            @include('partials.errors')
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
</body>
@yield('scripts')
</html>
