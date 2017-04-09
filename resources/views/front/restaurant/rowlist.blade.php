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
                {{--<p>--}}
                    {{--<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Xem bản đồ</a>--}}
                {{--</p>--}}
                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Bộ lọc <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>Khoảng cách</h6>
                            <input type="text" id="range" value="" name="range">
                            <h6>Thể loại</h6>
                            <ul>
                                <li><label><input type="checkbox" class="icheck"> Nhà hàng <small>(12)</small></label><i class="color_1"></i></li>
                                <li><label><input type="checkbox" class="icheck"> Quán nhậu <small>(5)</small></label><i class="color_2"></i></li>
                                <li><label><input type="checkbox" class="icheck">  <small>(7)</small></label><i class="color_3"></i></li>
                                <li><label><input type="checkbox" class="icheck">Cá <small>(1)</small></label><i class="color_4"></i></li>
                                <li><label><input type="checkbox" class="icheck">Mexican <small>(49)</small></label><i class="color_5"></i></li>
                                <li><label><input type="checkbox" class="icheck">Pizza <small>(22)</small></label><i class="color_6"></i></li>
                                <li><label><input type="checkbox" class="icheck">Sushi <small>(43)</small></label><i class="color_7"></i></li>
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
                                    135 Newtownards Road, Belfast, BT4..
                                </div>
                                <div class = "opening">
                                    Giờ hoạt động:  9:00 - 22:00
                                </div>
                                <div>
                                    Giá: $15 - $30
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
                                    135 Newtownards Road, Belfast, BT4..
                                </div>
                                <div class = "opening">
                                    Giờ hoạt động:  9:00 - 22:00
                                </div>
                                <div>
                                    Giá: $15 - $30
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
                                    135 Newtownards Road, Belfast, BT4..
                                </div>
                                <div class = "opening">
                                    Giờ hoạt động:  9:00 - 22:00
                                </div>
                                <div>
                                    Giá: $15 - $30
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
                                    135 Newtownards Road, Belfast, BT4..
                                </div>
                                <div class = "opening">
                                    Giờ hoạt động:  9:00 - 22:00
                                </div>
                                <div>
                                    Giá: $15 - $30
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

                <a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Xem tiếp...</a>
            </div><!-- End col-md-9-->

        </div><!-- End row -->
    </div><!-- End container -->

@endsection



