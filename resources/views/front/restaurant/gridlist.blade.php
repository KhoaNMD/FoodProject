@extends('layout.layout-master')
@section('title','Restaurant List')

@section('subheader')

    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>24 results in your zone</h1>
                <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB</div>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->

@endsection

@section('breadcrumb')
    @include('_parts.front.breadcrumb')
    {{--
    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->
    --}}
@endsection

@section('sidebar')
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-3">
            {{--<p>--}}
            {{--<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Xem bản đồ</a>--}}
            {{--</p>--}}
            <!--filters col-->
                @include('_parts.front.restaurantfiltersR')
            </div><!--End col-md -->
@endsection

@section('content')
                <div class="col-md-9">

                    <div id="tools">
                        <div class="row">
                            @include('_parts.front.menutabs')
                            <div class="col-md-9 col-sm-9 hidden-xs">
                                <a href="list_page.html" class="bt_filters"><i class="icon-list"></i></a>
                            </div>
                        </div>
                    </div><!--End tools -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                            <a class="strip_list grid" href="detail_page.html">
                                <div class="ribbon_1">Popular</div>
                                <div class="desc">
                                    <div class="thumb_strip">
                                        <img src="{!! asset('public/front/img/thumb_restaurant.jpg') !!}" alt="">
                                    </div>
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <h3>Taco Mexican</h3>
                                    <div class="type">
                                        Mexican / American
                                    </div>
                                    <div class="location">
                                        135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                                    </div>
                                    <ul>
                                        <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                        <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                    </ul>
                                </div>
                            </a><!-- End strip_list-->
                        </div><!-- End col-md-6-->
                        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <a class="strip_list grid" href="detail_page.html">
                                <div class="ribbon_1">Popular</div>
                                <div class="desc">
                                    <div class="thumb_strip">
                                        <img src="{!! asset('public/front/img/thumb_restaurant_2.jpg') !!}" alt="">
                                    </div>
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <h3>Naples Pizza</h3>
                                    <div class="type">
                                        Italian / Pizza
                                    </div>
                                    <div class="location">
                                        135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                                    </div>
                                    <ul>
                                        <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                        <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                    </ul>
                                </div>
                            </a><!-- End strip_list-->
                        </div><!-- End col-md-6-->
                    </div><!-- End row-->

                    <div class="row">
                        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <a class="strip_list grid" href="detail_page.html">
                                <div class="ribbon_1">Popular</div>
                                <div class="desc">
                                    <div class="thumb_strip">
                                        <img src="{!! asset('public/front/img/thumb_restaurant_3.jpg') !!}" alt="">
                                    </div>
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <h3>Japan Food</h3>
                                    <div class="type">
                                        Sushi / Japanese
                                    </div>
                                    <div class="location">
                                        135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                                    </div>
                                    <ul>
                                        <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                        <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                    </ul>
                                </div>
                            </a><!-- End strip_list-->
                        </div><!-- End col-md-6-->
                        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <a class="strip_list grid" href="detail_page.html">
                                <div class="desc">
                                    <div class="thumb_strip">
                                        <img src="{!! asset('public/front/img/thumb_restaurant_4.jpg') !!}" alt="">
                                    </div>
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <h3>Sushi Gold</h3>
                                    <div class="type">
                                        Sushi / Japanese
                                    </div>
                                    <div class="location">
                                        135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                                    </div>
                                    <ul>
                                        <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                        <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                    </ul>
                                </div>
                            </a><!-- End strip_list-->
                        </div><!-- End col-md-6-->
                    </div><!-- End row-->

                    <div class="row">
                        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                            <a class="strip_list grid" href="detail_page.html">
                                <div class="desc">
                                    <div class="thumb_strip">
                                        <img src="{!! asset('public/front/img/thumb_restaurant_5.jpg') !!}" alt="">
                                    </div>
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <h3>Dragon Tower</h3>
                                    <div class="type">
                                        Chinese / Thai
                                    </div>
                                    <div class="location">
                                        135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                                    </div>
                                    <ul>
                                        <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                        <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                    </ul>
                                </div>
                            </a><!-- End strip_list-->
                        </div><!-- End col-md-6-->
                        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <a class="strip_list grid" href="detail_page.html">
                                <div class="desc">
                                    <div class="thumb_strip">
                                        <img src="{!! asset('public/front/img/thumb_restaurant_6.jpg') !!}" alt="">
                                    </div>
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <h3>China Food</h3>
                                    <div class="type">
                                        Chinese / Vietnam
                                    </div>
                                    <div class="location">
                                        135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                                    </div>
                                    <ul>
                                        <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                        <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                    </ul>
                                </div>
                            </a><!-- End strip_list-->
                        </div><!-- End col-md-6-->
                    </div><!-- End row-->
                    <a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Xem tiếp...</a>
                </div><!-- End col-md-9-->

        </div><!-- End row -->
    </div><!-- End container -->
    <!-- End Content =============================================== -->
@endsection

@section('specificscripts')
    <script  src="{!! asset('public/front/js/cat_nav_mobile.js') !!}"></script>
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
@endsection