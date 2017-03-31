@extends('layout.layout-master')
@section('title','Order Step 2')

@section('subheader')
    <section class="parallax-window"  id="short"  data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Place your order</h1>
                <div class="bs-wizard">
                    <div class="col-xs-4 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="cart.html" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-xs-4 bs-wizard-step active">
                        <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-xs-4 bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="cart_3.html" class="bs-wizard-dot"></a>
                    </div>
                </div><!-- End bs-wizard -->
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
@endsection

@section('breadcrumb')
    @include('_parts.front.breadcrumb')
@endsection

@section('sidebar')
    <div class="container margin_60_35">
        <div class="row">

            <div class="col-md-3">
                <!-- DELIVERY TIME col-md-3 -->
            @include('_parts.front.order.deliverytime')
            <!-- NEEND HELP col-md-3 -->
                @include('_parts.front.order.needhelp')

            </div><!-- End col-md-3 -->
@endsection

@section('content')
                <div class="col-md-6">
                    <div class="box_style_2">
                        <h2 class="inner">Phương thức thanh toán</h2>
                        <div class="payment_select">
                            <label><input type="radio" value="" checked name="payment_method" class="icheck">Thẻ tín dụng</label>
                            <i class="icon_creditcard"></i>
                        </div>
                        <div class="form-group">
                            <label>Tên chủ thẻ</label>
                            <input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">
                        </div>
                        <div class="form-group">
                            <label>Mã số thẻ</label>
                            <input type="text" id="card_number" name="card_number" class="form-control" placeholder="Card number">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Ngày hết hạn</label>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="mm">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Mã bảo mật</label>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-6">
                                            <img src="{!! asset('public/front/img/icon_ccv.gif') !!}" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--End row -->
                        <div class="payment_select" id="paypal">
                            <label><input type="radio" value="" name="payment_method" class="icheck">Thanh toán bằng paypal</label>
                        </div>
                        <div class="payment_select nomargin">
                            <label><input type="radio" value="" name="payment_method" class="icheck">Thanh toán bằng tiền mặt</label>
                            <i class="icon_wallet"></i>
                        </div>
                    </div><!-- End box_style_1 -->
                </div><!-- End col-md-6 -->
                <!-- YOUR OUDER -->
                <div class="col-md-3" id="sidebar">
                    <div class="theiaStickySidebar">
                        <div id="cart_box">
                            @include('_parts.front.order.yourorder')
                            <hr>
                            <a class="btn_full" href="cart_3.html">Xác nhận đơn hàng</a>
                        </div><!-- End cart_box -->
                    </div><!-- End theiaStickySidebar -->
                </div><!-- End col-md-3 -->
                <!-- End col-md-3 -->
        </div><!-- End row -->
    </div><!-- End container -->
    <!-- End Content =============================================== -->
@endsection

@section('specificscripts')
    <!-- SPECIFIC SCRIPTS -->
    <script src="{!! asset('public/front/js/theia-sticky-sidebar.js') !!}"></script>
    <script>
        jQuery('#sidebar').theiaStickySidebar({
            additionalMarginTop: 80
        });
    </script>
@endsection