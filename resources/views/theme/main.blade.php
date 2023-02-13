<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.metas')
    @include('partials.css')
    @stack('css')
</head>

<body>
    <div id="container">
        @include('partials.header')

        @yield('content')
        

        @include('partials.footer')

        @include('partials.js')
        @stack('js')
    </div>
</body>

</html>
