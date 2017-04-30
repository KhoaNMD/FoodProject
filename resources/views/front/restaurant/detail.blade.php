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
    <div id="map" class="map"></div>
  </div><!-- End Map -->

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
          <h4 class="nomargin_top">Thời gian phục vụ <i class="icon_clock_alt pull-right"></i></h4>
          <div class="color_deeppink"> {!! date('H:i',strtotime($post->start_time)) !!} ~ {!! date('H:i',strtotime($post->end_time)) !!} </div>
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
              <div id="general_rating">
                11 Reviews
                <div class="rating">
                  <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                      class="icon_star voted"></i><i class="icon_star"></i>
                </div>
              </div>

              <div class="row" id="rating_summary">
                <div class="col-md-6">
                  <ul>
                    <li>Chất lượng món ăn
                      <div class="rating">
                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                            class="icon_star"></i><i class="icon_star"></i>
                      </div>
                    </li>
                    <li>Giá cả
                      <div class="rating">
                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                            class="icon_star voted"></i><i class="icon_star"></i>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li>Thời gian
                      <div class="rating">
                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i
                            class="icon_star"></i><i class="icon_star"></i>
                      </div>
                    </li>
                    <li>Phục vụ
                      <div class="rating">
                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                            class="icon_star voted"></i><i class="icon_star"></i>
                      </div>
                    </li>
                  </ul>
                </div>
              </div><!-- End row -->
              <hr class="styled">
              <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Để lại bình luận</a>
            </div><!-- End summary_review -->
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

@section('review_modal')
  @include('_parts.front.review')
@endsection

@section('specificscripts')
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAs_JyKE9YfYLSQujbyFToZwZy-wc09w7s"></script>
  <script src="{!! asset('public/front/js/map_single.js') !!}"></script>
  <script src="{!! asset('public/front/js/infobox.js') !!}"></script>
  <script src="{!! asset('public/front/js/jquery.sliderPro.min.js') !!}"></script>
  <script src="{!! asset('public/js/comment.js') !!}"></script>
  <script type="text/javascript">
    $(document).ready(function ($) {
      $('#Img_carousel').sliderPro({
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