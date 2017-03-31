@extends('layout.layout-master')
@section('title','Restaurant List')

@section('subheader')

    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="{!! asset('public/front/img/sub_header_short.jpg') !!}" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Có 24 kết quả gần khu vực của bạn</h1>
                <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB (định vị ở đây)</div>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->

@endsection

@section('breadcrumb')
    @include('_parts.front.breadcrumb')

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

@endsection

@section('sidebar')
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-3">
                <p>
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Xem bản đồ</a>
                </p>
                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Bộ lọc <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>Khoảng cách</h6>
                            <input type="text" id="range" value="" name="range">
                            <h6>Thể loại</h6>
                            <ul>
                                <li><label><input type="checkbox" checked class="icheck">Tất cả <small>(49)</small></label></li>
                                <li><label><input type="checkbox" class="icheck">Mỹ <small>(12)</small></label><i class="color_1"></i></li>
                                <li><label><input type="checkbox" class="icheck">Khựa <small>(5)</small></label><i class="color_2"></i></li>
                                <li><label><input type="checkbox" class="icheck">Hamburger <small>(7)</small></label><i class="color_3"></i></li>
                                <li><label><input type="checkbox" class="icheck">Cá <small>(1)</small></label><i class="color_4"></i></li>
                                <li><label><input type="checkbox" class="icheck">Mexican <small>(49)</small></label><i class="color_5"></i></li>
                                <li><label><input type="checkbox" class="icheck">Pizza <small>(22)</small></label><i class="color_6"></i></li>
                                <li><label><input type="checkbox" class="icheck">Sushi <small>(43)</small></label><i class="color_7"></i></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Rating</h6>
                            <ul>
                                <li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
							</span></label></li>
                                <li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
							</span></label></li>
                                <li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
							</span></label></li>
                                <li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
							</span></label></li>
                                <li><label><input type="checkbox" class="icheck"><span class="rating">
							<i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
							</span></label></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Các lựa chọn</h6>
                            <ul class="nomargin">
                                <li><label><input type="checkbox" class="icheck">Giao hàng</label></li>
                                <li><label><input type="checkbox" class="icheck">Mang về</label></li>
                                <li><label><input type="checkbox" class="icheck">Khoảng cách 10Km</label></li>
                                <li><label><input type="checkbox" class="icheck">Khoảng cách 5Km</label></li>
                            </ul>
                        </div>
                    </div><!--End collapse -->
                </div><!--End filters col-->
            </div><!--End col-md -->
@endsection
@section('content')
            <div class="col-md-9">
                <div id="tools">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select">
                                <select name="sort_rating" id="sort_rating">
                                    <option value="" selected>Sort by ranking</option>
                                    <option value="lower">Lowest ranking</option>
                                    <option value="higher">Highest ranking</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 hidden-xs">
                            <a href="grid_list.html" class="bt_filters"><i class="icon-th"></i></a>
                        </div>
                    </div>
                </div><!--End tools -->

                <div class="strip_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="ribbon_1">
                        Popular
                    </div>
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="desc">
                                <div class="thumb_strip">
                                    <a href="detail_page.html"><img src="{!! asset('public/front/img/thumb_restaurant.jpg') !!}" alt=""></a>
                                </div>
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                                </div>
                                <h3>Taco Mexican</h3>
                                <div class="type">
                                    Mexican / American
                                </div>
                                <div class="location">
                                    135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
                                </div>
                                <ul>
                                    <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                    <li>Delivery<i class="icon_check_alt2 no"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="go_to">
                                <div>
                                    <a href="detail_page.html" class="btn_1">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End row-->
                </div><!-- End strip_list-->

                <div class="strip_list wow fadeIn" data-wow-delay="0.2s">
                    <div class="ribbon_1">
                        Popular
                    </div>
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="desc">
                                <div class="thumb_strip">
                                    <a href="detail_page.html"><img src="{!! asset('public/front/img/thumb_restaurant_2.jpg') !!}" alt=""></a>
                                </div>
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                                </div>
                                <h3>Naples Pizza</h3>
                                <div class="type">
                                    Italian / Pizza
                                </div>
                                <div class="location">
                                    135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
                                </div>
                                <ul>
                                    <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                    <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="go_to">
                                <div>
                                    <a href="detail_page.html" class="btn_1">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End row-->
                </div><!-- End strip_list-->

                <div class="strip_list wow fadeIn" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="desc">
                                <div class="thumb_strip">
                                    <a href="detail_page.html"><img src="{!! asset('public/front/img/thumb_restaurant_3.jpg') !!}" alt=""></a>
                                </div>
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                                </div>
                                <h3>Japan Food</h3>
                                <div class="type">
                                    Sushi / Japanese
                                </div>
                                <div class="location">
                                    135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
                                </div>
                                <ul>
                                    <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                    <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="go_to">
                                <div>
                                    <a href="detail_page.html" class="btn_1">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End row-->
                </div><!-- End strip_list-->

                <div class="strip_list wow fadeIn" data-wow-delay="0.4s">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="desc">
                                <div class="thumb_strip">
                                    <a href="detail_page.html"><img src="{!! asset('public/front/img/thumb_restaurant_4.jpg') !!}" alt=""></a>
                                </div>
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                                </div>
                                <h3>Sushi Gold</h3>
                                <div class="type">
                                    Sushi / Japanese
                                </div>
                                <div class="location">
                                    135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
                                </div>
                                <ul>
                                    <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                    <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="go_to">
                                <div>
                                    <a href="detail_page.html" class="btn_1">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End row-->
                </div><!-- End strip_list-->

                <div class="strip_list wow fadeIn" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="desc">
                                <div class="thumb_strip">
                                    <a href="detail_page.html"><img src="{!! asset('public/front/img/thumb_restaurant_5.jpg') !!}" alt=""></a>
                                </div>
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                                </div>
                                <h3>Dragon Tower</h3>
                                <div class="type">
                                    Chinese / Thai
                                </div>
                                <div class="location">
                                    135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
                                </div>
                                <ul>
                                    <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                    <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="go_to">
                                <div>
                                    <a href="detail_page.html" class="btn_1">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End row-->
                </div><!-- End strip_list-->

                <div class="strip_list last wow fadeIn" data-wow-delay="0.6s">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="desc">
                                <div class="thumb_strip">
                                    <a href="detail_page.html"><img src="{!! asset('public/front/img/thumb_restaurant_6.jpg') !!}" alt=""></a>
                                </div>
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                                </div>
                                <h3>China Food</h3>
                                <div class="type">
                                    Chinese / Vietnam
                                </div>
                                <div class="location">
                                    135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
                                </div>
                                <ul>
                                    <li>Take away<i class="icon_check_alt2 ok"></i></li>
                                    <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="go_to">
                                <div>
                                    <a href="detail_page.html" class="btn_1">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End row-->
                </div><!-- End strip_list-->
                <a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Xem tiếp...</a>
            </div><!-- End col-md-9-->

        </div><!-- End row -->
    </div><!-- End container -->

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

