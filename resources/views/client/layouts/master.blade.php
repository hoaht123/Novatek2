<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
        @yield('title')
        
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

        <link href="{{ asset('client/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('client/css/bootstrap.extension.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('client/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('client/css/swiper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('client/css/sumoselect.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('client/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{ asset('client/img/favicon.ico') }}" />
        @yield('css')
        
    </head>
    <body>

        @include('client.components.loader')
        <div id="content-block">
            @include('client.components.header')
            @yield('content')
            @include('client.components.footer')
        </div>
        @include('client.components.popup')
        <script src="{{ asset('client/js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('client/js/swiper.jquery.min.js') }}"></script>
        <script src="{{ asset('client/js/global.js') }}"></script>
    
        <!-- styled select -->
        <script src="{{ asset('client/js/jquery.sumoselect.min.js') }}"></script>
    
        <!-- counter -->
        <script src="{{ asset('client/js/jquery.classycountdown.js') }}"></script>
        <script src="{{ asset('client/js/jquery.knob.js') }}"></script>
        <script src="{{ asset('client/js/jquery.throttle.js') }}"></script>
        @yield('js')
    </body>
</html>