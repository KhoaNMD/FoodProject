@extends('layout.layout-master')
@section('title','Detail Restaurant')

@section('subheader')
  <section class="parallax-window" data-parallax="scroll"
           data-image-src="{!! asset('public/front/img/sub_header_2.jpg') !!}" data-natural-width="1400"
           data-natural-height="470">
    <div id="subheader">
      <div id="sub_content">
        <div id="thumb"><img src="{!! asset('public/front/img/thumb_restaurant.jpg') !!}" alt=""></div>
        <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
              class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (
          <small><a href="#0">98 reviews</a></small>
          )
        </div>
        <h1>Mexican TacoMex</h1>
        <div><em>Mexican / American</em></div>
        <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB - <strong>Phí vận chuyển:</strong> $10,
          free over $15.
        </div>
      </div><!-- End sub_content -->
    </div><!-- End subheader -->
  </section><!-- End section -->
@endsection

@section('breadcrumb')
  @include('_parts.front.breadcrumb')
  <div class="collapse" id="collapseMap">

  </div><!-- End Map -->

  <div class="container" style="margin-top: 30px;">
  @if( !empty($post->latitude) && !empty($post->longitude) )
      <input type="hidden" id="latitude" value="{!! $post->latitude !!}">
      <input type="hidden" id="longitude" value="{!! $post->longitude !!}">
    <div id="map" class="map"></div>
    @else
    <h4 class="text-danger">Địa điểm này chưa được đăng ký để hiển thị trên map.</h4>
    @endif
  </div>

@endsection

@section('sidebar')
  <div class="container margin_60_35">
    <div class="row">

      <div class="col-md-4">
        <p>
          <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
             aria-controls="collapseMap">Xem trên bản đồ</a>
        </p>
        <div class="box_style_2">
          <h4 class="nomargin_top"> Thời gian phục vụ <i class="icon_clock_alt pull-right"></i></h4>
          <div class="color_deeppink"> {!! date('H:i',strtotime($post->start_time)) !!} ~ {!! date('H:i',strtotime($post->end_time)) !!} </div>
          <br/>
          <h4 class="nomargin_top"> Giá <i class="icon_money_alt pull-right fa fa-money"></i></h4>
          <div class="color_deeppink"> {!! number_format($post->min_price) !!} VND - {!! number_format($post->max_price) !!} VND </div>
          <br/>
          <h4 class="nomargin_top"> Trạng thái <i class="icon_clock_alt pull-right"></i></h4>
          <div class="color_deeppink">
            @if($status)
              <b class="text-success"> Đang hoạt động </b>
            @else
              <b class="text-danger"> Chưa hoạt động</b>
            @endif
          </div>
          <br/>
          <h4 class="nomargin_top"> Địa chỉ <i class="icon_clock_alt pull-right"></i></h4>
          <div class="color_deeppink"> {!! $post->address !!} </div>
          <br/>
          <h4 class="nomargin_top"> Đánh giá <i class="icon_clock_alt pull-right"></i></h4>
          @if(Auth::guard('admin')->check())
            <div class="rating" id="{!! $post->id !!}" data-user-id = {!! Auth::guard('admin')->user()->id !!}>
              <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
              <ul class="rating-post">
                <li class="row">
                  <div class="col-md-6">
                  Món ăn
                  </div>
                  <div class="col-md-6">
                    <span>
                      <a href="#" class="fa fa-star @if( $checkRating['food'] ) disabled-a @endif 'dis" data-for = "rating-for-food" data-mark = "2" onclick="return false;" ></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['food'] ) disabled-a @endif" data-for = "rating-for-food" data-mark = "4" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['food'] ) disabled-a @endif" data-for = "rating-for-food" data-mark = "6" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['food'] ) disabled-a @endif" data-for = "rating-for-food" data-mark = "8" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['food'] ) disabled-a @endif" data-for = "rating-for-food" data-mark = "10" onclick="return false;"></a>
                    </span>
                  </div>
                </li>
                <li class="row">
                  <div class="col-md-6">
                    Không gian
                  </div>
                  <div class="col-md-6">
                    <span>
                      <a href="#" class="fa fa-star @if( $checkRating['space'] ) disabled-a @endif" data-for = "rating-for-space" data-mark = "2" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['space'] ) disabled-a @endif" data-for = "rating-for-space" data-mark = "4" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['space'] ) disabled-a @endif" data-for = "rating-for-space"  data-mark = "6" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['space'] ) disabled-a @endif" data-for = "rating-for-space"  data-mark = "8" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['space'] ) disabled-a @endif" data-for = "rating-for-space"  data-mark = "10" onclick="return false;"></a>
                    </span>
                  </div>
                </li>
                <li class="row">
                  <div class="col-md-6">
                    Phục vụ
                  </div>
                  <div class="col-md-6">
                    <span>
                      <a href="#" class="fa fa-star @if( $checkRating['serve'] ) disabled-a @endif" data-for = "rating-for-serve"  data-mark = "2" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['serve'] ) disabled-a @endif" data-for = "rating-for-serve" data-mark = "4" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['serve'] ) disabled-a @endif" data-for = "rating-for-serve" data-mark = "6" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['serve'] ) disabled-a @endif" data-for = "rating-for-serve" data-mark = "8" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['serve'] ) disabled-a @endif" data-for = "rating-for-serve" data-mark = "10" onclick="return false;"></a>
                    </span>
                  </div>
                </li>
                <li class="row">
                  <div class="col-md-6">
                    Giá cả
                  </div>
                  <div class="col-md-6">
                    <span>
                      <a href="#" class="fa fa-star @if( $checkRating['price'] ) disabled-a @endif" data-for = "rating-for-price" data-mark = "2" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['price'] ) disabled-a @endif" data-for = "rating-for-price" data-mark = "4" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['price'] ) disabled-a @endif" data-for = "rating-for-price"  data-mark = "6" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['price'] ) disabled-a @endif" data-for = "rating-for-price"  data-mark = "8" onclick="return false;"></a>
                    </span>
                    <span>
                       <a href="#" class="fa fa-star @if( $checkRating['price'] ) disabled-a @endif" data-for = "rating-for-price"  data-mark = "10" onclick="return false;"></a>
                    </span>
                  </div>
                </li>
              </ul>
            </div>
          @else
            <div class="text-danger"> Vui lòng đăng nhập để đánh giá</div>
          @endif
          <br/>
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
                @foreach($post->images as $image)
                  <div class="sp-slide">
                   <img alt="" class="sp-image" src="{!! asset($image->url_image) !!}">
                  </div>
                @endforeach
              </div>
              <div class="sp-thumbnails">
                @foreach($post->images as $image)
                  <img alt="" class="sp-thumbnail" src="{!! asset($image->url_image) !!}">
                @endforeach
              </div>
            </div>
            <h3>Thông tin nhà hàng</h3>
            <p class="add_bottom_30">
              {!! $post->describe !!}
            </p>
            <div id="summary_review">
              @if(Auth::guard('admin')->check())
                <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Để lại bình luận</a>
              @else
                <div class="text-danger"> Vui lòng đăng nhập để bình luận </div>
              @endif
            </div><!-- End summary_review -->
            <h5 class="text-success">Hiện có <i>{!! count($post->comments) !!}</i> bình luận cho bài viết này </h5>
            @foreach($post->comments as $comment)
              <div class="review_strip_single">
                <img src="{!! asset($comment->user->url_image) !!}" alt="" class="img-circle">
                <small> {!! date('d-m-Y H:i',strtotime($comment->created_at)) !!} </small>
                <h4>{!! $comment->user->fullname !!}</h4>
                <p>
                  {!! $comment->content !!}
                </p>
                <div class="row">
                  <div class="col-md-3">
                    <div class="rating">
                      <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                          class="icon_star voted"></i><i class="icon_star voted"></i>
                    </div>
                    Food Quality
                  </div>
                  <div class="col-md-3">
                    <div class="rating">
                      <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i
                          class="icon_star"></i><i class="icon_star"></i>
                    </div>
                    Price
                  </div>
                  <div class="col-md-3">
                    <div class="rating">
                      <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                          class="icon_star voted"></i><i class="icon_star"></i>
                    </div>
                    Punctuality
                  </div>
                  <div class="col-md-3">
                    <div class="rating">
                      <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                          class="icon_star voted"></i><i class="icon_star"></i>
                    </div>
                    Courtesy
                  </div>
                </div><!-- End row -->
              </div><!-- End review strip -->
            @endforeach
          </div><!-- End box_style_1 -->
        </div>
    </div><!-- End row -->
  </div><!-- End container -->
@endsection

<!-- Check user login to comment -->
@if(Auth::guard('admin')->check())
  @section('review_modal')
    @include('_parts.front.review')
  @endsection
@endif

@section('specificscripts')
  <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1HfGkvmWJTS64wEKCmG7CvblY5A1swzs&callback=initMap&libraries=places">
  </script>
  {{--<script src="{!! asset('public/front/js/infobox.js') !!}"></script>--}}
  <script src="{!! asset('public/front/js/jquery.sliderPro.min.js') !!}"></script>
  <script src="{!! asset('public/js/comment.js') !!}"></script>
  <script src="{!! asset('public/js/ratingpost.js') !!}"></script>
  <script type="text/javascript">
    $(document).ready(function ($) {
      $('#Img_carousel').sliderPro({
        width: 960,
        height: 500,
        fade: true,
        arrows: true,
        buttons: false,
        fullScreen: true,
        smallSize: 500,
        startSlide: 0,
        mediumSize: 1000,
        largeSize: 3000,
        thumbnailArrows: true,
        autoplay: false
      });
    });
  </script>

  <script>

    function initMap() {

      var map;
      var marker;

      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 106.7741618, lng: 10.8560807},
        zoom: 16,
        mapTypeId:google.maps.MapTypeId.ROAD_MAP
      });

      // Try HTML5 geolocation.
      if (navigator.geolocation) {
        // Get current location and then storing in pos variable.
        navigator.geolocation.getCurrentPosition(function(position) {
          var  lat = document.getElementById("latitude").value * 1;
          var  lng =  document.getElementById("longitude").value * 1;
          var pos = {
            lat: lat,
            lng: lng
          };
          // Marker with current location.
          marker = new google.maps.Marker({
            position: pos,
            map: map,
            animation: google.maps.Animation.BOUNCE
          });

          map.setCenter(pos);

          google.maps.event.addListener(marker, 'dragend', function () {
            document.getElementById("longitude").value = marker.getPosition().lng();
            document.getElementById("latitude").value = marker.getPosition().lat();
          });

        }, function() {
        });
      } else {
        // Browser doesn't support Geolocation
      }
//      var searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));
//
//      google.maps.event.addListener(searchBox, 'places_changed', function () {
//
//        var places = searchBox.getPlaces();
//        var bounds = new google.maps.LatLngBounds();
//        var i, place;
//        for (i = 0; place = places[i]; i++) {
//          bounds.extend(place.geometry.location);
//          marker.setPosition(place.geometry.location);
//        }
//
//        map.fitBounds(bounds);
//        map.setZoom(16);
//      });


    }

  </script>
@endsection