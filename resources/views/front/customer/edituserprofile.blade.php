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


@section('content')
    @include('_parts.front.customer.sidebar')
    <div class="col-md-9">
        <div class="content">
            <section>
                @include('_parts.error.inputerror')
                @include('_parts.messages.message')
                <div class="indent_title_in">
                    <i class="icon_lock_alt"></i>
                    <h3>Đổi mật khẩu </h3>
                </div>
                <div class="box">
                    <hr>
                    <form action="{!! route('user.update',$user->id) !!}" method="POST">
                        <input type="hidden" name="_method" value="PUT"/>
                        <input type="hidden" name="update" value="1">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="old_password" class="customerlabel">Mật khẩu cũ</label>
                                    <input type="password" name="old_password" class="form-control form-control-info"
                                           id="old_password" placeholder="Mật khẩu cũ">
                                </div>
                                <div class="form-group">
                                    <label for="password_1" class="customerlabel">Mật khẩu mới</label>
                                    <input type="password" name="new_password" class="form-control form-control-info"
                                           id="new_password" placeholder="Mật khẩu mới">
                                </div>
                                <div class="form-group">
                                    <label for="password_2" class="customerlabel">Nhập lại mật khẩu mới</label>
                                    <input type="password" name="new_password_confirmation"
                                           class="form-control form-control-info" id="confirm_new_password"
                                           placeholder="Nhập lại mật khẩu mới">
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu thay đổi</button>
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
                    <form action="{!! route('user.update',$user->id) !!}" method="POST">
                        <input type="hidden" name="_method" value="PUT"/>
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <input type="hidden" name="update" value="2">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="fullname" class="customerlabel">Họ Tên:</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="fullname" value="{!! old('fullname',$user->fullname) !!}"
                                           class="form-control form-control-info" id="fullname" placeholder="Họ tên">
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
                                            <label><input type="radio" name="gender" value="1" class="icheck"
                                                          @if($user->gender == 1 || $user->gender == '') checked @endif>Nam</label>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                            <label><input type="radio" name="gender" value="2" class="icheck"
                                                          @if($user->gender == 2) checked @endif>Nữ</label>
                                        </div>
                                    </div><!-- Edn options 2 -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="birthday" class="customerlabel">Ngày sinh:</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @include('_parts/timepicker.datepicker',['placeholder' => "Ngày tháng năm sinh",'name' => 'birthday' , 'value' => old('birthday',(App\Http\Utils\FormatDateTime4Display::formatDate4Display($user->birthday)))])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="phone" class="customerlabel">Số điện thoại:</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class=" form-control form-control-info" type="text" name="phone" id="phone"
                                           placeholder="Số điện thoại" value="{!! old("phone",$user->phone) !!}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="address" class="customerlabel">Địa chỉ:</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class=" form-control form-control-info" type="text" name="address"
                                           id="address" placeholder="Địa chỉ"
                                           value="{!! old("address",$user->address) !!}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu thay đổi</button>
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

@endsection