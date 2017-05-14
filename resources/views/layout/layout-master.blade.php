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
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="{!! asset('public/font-awesome-4.7.0/css/font-awesome.min.css') !!}" >


    <!-- Favicons-->
    <link rel="shortcut icon" href="{!! asset('public/front/img/favicon.ico') !!}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{!! asset('public/front/img/apple-touch-icon-57x57-precomposed.png') !!}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{!! asset('public/front/img/apple-touch-icon-72x72-precomposed.png') !!}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{!! asset('public/front/img/apple-touch-icon-114x114-precomposed.png') !!}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{!! asset('public/front/img/apple-touch-icon-144x144-precomposed.png') !!}">

    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="{!! asset('public/front/css/base.css') !!}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{!! asset('public/front/layerslider/css/layerslider.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/front/css/admin.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/front/css/bootstrap3-wysihtml5.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/front/css/dropzone.css') !!}" rel="stylesheet">

    <!-- Radio and check inputs -->
    <link href="{!! asset('public/front/css/skins/square/grey.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/front/css/ion.rangeSlider.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/front/css/ion.rangeSlider.skinFlat.css') !!}" rel="stylesheet" >
    <link href="{!! asset('public/front/css/date_time_picker.css') !!}" rel="stylesheet">

    <!-- Gallery -->
    <link href="{!! asset('public/front/css/slider-pro.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/front/layerslider/css/layerslider.css') !!}" rel="stylesheet">

    <!-- Common style -->
    <link href="{!! asset('public/common/common-style.css') !!}" rel="stylesheet">

    <link href="{!! asset('public/css/jquery.timepicker.css') !!}" rel="stylesheet">

    <link href="{!! asset('public/front/css/bootstrap-select.min.css') !!}" rel="stylesheet">

    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />

    <link href="{!! asset('public/front/modalcustom.css') !!}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>

<body>
{{--thêm cái preloader vô để cho trang load hiệu ứng--}}
<div id="preloader">
    <div class="sk-spinner sk-spinner-wave" id="status">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div><!-- End Preload -->
<header>
    @include('_parts.front.header')
</header>
{{-- SubHeader =============================================== --}}
{{--này khác class vs ID mỗi trang, hình ảnh mỗi nhà hàng cũng khác nhau--}}
@yield('subheader')
{{--
<section class="parallax-window" data-parallax="scroll" data-image-src="img/sub_header_2.jpg" data-natural-width="1400" data-natural-height="470">
    @include("_parts.front.section")
</section>
--}}
<!-- End SubHeader ============================================ -->
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

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

@include('_parts.front.login')

@include('_parts.front.registration')

@yield('review_modal')

@include('_parts.front.search')

<!-- COMMON SCRIPTS -->
<script src="{!! asset('public/front/js/jquery-2.2.4.min.js') !!}"></script>
<script src="{!! asset('public/front/js/common_scripts_min.js') !!}"></script>
<script src="{!! asset('public/front/js/functions.js') !!}"></script>
<script src="{!! asset('public/front/js/assets/validate.js') !!}"></script>
{{--login and register script--}}
<script src="{!! asset('public/js/login.js') !!}"></script>
<script src="{!! asset('public/js/register.js') !!}"></script>

{{--SCRIPTS riêng của từng trang m add vô template cha làm gi v thánh google dịch hộ chữ SPECIFIC nhé--}}
<!-- SPECIFIC SCRIPTS -->
@yield('specificscripts')
<!-- END SPECIFIC SCRIPTS -->

<!-- helper -->
<script src="{!! asset('public/js/jquery.timepicker.js') !!}"></script>
<script src="{!! asset('public/front/js/bootstrap-datepicker.js') !!}"></script>
</body>
</html>