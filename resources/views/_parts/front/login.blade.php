<!-- Login modal -->

<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup">
      <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
      <form action="#" class="popup-form" id="myLogin">
        <div class="login_icon"><i class="icon_lock_alt"></i></div>
        <div class="error"></div>
        <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}" id = "token">
        <input type="text" class="form-control form-white" placeholder="Tên đăng nhập" id = "username">
        <input type="text" class="form-control form-white" placeholder="Mật khẩu" id = "password">
        <div class="text-left">
          <a href="#">Quên mật khẩu?</a>
        </div>
        <button type="submit" class="btn btn-submit" >Đăng nhập</button>
      </form>
    </div>
  </div>
</div><!-- End modal -->