<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup">
      <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
      <form action="#" class="popup-form" id="Register">
        <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}" id = "token">
        <div class="login_icon">
          <i class="icon_lock_alt"></i>
        </div>
        <div class="error1"></div>
        <input type="text" class="form-control form-white" placeholder="Họ và tên" id = "fullname">
        <input type="email" class="form-control form-white" placeholder="Email" id = "email">
        <input type="text" class="form-control form-white" placeholder="Mật khẩu"  id="password1">
        <input type="text" class="form-control form-white" placeholder="Xác nhận mật khẩu"  id="password2">
        <div id="pass-info" class="clearfix"></div>
        <div class="checkbox-holder text-left">
          <div class="checkbox">
            <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
            <label for="check_2"><span>Tôi đã đọc và đồng ý các <strong>điều khoản và chính sách</strong></span></label>
          </div>
        </div>
        <button type="submit" class="btn btn-submit">Đăng ký</button>
      </form>
    </div>
  </div>
</div><!-- End Register modal -->