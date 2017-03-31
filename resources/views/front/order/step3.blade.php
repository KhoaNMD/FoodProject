@extends('layout.layout-master')
@section('title','Order Step 3')

@section('subheader')
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Place your order</h1>
                <div class="bs-wizard">
                    <div class="col-xs-4 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="cart.html" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-xs-4 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="cart_2.html" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-xs-4 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>
                </div><!-- End bs-wizard -->
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
@endsection

@section('breadcrumb')
    @include('_parts.front.breadcrumb')
@endsection

@section('content')
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="box_style_2">
                    <h2 class="inner">Hoàn tất đặt hàng!</h2>
                    <div id="confirm">
                        <i class="icon_check_alt2"></i>
                        <h3>Cám ơn quý khách!</h3>
                        <p>
                            Lorem ipsum dolor sit amet, nostrud nominati vis ex, essent conceptam eam ad. Cu etiam comprehensam nec. Cibo delicata mei an, eum porro legere no.
                        </p>
                    </div>
                    <h4>Thông tin chung</h4>
                    <table class="table table-striped nomargin">
                        <tbody>
                        <tr>
                            <td>
                                <strong>1x</strong> Enchiladas
                            </td>
                            <td>
                                <strong class="pull-right">$11</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>2x</strong> Burrito
                            </td>
                            <td>
                                <strong class="pull-right">$14</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>1x</strong> Chicken
                            </td>
                            <td>
                                <strong class="pull-right">$20</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>2x</strong> Corona Beer
                            </td>
                            <td>
                                <strong class="pull-right">$9</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>2x</strong> Cheese Cake
                            </td>
                            <td>
                                <strong class="pull-right">$12</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Thời gian giao hàng <a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="Xin hãy cân nhắc thời gian giao hàng khoảng 30 phút!"><i class="icon_question_alt"></i></a>
                            </td>
                            <td>
                                <strong class="pull-right">Today 07.30 pm</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="total_confirm">
                                TỔNG CỘNG
                            </td>
                            <td class="total_confirm">
                                <span class="pull-right">$66</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <!-- End Content =============================================== -->
@endsection
