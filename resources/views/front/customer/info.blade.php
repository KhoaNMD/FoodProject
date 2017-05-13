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
                                <li class="active">
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
                                <li>
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
                                <i class="icon-comment-inv"></i>
                                <h3>Quản lý bình luận </h3>
                            </div>
                            <div class="box">

                                <hr>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Địa điểm</th>
                                            <th>Ngày đăng</th>
                                            <th>Lượt thích</th>
                                            <th>Lượt xem</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-info">Being prepared</span>
                                            </td>
                                            <td class="center">
                                                <a href="#">
                                                    <i class="icon-search"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-trash-7"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-info">Being prepared</span>
                                            </td>
                                            <td class="center">
                                                <a href="#">
                                                    <i class="icon-search"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-trash-7"></i>
                                                </a>
                                            </td>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-success">Received</span>
                                            </td>
                                            <td class="center">
                                                <a href="#">
                                                    <i class="icon-search"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-trash-7"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-danger">Cancelled</span>
                                            </td>
                                            <td class="center">
                                                <a href="#">
                                                    <i class="icon-search"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-trash-7"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-warning">On hold</span>
                                            </td>
                                            <td class="center">
                                                <a href="#">
                                                    <i class="icon-search"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-trash-7"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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
@endsection