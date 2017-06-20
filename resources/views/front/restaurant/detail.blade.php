@extends('layout.layout-master')
@section('title','Detail Restaurant')

@section('subheader')
  <section class="parallax-window" data-parallax="scroll"
           data-image-src="{!! asset('public/front/img/sub_header_2.jpg') !!}" data-natural-width="1400"
           data-natural-height="470">
    <div id="subheader">
      <div id="sub_content">
        <div id="thumb"><img src="{!! asset($post->images[0]->url_image) !!}" alt="" width="130px" height="130px"></div>
        <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
              class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (
          <small><a href="#0">{!! count($post->comments) !!} lượt đánh giá</a></small>
          )
        </div>
        <h1>{!! $post->title !!}</h1>
        <div>
          <i class="icon_pin"></i> {!! $post->address !!}
        </div>
      </div><!-- End sub_content -->
    </div><!-- End subheader -->
  </section><!-- End section -->
@endsection

@section('breadcrumb')
  @include('_parts.front.breadcrumb')

  <!-- Create input hidden to store data for creating markers -->
  @if(!empty($dataPostList)))
    <input type="hidden" value='{!! $dataPostList !!}' id ="data_post">
  @endif
  <div id="map_detail_content" class="modal fade bs-example-modal-lg" >
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"> Thông tin vị trí của địa điểm </h4>
        </div>
        <div class="modal-body">
          @if( !empty($post->latitude) && !empty($post->longitude) )
            <div class="row">
              <div class="col-sm-8 col-md-8 col-lg-8">
                <div id="map" class="map"></div>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 category_list">
                <div class="category_list_title">
                  Địa điểm xung quanh
                </div>
                <ul class="current_location">
                  @foreach( $categoryList as $category )
                    <li>
                      {!! $category->name !!}
                      <span>{!! $countCategory[$category->id] !!}</span>
                      <label class="float-right current_location_label bg-d8d6d3" onclick="displayMarkers(this,{!! $category->id !!})"> OFF </label>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          @else
            <h4 class="text-danger">Địa điểm này chưa được đăng ký để hiển thị trên map.</h4>
          @endif
        </div>
      </div>
    </div>
  </div>
    <div class="container" style="margin-top: 30px;">
      <input type="hidden" id="latitude" value="{!! $post->latitude !!}">
      <input type="hidden" id="longitude" value="{!! $post->longitude !!}">
    </div>
  </div>

@endsection

@section('sidebar')
  <div class="container margin_60_35">
    <div class="row">

      <div class="col-md-4">
        <p>
          <a id="map_detail" class="btn_map"  data-toggle="modal"> Xem trên bản đồ </a>
        </p>
        <div class="box_style_2">
          <h4 class="nomargin_top"> Thời gian phục vụ <i class="icon_clock_alt pull-right"></i></h4>
          <div class="color_deeppink"> {!! date('H:i',strtotime($post->start_time)) !!} ~ {!! date('H:i',strtotime($post->end_time)) !!} </div>
          <br/>
          <h4 class="nomargin_top"> Giá <i class="icon_money_alt pull-right fa fa-money"></i></h4>
          <div class="color_deeppink"> {!! number_format($post->min_price) !!} VND - {!! number_format($post->max_price) !!} VND </div>
          <br/>
          <h4 class="nomargin_top"> Sức chứa <i class="icon_money_alt pull-right fa fa-money"></i></h4>
          <div class="color_deeppink"> {!! $post->capacity !!} người</div>
          <br/>
          <h4 class="nomargin_top"> Trạng thái <i class="social_flickr  pull-right"></i></h4>
          <div class="color_deeppink">
            @if($status)
              <b class="text-success"> Đang hoạt động </b>
            @else
              <b class="text-danger"> Chưa hoạt động</b>
            @endif
          </div>
          <br/>
          <h4 class="nomargin_top"> Địa chỉ <i class="icon_pin_alt  pull-right"></i></h4>
          <div class="color_deeppink"> {!! $post->address !!} </div>
          <br/>
          <h4 class="nomargin_top"> Đánh giá <i class="icon_like_alt  pull-right"></i></h4>
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


            <h3>Menu (nếu có)</h3>

            <div class="menu clearfix">
              @foreach($menuList as $menu => $subMenu)
                <div class="menu_section">
                <div class="category_menu ">
                  {!! $menu !!}
                </div>
                  @foreach($subMenu as $value)
                    <div class="menu_content row">
                      <div class="img_menu_food col-sm-2 col-md-2 ">
                        <img src="{!! asset( $value['url_image'] ) !!}" width="60" height="60">
                      </div>
                      <div class="detail_food col-sm-7 col-md-7">
                        <p> <b> {!! $value['name'] !!} </b> </p>
                        <span class="menu-desc">Hộp Macaron 4 vị: Valencia, Morsel of Zen, Ispahan, Yuzucha</span>
                      </div>
                      <div class="food_price col-sm-3 col-md-3 text-right">
                        <span class="txt-blue bold">{!! number_format($value['price'],0) !!}</span>
                        <span class="unit">đ</span>
                      </div>
                    </div>
                   @endforeach
                </div>
              @endforeach
            </div>


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
  <script src="{!! asset('public/js/handlefilter.js') !!}"></script>
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

    // Show map in boostrap modal.
    $("#map_detail").click(function(){
      $("#map_detail_content").modal('show');
      initMap();
    });

    if( document.getElementById('latitude').value  != "" && document.getElementById('longitude').value  != "") {

      var markers = [];
      var map;
      var obj = {};
      if (document.getElementById('data_post').value !== null) {
        obj = JSON.parse(document.getElementById('data_post').value);

      }

      function initMap() {

        var marker;

        centerLatLng = {
          lat: document.getElementById('latitude').value * 1,
          lng: document.getElementById('longitude').value * 1
        }

        map = new google.maps.Map(document.getElementById('map'), {
          center: centerLatLng,
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROAD_MAP
        });

        // Show current marker of post.
        var marker = new google.maps.Marker({
          position: centerLatLng,
          map: map
        });

        if (obj.length > 0) {
          for (var i = 0; i < obj.length; i++) {
            addMarker(obj[i].latitude, obj[i].longitude, obj[i].title, obj[i].category_id);
          }
        }
      }


      function addMarker(latitude, longitude, title, category) {
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(latitude, longitude),
          map: map,
          title: title,
          animation: google.maps.Animation.DROP,
        });
        marker.category_id = category;
        marker.setVisible(false);
        markers.push(marker);
      }

      function displayMarkers(obj, category) {
        var i;

        // Set clicked to catch event click .
        if ($(obj).data('clicked')) {
          $(obj).data('clicked', false);
        } else {
          $(obj).data('clicked', true);
        }

        for (i = 0; i < markers.length; i++) {
          if (markers[i].category_id === category) {

            if ($(obj).data('clicked')) {
              markers[i].setVisible(true);
            } else {
              markers[i].setVisible(false);
            }
          }
        }
      }
    }
  </script>
@endsection
