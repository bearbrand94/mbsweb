<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CMS') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<!-- Colorbox -->
	<link rel="stylesheet" href="{{ asset('css/colorbox.css') }}">

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    @yield('custom_css')
</head>

@yield('constra_body')



<!-- initialize jQuery Library -->
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Color box -->
<script type="text/javascript" src="{{ asset('js/jquery.colorbox.js') }}"></script>
<!-- Isotope -->
<script type="text/javascript" src="{{ asset('js/isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cells-by-row.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ini.isotope.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>

<!-- Google Map API Key-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<!-- Google Map Plugin-->
<script type="text/javascript" src="{{ asset('js/gmap3.js') }}"></script>

<!-- Template custom -->
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript">
  function link_copy(){
      var input = document.createElement('input');
      input.setAttribute('value', window.location.href);
      document.body.appendChild(input);
      input.select();
      var result = document.execCommand('copy');
      document.body.removeChild(input);
      tempAlert("Link Copied!",1000);
      return result;
  }
  function tempAlert(msg,duration)
  {
       var el = document.createElement("span");
       el.setAttribute("class","badge badge-secondary");
       el.setAttribute("style","position:fixed; bottom:100; left: 40%; padding:10px; text-align:center");
       el.innerHTML = msg;
       setTimeout(function(){
        el.parentNode.removeChild(el);
       },1200);
       document.body.appendChild(el);
  }		
</script>
@yield('custom_js')

</html>