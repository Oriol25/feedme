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
        <div class="footer">
            @include('partials.footer')
        </div>
        @include('partials.js')
        @stack('js')        
    </body>
</html>