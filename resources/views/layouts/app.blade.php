<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partial.head')
<body>
    <div id="app">
        @include('partisal.nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@yield('scripts')
</html>
