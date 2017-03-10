<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>QuickFood - Quality delivery or take away food</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{!! asset('public/front/img/favicon.ico') !!}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{!! asset('public/front/img/apple-touch-icon-57x57-precomposed.png') !!}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{!! asset('public/front/img/apple-touch-icon-72x72-precomposed.png') !!}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{!! asset('public/front/img/apple-touch-icon-114x114-precomposed.png') !!}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{!! asset('public/front/img/apple-touch-icon-144x144-precomposed.png') !!}">

    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="{!! asset('public/front/css/base.css') !!}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{!! asset('public/front/layerslider/css/layerslider.css') !!}" rel="stylesheet">

    <link href="{!! asset('public/front/css/skins/square/grey.css') !!}" rel="stylesheet">

</head>

<body>
    <header>
        @include('_parts.front.header')
    </header>
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/sub_header_2.jpg" data-natural-width="1400" data-natural-height="470">
        @include("_parts.front.section")
    </section>
    <div class="bread-crumb">
        @yield('breadcrumb')
    </div>
        <div class="wp-content">
            @yield('sidebar')
            @yield('content')
        </div>
    <footer>
        @include('_parts.front.footer')
    </footer>

    @include('_parts.front.login')

    @include('_parts.front.registration')

    @include('_parts.front.search')

    <!-- COMMON SCRIPTS -->
    <script src="{!! asset('public/front/js/jquery-2.2.4.min.js') !!}"></script>
    <script src="{!! asset('public/front/js/common_scripts_min.js') !!}"></script>
    <script src="{!! asset('public/front/js/functions.js') !!}"></script>
    <script src="{!! asset('public/front/js/assets/validate.js') !!}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script  src="js/cat_nav_mobile.js"></script>
    <script>$('#cat_nav').mobileMenu();</script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAs_JyKE9YfYLSQujbyFToZwZy-wc09w7s"></script>
    <script src="{!! asset('public/front/js/map.js') !!}"></script>
    <script src="{!! asset('public/front/js/infobox.js') !!}"></script>
    <script src="{!! asset('public/front/js/ion.rangeSlider.js') !!}"></script>
    <script>
      $(function () {
        'use strict';
        $("#range").ionRangeSlider({
          hide_min_max: true,
          keyboard: true,
          min: 0,
          max: 15,
          from: 0,
          to:5,
          type: 'double',
          step: 1,
          prefix: "Km ",
          grid: true
        });
      });
    </script>

</body>
</html>