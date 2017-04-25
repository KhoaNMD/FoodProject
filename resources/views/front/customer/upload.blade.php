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
        <form action="{!! route('post.image.post',$post_id) !!}" method="POST" enctype="multipart/form-data">>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
          <input type="hidden" name="post_id" value="{!! old('post_id',$post_id) !!}" id="post_id">
          <div class="indent_title_in">
          <i class="icon_images"></i>
          <h3>Logo và các hình ảnh của nhà hàng</h3>
          </div>

          <div class="wrapper_indent add_bottom_45">
          <div class="form-group">
          <label>Upload your restaurant logo</label>
          <div id="logo_picture" class="dropzone">
          <div class="dz-default dz-message"><span>Click hoặc kéo thả hình ở đây</span>
          </div>
          </div>
          </div>

          <div class="form-group">
          <label>Upload your restaurant photos</label>
          <div id="photos" class="dropzone">
          <div class="dz-default dz-message"><span>Click hoặc kéo thả hình ở đây</span>
          </div>
          </div>
          </div>
          </div><!-- End wrapper_indent -->


          <div class="wrapper_indent">
            <button class="btn_1">Lưu lại ngay</button>
          </div><!-- End wrapper_indent -->
        </form>

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
  <script src="{!! asset('public/front/js/dropzone.js') !!}"></script>
  <script>
    if ($('.dropzone').length > 0) {
      Dropzone.autoDiscover = false;
      $("#photos").dropzone({
        url: "/upload",
        sending: function(file, xhr, formData) {
          // Pass token. You can use the same method to pass any other values as well such as a id to associate the image with for example.
          formData.append("_token", $('#token').val()); // Laravel expect the token post value to be named _token by default
          formData.append("post_id",$("#post_id").val());
        },
        parallelUploads: 5,
        acceptedFiles : "image/jpeg,image/png,image/gif",
        maxFiles: 5,
        uploadMultiple: true,
        addRemoveLinks: true,
      });

      $("#logo_picture").dropzone({
        url: "/upload",
        maxFiles: 1,
        addRemoveLinks: true
      });

      $(".menu-item-pic").dropzone({
        url: "/upload",
        maxFiles: 1,
        addRemoveLinks: true
      });
    }
  </script>


@endsection

