@extends('layout.layout-master')
@section('title','Detail Restaurant')

@section('subheader')
    <section class="parallax-window" data-parallax="scroll" data-image-src="{!! asset('public/front/img/sub_header_2.jpg') !!}" data-natural-width="1400" data-natural-height="470">
        <div id="subheader">
            <div id="sub_content">
                <div id="thumb"><img src="{!! asset('public/front/img/thumb_restaurant.jpg') !!}" alt=""></div>
                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> ( <small><a href="#0">98 reviews</a></small> )</div>
                <h1>Mexican TacoMex</h1>
                <div><em>Mexican / American</em></div>
                <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB - <strong>Phí vận chuyển:</strong> $10, free over $15.</div>
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

            <div class="col-md-4">
                <p>
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Xem trên bản đồ</a>
                </p>
                <div class="box_style_2">
                    <h4 class="nomargin_top">Thời gian phục vụ <i class="icon_clock_alt pull-right"></i></h4>
                    <ul class="opening_list">
                        <li>Monday<span>12.00am-11.00pm</span></li>
                        <li>Tuesday<span>12.00am-11.00pm</span></li>
                        <li>Wednesday <span class="label label-danger">Closed</span></li>
                        <li>Thursday<span>12.00am-11.00pm</span></li>
                        <li>Friday<span>12.00am-11.00pm</span></li>
                        <li>Saturday<span>12.00am-11.00pm</span></li>
                        <li>Sunday <span class="label label-danger">Closed</span></li>
                    </ul>
                </div>
                <!-- NEEND HELP col-md-4 -->
                @include('_parts.front.order.needhelp')
            </div>
@endsection

@section('content')
            <div class="col-md-8">
                <div class="box_style_2">
                    <h2 class="inner">Mô tả nhà hàng</h2>

                    <div id="Img_carousel" class="slider-pro">
                        <div class="sp-slides">

                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="{!! asset('public/front/src/css/images/blank.html') !!}"
                                     data-src="{!! asset('public/front/img/slider_single_restaurant/1_medium.jpg') !!}"
                                     data-small="{!! asset('public/front/img/slider_single_restaurant/1_small.jpg') !!}"
                                     data-medium="{!! asset('public/front/img/slider_single_restaurant/1_medium.jpg') !!}"
                                     data-large="{!! asset('public/front/img/slider_single_restaurant/1_large.jpg') !!}"
                                     data-retina="{!! asset('public/front/img/slider_single_restaurant/1_large.jpg') !!}">
                            </div>
                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="{!! asset('public/front/src/css/images/blank.html') !!}"
                                     data-src="{!! asset('public/front/img/slider_single_restaurant/2_medium.jpg') !!}"
                                     data-small="{!! asset('public/front/img/slider_single_restaurant/2_small.jpg') !!}"
                                     data-medium="{!! asset('public/front/img/slider_single_restaurant/2_medium.jpg') !!}"
                                     data-large="{!! asset('public/front/img/slider_single_restaurant/2_large.jpg') !!}"
                                     data-retina="{!! asset('public/front/img/slider_single_restaurant/2_large.jpg') !!}">
                                <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                                    Lorem ipsum dolor sit amet </h3>
                                <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                                    consectetur adipisicing elit
                                </p>
                                <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="{!! asset('public/front/src/css/images/blank.html') !!}"
                                     data-src="{!! asset('public/front/img/slider_single_restaurant/3_medium.jpg') !!}"
                                     data-small="{!! asset('public/front/img/slider_single_restaurant/3_small.jpg') !!}"
                                     data-medium="{!! asset('public/front/img/slider_single_restaurant/3_medium.jpg') !!}"
                                     data-large="{!! asset('public/front/img/slider_single_restaurant/3_large.jpg') !!}"
                                     data-retina="{!! asset('public/front/img/slider_single_restaurant/3_large.jpg') !!}">
                                <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
                                    Lorem ipsum dolor sit amet
                                </p>
                                <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
                                    consectetur adipisicing elit
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="{!! asset('public/front/src/css/images/blank.html') !!}"
                                     data-src="{!! asset('public/front/img/slider_single_restaurant/4_medium.jpg') !!}"
                                     data-small="{!! asset('public/front/img/slider_single_restaurant/4_small.jpg') !!}"
                                     data-medium="{!! asset('public/front/img/slider_single_restaurant/4_medium.jpg') !!}"
                                     data-large="{!! asset('public/front/img/slider_single_restaurant/4_large.jpg') !!}"
                                     data-retina="{!! asset('public/front/img/slider_single_restaurant/4_large.jpg') !!}">
                                <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="{!! asset('public/front/src/css/images/blank.html') !!}"
                                     data-src="{!! asset('public/front/img/slider_single_restaurant/5_medium.jpg') !!}"
                                     data-small="{!! asset('public/front/img/slider_single_restaurant/5_small.jpg') !!}"
                                     data-medium="{!! asset('public/front/img/slider_single_restaurant/5_medium.jpg') !!}"
                                     data-large="{!! asset('public/front/img/slider_single_restaurant/5_large.jpg') !!}"
                                     data-retina="{!! asset('public/front/img/slider_single_restaurant/5_large.jpg') !!}">
                                <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="{!! asset('public/front/src/css/images/blank.html') !!}"
                                     data-src="{!! asset('public/front/img/slider_single_restaurant/6_medium.jpg') !!}"
                                     data-small="{!! asset('public/front/img/slider_single_restaurant/6_small.jpg') !!}"
                                     data-medium="{!! asset('public/front/img/slider_single_restaurant/6_medium.jpg') !!}"
                                     data-large="{!! asset('public/front/img/slider_single_restaurant/6_large.jpg') !!}"
                                     data-retina="{!! asset('public/front/img/slider_single_restaurant/6_large.jpg') !!}">
                                <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="{!! asset('public/front/src/css/images/blank.html') !!}"
                                     data-src="{!! asset('public/front/img/slider_single_restaurant/7_medium.jpg') !!}"
                                     data-small="{!! asset('public/front/img/slider_single_restaurant/7_small.jpg') !!}"
                                     data-medium="{!! asset('public/front/img/slider_single_restaurant/7_medium.jpg') !!}"
                                     data-large="{!! asset('public/front/img/slider_single_restaurant/7_large.jpg') !!}"
                                     data-retina="{!! asset('public/front/img/slider_single_restaurant/7_large.jpg') !!}">
                                <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="{!! asset('public/front/src/css/images/blank.html') !!}"
                                     data-src="{!! asset('public/front/img/slider_single_restaurant/8_medium.jpg') !!}"
                                     data-small="{!! asset('public/front/img/slider_single_restaurant/8_small.jpg') !!}"
                                     data-medium="{!! asset('public/front/img/slider_single_restaurant/8_medium.jpg') !!}"
                                     data-large="{!! asset('public/front/img/slider_single_restaurant/8_large.jpg') !!}"
                                     data-retina="{!! asset('public/front/img/slider_single_restaurant/8_large.jpg') !!}">
                                <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                                    Lorem ipsum dolor sit amet
                                </p>
                                <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="{!! asset('public/front/src/css/images/blank.html') !!}"
                                     data-src="{!! asset('public/front/img/slider_single_restaurant/9_medium.jpg') !!}"
                                     data-small="{!! asset('public/front/img/slider_single_restaurant/9_small.jpg') !!}"
                                     data-medium="{!! asset('public/front/img/slider_single_restaurant/9_medium.jpg') !!}"
                                     data-large="{!! asset('public/front/img/slider_single_restaurant/9_large.jpg') !!}"
                                     data-retina="{!! asset('public/front/img/slider_single_restaurant/9_large.jpg') !!}">
                            </div>
                        </div>
                        <div class="sp-thumbnails">
                            <img alt="" class="sp-thumbnail" src="{!! asset('public/front/img/slider_single_restaurant/1_medium.jpg') !!}">
                            <img alt="" class="sp-thumbnail" src="{!! asset('public/front/img/slider_single_restaurant/2_medium.jpg') !!}">
                            <img alt="" class="sp-thumbnail" src="{!! asset('public/front/img/slider_single_restaurant/3_medium.jpg') !!}">
                            <img alt="" class="sp-thumbnail" src="{!! asset('public/front/img/slider_single_restaurant/4_medium.jpg') !!}">
                            <img alt="" class="sp-thumbnail" src="{!! asset('public/front/img/slider_single_restaurant/5_medium.jpg') !!}">
                            <img alt="" class="sp-thumbnail" src="{!! asset('public/front/img/slider_single_restaurant/6_medium.jpg') !!}">
                            <img alt="" class="sp-thumbnail" src="{!! asset('public/front/img/slider_single_restaurant/7_medium.jpg') !!}">
                            <img alt="" class="sp-thumbnail" src="{!! asset('public/front/img/slider_single_restaurant/8_medium.jpg') !!}">
                            <img alt="" class="sp-thumbnail" src="{!! asset('public/front/img/slider_single_restaurant/9_medium.jpg') !!}">
                        </div>
                    </div>
                    <h3>Thông tin nhà hàng</h3>
                    <p>
                        Lorem ipsum dolor sit amet, ius sonet meliore partiendo cu. Nobis laudem mediocrem cum et. Debitis nonumes similique te eam, blandit eligendi principes sea no. Cu eum quidam expetendis.
                    </p>
                    <p class="add_bottom_30">
                        Lorem ipsum dolor sit amet, ex has recusabo adipiscing, aliquip alienum at vis, eos id qualisque quaerendum. Soleat habemus duo no, te quo dicam everti, sale ullum movet per ea. Cu cum laudem quaeque, agam decore nullam ei vis. Nec ad tota etiam eirmod. Harum debitis detraxit ut vel, eu vel option oporteat.
                    </p>
                    <div id="summary_review">
                        <div id="general_rating">
                            11 Reviews
                            <div class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                            </div>
                        </div>

                        <div class="row" id="rating_summary">
                            <div class="col-md-6">
                                <ul>
                                    <li>Chất lượng món ăn
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                        </div>
                                    </li>
                                    <li>Giá cả
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Thời gian
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                        </div>
                                    </li>
                                    <li>Phục vụ
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row -->
                        <hr class="styled">
                        <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Để lại bình luận</a>
                    </div><!-- End summary_review -->

                    <div class="review_strip_single">
                        <img src="{!! asset('public/front/img/avatar1.jpg') !!}" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
                                </div>
                                Food Quality
                            </div>
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                </div>
                                Price
                            </div>
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                </div>
                                Punctuality
                            </div>
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                </div>
                                Courtesy
                            </div>
                        </div><!-- End row -->
                    </div><!-- End review strip -->

                    <div class="review_strip_single">
                        <img src="{!! asset('public/front/img/avatar3.jpg') !!}" alt="" class="img-circle">
                        <small> - 25 March 2015 -</small>
                        <h4>Markus Schulz</h4>
                        <p>
                            "At sed dico invenire facilisis, sed option sapientem iudicabit ad, sea idque doming vituperatoribus at. Duo ut inani tantas scaevola. Commodo oblique at cum. Duo id vide delectus. Vel et doctus laoreet minimum, ei feugait pertinacia usu.
                        </p>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                </div>
                                Food Quality
                            </div>
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                </div>
                                Price
                            </div>
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                </div>
                                Punctuality
                            </div>
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                </div>
                                Courtesy
                            </div>
                        </div><!-- End row -->
                    </div><!-- End review strip -->

                    <div class="review_strip_single last">
                        <img src="{!! asset('public/front/img/avatar2.') !!}" alt="" class="img-circle">
                        <small> - 10 April 2015 -</small>
                        <h4>Frank Cooper</h4>
                        <p>
                            "Ne mea congue facilis eligendi, possit utamur sensibus id qui, mel tollit euismod alienum eu. Ad tollit lucilius praesent per, ex probo utroque placerat eos. Tale verear efficiendi et cum, meis timeam vix et, et duis debet nostro mel. Aeterno labitur per no, id nec tantas nemore. An minim molestie per, mei sumo vulputate cu."
                        </p>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
                                </div>
                                Food Quality
                            </div>
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                </div>
                                Price
                            </div>
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
                                </div>
                                Punctuality
                            </div>
                            <div class="col-md-3">
                                <div class="rating">
                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                </div>
                                Courtesy
                            </div>
                        </div><!-- End row -->
                    </div><!-- End review strip -->

                </div><!-- End box_style_1 -->
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
@endsection

@section('review_modal')
    @include('_parts.front.review')
@endsection

@section('specificscripts')
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAs_JyKE9YfYLSQujbyFToZwZy-wc09w7s"></script>
    <script src="{!! asset('public/front/js/map_single.js') !!}"></script>
    <script src="{!! asset('public/front/js/infobox.js') !!}"></script>
    <script src="{!! asset('public/front/js/jquery.sliderPro.min.js') !!}"></script>
    <script type="text/javascript">
        $( document ).ready(function( $ ) {
            $( '#Img_carousel' ).sliderPro({
                width: 960,
                height: 500,
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: false,
                smallSize: 500,
                startSlide: 0,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
        });
    </script>
@endsection