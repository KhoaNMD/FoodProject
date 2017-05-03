
 <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="{!! route('front.home') !!}" id="logo">
                    <img src="{!! asset('public/front/img/logo.png') !!}" width="190" height="23" alt="" data-retina="true" class="hidden-xs">
                    <img src="{!! asset('public/front/img/logo_mobile.png') !!}" width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="{!! asset('public/front/img/logo.png') !!}" width="190" height="23" alt=""
                             data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                    <ul>
                        <li><a href="{!! route('restaurant.index') !!}">Trang chủ</a></li>
                        <li>
                                @if( !Auth::guard('admin')->check() )
                                    <a href="#0" data-toggle="modal" data-target="#login_2">Đăng nhập</a>
                                @else
                                    <li class="submenu">
                                        <a href = "#">{!! Auth::guard('admin')->user()->email !!}</a>
                                        <ul>
                                            <li>
                                                <a href="{!! route('restaurant.create') !!}"> Tạo địa điểm </a>
                                            </li>
                                            <li>
                                                <a href="{!! route('user.edit', Auth::guard('admin')->user()->id) !!}">Thông tin tài khoản</a>
                                            </li>
                                            <li>
                                                <a href="{!! route('front.user.logout') !!}">Đăng xuất</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                        </li>
                        <li>
                            <a href="#0" data-toggle="modal" data-target="#register">Đăng ký</a>
                        </li>
                        <li>
                            <a href="/faq">Về chúng tôi</a>
                        </li>
                        <li>
                            <a href="http://themeforest.net/item/quickfood-delivery-or-takeaway-food-template/13958100?ref=ansonika">Purchase
                                this template</a>
                        </li>
                    </ul>
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
