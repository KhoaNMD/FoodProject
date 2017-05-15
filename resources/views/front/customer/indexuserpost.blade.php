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
                <div class="indent_title_in">
                    <i class="icon-comment-inv"></i>
                    <h3>Quản lý bình luận </h3>
                </div>
                <div class="box">
                    <hr>
                    @if(count($userPost) > 0)
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th> Tên nhà hàng</th>
                                    <th> Địa chỉ</th>
                                    <th> Sức chứa</th>
                                    <th> Địa chỉ email</th>
                                    <th> Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($userPost as $post)
                                    <tr style="font-size: 13px;">
                                        <td> {!! $post->title !!} </td>
                                        <td> {!! $post->address !!} </td>
                                        <td> {!! $post->capacity !!} </td>
                                        <td> {!! $post->email !!} </td>
                                        <td style="width:50px;">
                                            <a href="{!! route('restaurant.edit',$post->id) !!}"
                                               class="text-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{!! route('restaurant.destroy',$post->id) !!}"
                                               class="text-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <br/>
                        <h5 class="text-danger"> Bạn chưa đăng địa điểm nào. Vui lòng chọn tạo địa điểm để đăng.</h5>
                    @endif
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