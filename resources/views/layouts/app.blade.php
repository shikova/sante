<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include('partials._head')

<body>
    <div id="app">
        @include('partials._header')

        @yield('content')

        @include('partials._footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
