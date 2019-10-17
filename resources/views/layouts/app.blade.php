<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body>
    <div id="app">
        @include('partials.nav')
        <main class="py-4" style="margin-top:4em">
            @include('partials.session')
            @include('partials.errors')
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>
@yield('scripts')
</html>
