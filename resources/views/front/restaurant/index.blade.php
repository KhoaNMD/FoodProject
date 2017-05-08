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
    <div class="content">
      <!--  section 1 -->
      <section id="section-1">
        <div class="indent_title_in">
          <i class="icon_house_alt"></i>
          <h3>Danh sách bài viết </h3>
        </div>
        @if(count($userPost) > 0)
        <table class="table table-responsive">
            <thead>
              <tr>
                <td>Tiêu đề</td>
                <td colspan="2" class="text-center"> Chức năng </td>
              </tr>
            </thead>
            <tbody>
          @foreach($userPost as $post)
            <tr>
              <td>{!! $post->title !!}</td>
              <td class="text-center">
                <a href="{!! route('restaurant.edit',$post->id) !!}"> Sửa </a>
              </td>
              <td class="text-center">
                <a href="{!! route('restaurant.destroy',$post->id) !!}"> Xoá </a>
              </td>
            </tr>
          @endforeach
            </tbody>
          </table>
          @else
          <br/>
          <h5 class="text-danger"> Bạn chưa đăng địa điểm nào. Vui lòng chọn tạo địa điểm để đăng.</h5>
        @endif
          </section><!-- End section 1 -->

    </div><!-- End content -->
  </div>
  </div><!-- End container  -->

@endsection

@section('specificscripts')
  <!-- Specific scripts -->

  <script src="{!! asset('public/front/js/bootstrap3-wysihtml5.min.js') !!}"></script>

  <script type="text/javascript">
    $('.wysihtml5').wysihtml5({});
  </script>
@endsection

