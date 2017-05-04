<!DOCTYPE html>
<html lang="en">

    <head>
        @include('includes.head')

        @yield('head')
    </head>
    <body id="page-top" class="index">
        @include('includes.navigation')

        @yield('content')

        @include('includes.footer')
        @include('includes.scripts')
    </body>
</html>
