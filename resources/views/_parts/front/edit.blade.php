@extends('layout.layout-master')
@section('title','Restaurant List')

@section('subheader')

  <section class="parallax-window" id="short" data-parallax="scroll"
           data-image-src="{!! asset('public/front/img/sub_header_short.jpg') !!}" data-natural-width="1400"
           data-natural-height="350">
    <div id="subheader">
      <div id="sub_content">
        <h1>Có 24 kết quả gần khu vực của bạn</h1>
        <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB (định vị ở đây)</div>
      </div><!-- End sub_content -->
    </div><!-- End subheader -->
  </section><!-- End section -->

@endsection

@section('breadcrumb')
  @include('_parts.front.breadcrumb')

@endsection

@section('content')
  <div class="container margin_60">
      <div class = "content">
      <section id="section-3">
        @include('_parts.error.inputerror')
        <div class="row">
          <div class="col-md-6 col-sm-6 add_bottom_15">
            <form action = "{!! route('front.user.edit.post',Auth::guard('admin')->id()) !!}" method = "POST">
              <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}">
              <div class="indent_title_in">
                <i class="icon_lock_alt"></i>
                <h3>Change your password</h3>
                <p>
                  Mussum ipsum cacilds, vidis litro abertis.
                </p>
              </div>
              <div class="wrapper_indent">
                <div class="form-group">
                  <label>Old password</label>
                  <input class="form-control" name="old_password" id="old_password" type="password" >
                </div>
                <div class="form-group">
                  <label>New password</label>
                  <input class="form-control" name="new_password" id="new_password" type="password" >
                </div>
                <div class="form-group">
                  <label>Confirm new password</label>
                  <input class="form-control" name="new_password_confirmation" id="confirm_new_password" type="password">
                </div>
                <button type="submit" class="btn_1 green">Update Password</button>
              </div><!-- End wrapper_indent -->
            </form>
          </div>


          <div class="col-md-6 col-sm-6 add_bottom_15">
            <form action = "#" method = "POST">
              <div class="indent_title_in">
                <i class="icon_mail_alt"></i>
                <h3>Change your email</h3>
                <p>
                  Mussum ipsum cacilds, vidis litro abertis.
                </p>
              </div>
              <div class="wrapper_indent">
                <div class="form-group">
                  <label>Old email</label>
                  <input class="form-control" name="old_email" id="old_email" type="email">
                </div>
                <div class="form-group">
                  <label>New email</label>
                  <input class="form-control" name="new_email" id="new_email" type="email">
                </div>
                <div class="form-group">
                  <label>Confirm new email</label>
                  <input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
                </div>
                <button type="submit" class="btn_1 green">Update Email</button>
              </div>
            </form >
            </div><!-- End wrapper_indent -->
          </div>
      </section><!-- End section 3 -->
  </div>
  </div>
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