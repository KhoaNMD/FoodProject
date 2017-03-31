@extends('layout.layout-master')
@section('title','Order Step 1')

@section('subheader')
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Place your order</h1>
                <div class="bs-wizard">
                    <div class="col-xs-4 bs-wizard-step active">
                        <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Thông tin của bạn</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-xs-4 bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Hình thức thanh toán</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="cart_2.html" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-xs-4 bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Hoàn tất!</div>
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
        <div class="box_style_2" id="order_process">
            <h2 class="inner">Chi tiết về đơn hàng</h2>
            <div class="form-group">
                <label>Họ</label>
                <input type="text" class="form-control" id="firstname_order" name="firstname_order" placeholder="Họ của bạn">
            </div>
            <div class="form-group">
                <label>Tên</label>
                <input type="text" class="form-control" id="lastname_order" name="lastname_order" placeholder="Tên của bạn">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" id="tel_order" name="tel_order" class="form-control" placeholder="SĐT của bạn">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" id="email_booking_2" name="email_order" class="form-control" placeholder="Email của bạn">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" id="address_order" name="address_order" class="form-control" placeholder="Địa chỉ">
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Thành phố</label>
                        <input type="text" id="city_order" name="city_order" class="form-control" placeholder="Thành phố">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Mã vùng</label>
                        <input type="text" id="pcode_oder" name="pcode_oder" class="form-control" placeholder="Mã vùng">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label><i class="icon-calendar-7"></i> Ngày giao hàng</label>
                        <input class="date-pick form-control" data-date-format="M d, D" type="text">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label><i class=" icon-clock"></i> Thòi gian</label>
                        <input class="time-pick form-control" value="12:00 AM" type="text">
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-12">
                    <label>Gởi lời nhắn cho nhà hàng</label>
                    <textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                </div>
            </div>
        </div><!-- End box_style_1 -->
    </div><!-- End col-md-6 -->

    <!-- YOUR OUDER -->
        <div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar">
                <div id="cart_box">
                    @include('_parts.front.order.yourorder')
                    <hr>
                    <a class="btn_full" href="cart_2.html">Tiến hành thanh toán</a>
                    <a class="btn_full_outline" href="detail_page.html"><i class="icon-right"></i> Thêm món ăn</a>
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

    <!-- Date and time pickers -->
    <script src="{!! asset('public/front/js/bootstrap-datepicker.js') !!}"></script>
    <script src="{!! asset('public/front/js/bootstrap-timepicker.js') !!}"></script>
    <script>
        $('input.date-pick').datepicker('setDate', 'today');
        $('input.time-pick').timepicker({
            minuteStep: 15,
            showInpunts: false
        })
    </script>
@endsection