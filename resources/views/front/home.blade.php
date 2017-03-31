@extends('layout.layout-master')
@section('subheader')
<div id="full-slider-wrapper">
  <div id="layerslider" style="width:100%;height:600px;">
    <!-- first slide -->
    <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
      <img src="{!! asset('public/front/img/slides/slide_1.jpg') !!}" class="ls-bg" alt="Slide background">
      <h3 class="ls-l slide_typo" style="top: 44%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;" ><strong>Enjoy</strong> a quick friends dinner</h3>
      <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;" >Tự chế biến các slider (khuyến mãi) ở đây</p>
      <p class="ls-l" style="top:64%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;" ><a href="list_page.html" class="button_intro">Tìm kiếm</a> <a href="#0" class="button_intro outline">Hướng dẫn</a></p>
    </div>

    <!-- second slide -->
    <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
      <img  src="{!! asset('public/front/img/slides/slide_4.jpg') !!}" class="ls-bg" alt="Slide background">
      <h3 class="ls-l slide_typo" style="top: 44%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;" >Quick &amp; <strong>affordable</strong> quick food</h3>
      <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;" >Order Quality Takeaway or Delivery Food online</p>
      <p class="ls-l" style="top:64%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;" ><a href="list_page.html" class="button_intro">Search</a> <a href="#0" class="button_intro outline">Read more</a></p>
    </div>

    <!-- third slide -->
    <div class="ls-slide" data-ls="slidedelay:5000; transition2d:5;" >
      <img src="{!! asset('public/front/img/slides/slide_2.jpg') !!}" class="ls-bg" alt="Slide background">
      <h3 class="ls-l slide_typo" style="top: 44%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;" ><strong>Great</strong> Food Quality &amp; Variety</h3>
      <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;" >Order Quality Takeaway or Delivery Food online</p>
      <p class="ls-l" style="top:64%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;" ><a href="list_page.html" class="button_intro">Search</a> <a href="#0" class="button_intro outline">Read more</a></p>
    </div>

    <!-- fourth slide -->
    <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
      <img src="{!! asset('public/front/img/slides/slide_3.jpg') !!}" class="ls-bg" alt="Slide background">
      <h3 class="ls-l slide_typo" style="top: 44%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;" >Stop your <strong>hunger</strong> quickly</h3>
      <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;" >Order Quality Takeaway or Delivery Food online</p>
      <p class="ls-l" style="top:64%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;"><a href="list_page.html" class="button_intro">Search</a> <a href="#0" class="button_intro outline">Read more</a></p>
    </div>
    <div id="count" class="hidden-xs">
      <ul>
        <li><span class="number">2650</span> Nhà hàng</li>
        <li><span class="number">5350</span> Khách hàng</li>
        <li><span class="number">12350</span> Người đăng ký</li>
      </ul>
    </div>
  </div>

</div><!-- End layerslider -->
  @endsection

@section('content')
  <div class="container margin_60">

    <div class="main_title">
      <h2 class="nomargin_top" style="padding-top:0">Cách thức làm việc</h2>
      <p>
        Dưới dây là trình tự hoạt động của hệ thống các nhà hàng.
      </p>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="box_home" id="one">
          <span>1</span>
          <h3>Tìm theo địa chỉ</h3>
          <p>
            Tìm các nhà hàng có sẵn trong khu vực của bạn.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box_home" id="two">
          <span>2</span>
          <h3>Chọn nhà hàng</h3>
          <p>
            Chúng tôi có hơn 300 nhà hàng khắp cả nước.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box_home" id="three">
          <span>3</span>
          <h3>Tiến hành thanh toán</h3>
          <p>
            Nhanh chóng, dễ dàng và bảo mật.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box_home" id="four">
          <span>4</span>
          <h3>Giao hàng hoặc mang về</h3>
          <p>
            Phù hợp cho những người bận rộn.
          </p>
        </div>
      </div>
    </div><!-- End row -->

    <div id="delivery_time" class="hidden-xs">
      <strong><span>2</span><span>5</span></strong>
      <h4>Số phút trung bình để hoàn tất việc giao hàng!</h4>
    </div>
  </div><!-- End container -->

  <div class="white_bg">
    <div class="container margin_60">

      <div class="main_title">
        <h2 class="nomargin_top">Các nhà hàng nổi bật</h2>
        <p>
          Danh sách các nhà hàng nổi bật nhất thông qua sự đánh giá từ hệ thống của chúng tôi.
        </p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <a href="detail_page.html" class="strip_list">
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
                135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
              </div>
              <ul>
                <li>Take away<i class="icon_check_alt2 ok"></i></li>
                <li>Delivery<i class="icon_check_alt2 ok"></i></li>
              </ul>
            </div><!-- End desc-->
          </a><!-- End strip_list-->
          <a href="detail_page.html" class="strip_list">
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
                135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
              </div>
              <ul>
                <li>Take away<i class="icon_check_alt2 ok"></i></li>
                <li>Delivery<i class="icon_check_alt2 ok"></i></li>
              </ul>
            </div><!-- End desc-->
          </a><!-- End strip_list-->
          <a href="detail_page.html" class="strip_list">
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
                135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
              </div>
              <ul>
                <li>Take away<i class="icon_check_alt2 ok"></i></li>
                <li>Delivery<i class="icon_check_alt2 ok"></i></li>
              </ul>
            </div><!-- End desc-->
          </a><!-- End strip_list-->
        </div><!-- End col-md-6-->
        <div class="col-md-6">
          <a href="detail_page.html" class="strip_list">
            <div class="ribbon_1">Popular</div>
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
                135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
              </div>
              <ul>
                <li>Take away<i class="icon_check_alt2 ok"></i></li>
                <li>Delivery<i class="icon_close_alt2 no"></i></li>
              </ul>
            </div><!-- End desc-->
          </a><!-- End strip_list-->
          <a href="detail_page.html" class="strip_list">
            <div class="ribbon_1">Popular</div>
            <div class="desc">
              <div class="thumb_strip">
                <img src="{!! asset('public/front/img/thumb_restaurant_5.jpg ') !!}" alt="">
              </div>
              <div class="rating">
                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
              </div>
              <h3>Dragon Tower</h3>
              <div class="type">
                Chinese / Thai
              </div>
              <div class="location">
                135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
              </div>
              <ul>
                <li>Take away<i class="icon_check_alt2 ok"></i></li>
                <li>Delivery<i class="icon_check_alt2 ok"></i></li>
              </ul>
            </div><!-- End desc-->
          </a><!-- End strip_list-->
          <a href="detail_page.html" class="strip_list">
            <div class="ribbon_1">Popular</div>
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
                135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
              </div>
              <ul>
                <li>Take away<i class="icon_check_alt2 ok"></i></li>
                <li>Delivery<i class="icon_check_alt2 ok"></i></li>
              </ul>
            </div><!-- End desc-->
          </a><!-- End strip_list-->
        </div>
      </div><!-- End row -->

    </div><!-- End container -->
  </div><!-- End white_bg -->

  <div class="high_light">
    <div class="container">
      <h3>Chọn lựa từ hơn 2000 nhà hàng</h3>
      <p>Danh sách tất cả các nhà hàng hiện có trên cả nước</p>
      <a href="list_page.html">Xem tất cả nhà hàng</a>
    </div><!-- End container -->
  </div><!-- End hight_light -->

  <section class="parallax-window-2">
    <div class="parallax-content-2">
      <div class="sub_content">
        <i class="icon_mug"></i>
        <h3>Giao hàng tận nơi làm việc</h3>
        <p>
          Dịch vụ của chúng tôi cũng có thể giao hàng đến các văn phòng làm việc của các bạn
        </p>
      </div><!-- End sub_content -->
    </div><!-- End parallax-content-2-->
  </section><!-- End section -->
  <!-- End Content =============================================== -->

  <div class="container margin_60">
    <div class="main_title margin_mobile">
      <h2 class="nomargin_top">Làm việc cùng chúng tôi</h2>
      <p>
        Cum doctus civibus efficiantur in imperdiet deterruisset.
      </p>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <a class="box_work" href="submit_restaurant.html">
          <img src="{!! asset('public/front/img/submit_restaurant.jpg') !!}" width="848" height="480" alt="" class="img-responsive">
          <h3>Submit your Restaurant<span>Start to earn customers</span></h3>
          <p>Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.</p>
          <div class="btn_1">Read more</div>
        </a>
      </div>
      <div class="col-md-4">
        <a class="box_work" href="submit_driver.html">
          <img src="{!! asset('public/front/img/delivery.jpg') !!}" width="848" height="480" alt="" class="img-responsive">
          <h3>We are looking for a Driver<span>Start to earn money</span></h3>
          <p>Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.</p>
          <div class="btn_1">Read more</div>
        </a>
      </div>
    </div><!-- End row -->
  </div><!-- End container -->
@endsection

@section('specificscripts')
  <!-- SPECIFIC SCRIPTS -->
  <script src="{!! asset('public/front/layerslider/js/greensock.js') !!}"></script>
  <script src="{!! asset('public/front/layerslider/js/layerslider.transitions.js') !!}"></script>
  <script src="{!! asset('public/front/layerslider/js/layerslider.kreaturamedia.jquery.js') !!}"></script>
  <script type="text/javascript">
      $(document).ready(function(){
          'use strict';
          $('#layerslider').layerSlider({
              autoStart: true,
              responsive: true,
              responsiveUnder: 1280,
              layersContainer: 1170,
              navButtons:false,
              showCircleTimer:false,
              navStartStop:false,
              skinsPath: 'layerslider/skins/'
              // Please make sure that you didn't forget to add a comma to the line endings
              // except the last line!
          });
      });
  </script>

@endsection