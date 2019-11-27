<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content={{csrf_token()}}>

        <title>Jokes - @yield('title')</title>

        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('img/favicon/apple-touch-icon-57x57.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/favicon/apple-touch-icon-114x114.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/favicon/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('img/favicon/apple-touch-icon-60x60.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('img/favicon/apple-touch-icon-120x120.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('img/favicon/apple-touch-icon-76x76.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('img/favicon/apple-touch-icon-152x152.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-196x196.png') }}" sizes="196x196" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png') }}" sizes="16x16" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-128.png') }}" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="{{ asset('img/favicon/mstile-144x144.png') }}" />
        <meta name="msapplication-square70x70logo" content="{{ asset('img/favicon/mstile-70x70.png') }}" />
        <meta name="msapplication-square150x150logo" content="{{ asset('img/favicon/mstile-150x150.png') }}" />
        <meta name="msapplication-wide310x150logo" content="{{ asset('img/favicon/mstile-310x150.png') }}" />
        <meta name="msapplication-square310x310logo" content="{{ asset('img/favicon/mstile-310x310.png') }}" />

        <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">

        @yield('css')
    </head>

    <body class="hold-transition">
        <div class="wrapper" id="app">
            <div id="pageloader" class="content-wrapper">
                <div class="loader loader-2"><div class="lds-ripple"><div></div><div></div></div></div>
            </div>

            <!-- Header -->
            @include('layouts.header')
            <!-- Sidebar -->

            <div class="content-wrapper pt-3">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('layouts.footer')
        </div>
        <!-- ./wrapper -->

        <script type="text/javascript" src="{{ asset(mix('js/app.js')) }}"></script>

        @foreach (['warning','success','error'] as $message)
            @if (Session::has('alert-'.$message))
                <script>
                    toastr.options = {positionClass:"toast-bottom-right"};
                    toastr.{!! $message !!}("{!! Session::get('alert-'.$message) !!}",{timeOut: 10000});
                </script>
            @endif
        @endforeach

        @yield('javascript')
    </body>
</html>