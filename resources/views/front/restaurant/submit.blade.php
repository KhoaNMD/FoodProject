@extends('layout.layout-master')
@section('title','Submit Restaurant')

@section('subheader')
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Work with us</h1>
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
    <!-- Content ================================================== -->
    <div class="container margin_60_35">
        <!-- Info submit -->
        @include('_parts.front.submitrestaurant.info')
    </div><!-- End container -->

    <div class="white_bg">
        <div class="container margin_60_35">
            <!-- Our Plan -->
            @include('_parts.front.submitrestaurant.plan')
        </div><!-- End container -->
    </div><!-- End white_bg -->

    <div class="container margin_60">
        <!-- Submit Form -->
        @include('_parts.front.submitrestaurant.submitform')
    </div><!-- End container  -->
    <!-- End Content =============================================== -->
@endsection

