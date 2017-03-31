@extends('layout.layout-master')
@section('title','About')

@section('subheader')
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Về chúng tôi</h1>
                <p>Qui debitis meliore ex, tollit debitis conclusionemque te eos.</p>
                <p></p>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->
@endsection

@section('breadcrumb')
    @include('_parts.front.breadcrumb')
@endsection

@section('content')
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-4">
                <h3 class="nomargin_top">Một vài điều về chúng tôi</h3>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc <strong>doctus definitiones</strong> an, vix id dicam putent. Ius ornatus instructior in.
                </p>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                </p>
                <h4>Nhiệm vụ</h4>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. <strong>Libris hendrerit</strong> ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                </p>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                </p>
                <h4>Mục tiêu</h4>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. <strong>Libris hendrerit</strong> ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                </p>
            </div>
            <div class="col-md-7 col-md-offset-1 text-right hidden-sm hidden-xs">
                <img src="{!! asset('public/front/img/devices.jpg') !!}" alt="" class="img-responsive">
            </div>
        </div><!-- End row -->
        <hr class="more_margin">
        <div class="main_title">
            <h2 class="nomargin_top">Chất lượng dịch vụ của Quick food</h2>
            <p>
                Cum doctus civibus efficiantur in imperdiet deterruisset.
            </p>
        </div>
        <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature">
                    <i class="icon_building"></i>
                    <h3><span>+ 1000</span> Nhà hàng</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="feature">
                    <i class="icon_documents_alt"></i>
                    <h3><span>+1000</span> Thực đơn</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature">
                    <i class="icon_bag_alt"></i>
                    <h3><span>Giao hàng</span> hoặc mua mang về</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="feature">
                    <i class="icon_mobile"></i>
                    <h3><span>Hỗ trợ tối đa</span> cho điện thoại</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature">
                    <i class="icon_wallet"></i>
                    <h3><span>Thanh toán</span> bằng tiền mặt</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                <div class="feature">
                    <i class="icon_creditcard"></i>
                    <h3><span>Sử dụng thẻ</span> để thanh toán</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 nopadding features-intro-img">
                <div class="features-bg">
                    <div class="features-img">
                    </div>
                </div>
            </div>
            <div class="col-md-6 nopadding">
                <div class="features-content">
                    <h3>"About Khoa 's team"</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    </p>
                    <p>
                        Per ea erant aeque corpora, an agam tibique nec. At recusabo expetendis vim. Tractatos principes mel te, dolor solet viderer usu ad.
                    </p>
                </div>
            </div>
        </div>
    </div><!-- End container-fluid  -->
    <!-- End Content =============================================== -->
@endsection