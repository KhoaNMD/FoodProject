@extends('layout.layout-master')
@section('title','Customer')

@section('subheader')
    <!-- SubHeader =============================================== -->
    <section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Khu vực người dùng</h1>
                <p>Tổng hợp các thắc mắc của khách hàng tại đây.</p>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->
@endsection

@section('breadcrumb')
    @include('_parts.front.breadcrumb')
@endsection

@section('sidebar')
    <div class="container margin_60_35">
        <div class="row">

            <div class="col-md-3" id="sidebar">
                <div class="theiaStickySidebar">
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Chào bạn (tên user)</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="#"><i class="fa fa-list"></i> Tất cả bài đăng</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-comments"></i> Tất cả bình luận</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-cutlery"></i> Quản lí địa điểm</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-credit-card"></i> Các đơn đặt hàng</a>
                                </li>
                                <li class="active">
                                    <a href="#"><i class="fa fa-user-circle-o"></i> Quản lý tài khoản</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div><!-- End theiaStickySidebar -->
            </div><!-- End col-md-3 -->
            @endsection

            @section('content')
                <div class="col-md-9">
                    <div class="content">
                        <section>
                            <div class="indent_title_in">
                                <i class="icon_lock_alt"></i>
                                <h3>Đổi mật khẩu </h3>
                            </div>
                            <div class="box">
                                <hr>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password_old" class="customerlabel">Mật khẩu cũ</label>
                                                <input type="password" class="form-control form-control-info" id="password_old">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password_1" class="customerlabel">Mật khẩu mới</label>
                                                <input type="password" class="form-control form-control-info" id="password_1">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password_2" class="customerlabel">Nhập lại mật khẩu mới</label>
                                                <input type="password" class="form-control form-control-info" id="password_2">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu thay đổi</button>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <br>
                            <div class="indent_title_in">
                                <i class="icon-user"></i>
                                <h3>Thông tin cơ bản </h3>
                            </div>
                            <div class="box">
                                <hr>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="firstname" class="customerlabel">Tên:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-info" id="firstname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="lastname" class="customerlabel">Họ:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-info" id="lastname">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="username" class="customerlabel">Tên đăng nhập:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-info" id="username">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <a href="#" class="btn btn-primary btn-sm" class="form-control" id="btn_username">Sửa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="sex" class="customerlabel">Giới tính:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="row" id="sex">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                        <label><input type="radio" value="" checked name="option_2" class="icheck">Nam</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                        <label><input type="radio" value="" name="option_2" class="icheck">Nữ</label>
                                                    </div>
                                                </div><!-- Edn options 2 -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="status" class="customerlabel">Tình trạng hôn nhân:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control form-control-info" id="statuslife"></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="username" class="customerlabel">Ngày sinh:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="date-pick form-control form-control-info" data-date-format="dd/mm/yyyy" type="text" id="birthday">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="detail-info" class="customerlabel">Giới thiệu bản thân:</label>
                                                <textarea class="form-control" id="detail-info"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu thay đổi</button>

                                        </div>
                                    </div>

                                </form>
                            </div>
                            <br>
                            <div class="indent_title_in">
                                <i class="icon-mail-7"></i>
                                <h3>Thông tin liên hệ </h3>
                            </div>
                            <div class="box">
                                <hr>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="email" class="customerlabel">Email:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-info" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="facebook" class="customerlabel">Facebook:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-info" id="facebook">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="skype" class="customerlabel">Skype:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-info" id="skype">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="sdt" class="customerlabel">Số điện thoại:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-info" id="sdt">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu thay đổi</button>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </section>
                    </div>

                </div>
                <!-- End col-md-9 -->
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
    <script>
        $('#faq_box a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 120
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
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