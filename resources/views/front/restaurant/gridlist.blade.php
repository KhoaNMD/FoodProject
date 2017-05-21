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
                            @include('_parts.front.restaurantfilters')
                            <div class="col-md-2 col-sm-2 hidden-xs">
                                <a href="list_page.html" class="bt_filters"><i class="icon-list"></i></a>
                            </div>
                        </div>
                    </div><!--End tools -->

                    {{--menu tabs--}}
                    @include('_parts.front.menutabs')

                    {{--tab contents--}}
                    @include('_parts.front.contentgrid')
                    {{--end tab contents--}}

                    {{--@include('front.RImages')--}}


                </div><!-- End col-md-9-->

           </div><!-- End row -->
    </div><!-- End container -->
    <!-- End Content =============================================== -->
@endsection

@section('specificscripts')
    <script  src="{!! asset('public/front/js/cat_nav_mobile.js') !!}"></script>
    <script src="{!! asset('public/front/js/bootstrap-select.min.js') !!}"></script>
    <script>$('#cat_nav').mobileMenu();</script>
    {{--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAs_JyKE9YfYLSQujbyFToZwZy-wc09w7s"></script>--}}
    <script src="{!! asset('public/front/js/map.js') !!}"></script>
    <script src="{!! asset('public/front/js/infobox.js') !!}"></script>
    <script src="{!! asset('public/front/js/ion.rangeSlider.js') !!}"></script>
    <script src="{!! asset('public/js/handlefilter.js') !!}"></script>
    <script src="{!! asset('public/js/tabcomment.js') !!}"></script>
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