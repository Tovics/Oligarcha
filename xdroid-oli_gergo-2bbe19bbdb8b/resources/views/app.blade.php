<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('main.head')
    </head>
    <body>
        @include('main.topbar')
        <div class="container pb-5">
            @yield('content')
        </div>
        @include('main.footer')
    </body>
</html>
