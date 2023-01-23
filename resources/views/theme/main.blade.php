<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.metas')
    @include('partials.css')
    @stack('css')
</head>

<body>
    @include('partials.header')

    <div class="content">
        @yield('content')
    </div>

    @include('partials.footer')

    @include('partials.js')
    @stack('js')
</body>

</html>
