<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.extension.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/swiper.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/sumoselect.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
  	@yield('title')
</head>
<body>

  <div id="loader-wrapper"></div>
  <div id="content-block">
      @include('client.layout.header')
      @yield('content')
      @include('client.layout.footer')
  </div>

      @yield('popup')

  <script src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
  <script src="{{ asset('js/swiper.jquery.min.js')}}"></script>
  <script src="{{ asset('js/global.js')}}"></script>

  <!-- styled select -->
  <script src="{{ asset('js/jquery.sumoselect.min.js')}}"></script>

  <!-- counter -->
  <script src="{{ asset('js/jquery.classycountdown.js')}}"></script>
  <script src="{{ asset('js/jquery.knob.js')}}"></script>
  <script src="{{ asset('js/jquery.throttle.js')}}"></script>
  @yield('script')

</body>
</html>