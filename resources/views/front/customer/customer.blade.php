@extends('layout.layout-master')
@section('title','Customer Info')

@section('subheader')
    <!-- SubHeader =============================================== -->
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Quản trị nhà hàng</h1>
                <p>Dành cho các đối tác nhà hàng quản lý thông tin nhà hàng của mình.</p>
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
    <div class="container margin_60">
        <div id="tabs" class="tabs">
            <nav>
                <ul>
                    <li><a href="#section-1" class="icon-profile"><span>Thông tin</span></a>
                    </li>
                    <li><a href="#section-2" class="icon-menut-items"><span>Thực đơn</span></a>
                    </li>
                    <li><a href="#section-3" class="icon-settings"><span>Cài đặt</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content">
                <!--  section 1 -->
                @include('_parts.front.customer.section1')
                <!--  section 2-->
                @include('_parts.front.customer.section2')
                <!--  section 3-->
                @include('_parts.front.customer.section3')
            </div><!-- End content -->
        </div>
    </div><!-- End container  -->
@endsection

@section('specificscripts')
    <!-- Specific scripts -->
    <script src="{!! asset('public/front/js/tabs.js') !!}"></script>
    <script>
        new CBPFWTabs(document.getElementById('tabs'));
    </script>

    <script src="{!! asset('public/front/js/bootstrap3-wysihtml5.min.js') !!}"></script>
    <script type="text/javascript">
        $('.wysihtml5').wysihtml5({});
    </script>
    <script src="{!! asset('public/front/js/dropzone.min.js') !!}"></script>
    <script>
        if ($('.dropzone').length > 0) {
            Dropzone.autoDiscover = false;
            $("#photos").dropzone({
                url: "upload",
                addRemoveLinks: true
            });

            $("#logo_picture").dropzone({
                url: "upload",
                maxFiles: 1,
                addRemoveLinks: true
            });

            $(".menu-item-pic").dropzone({
                url: "upload",
                maxFiles: 1,
                addRemoveLinks: true
            });
        }
    </script>

@endsection