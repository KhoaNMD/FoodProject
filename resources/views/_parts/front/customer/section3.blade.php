<section id="section-3">

    <div class="row">

        <div class="col-md-6 col-sm-6 add_bottom_15">
            <div class="indent_title_in">
                <i class="icon_lock_alt"></i>
                <h3>Đổi mật khẩu</h3>
                <p>
                    Đổi mật khẩu mới để tăng tính bảo mật cho tài khoản.
                </p>
            </div>
            <div class="wrapper_indent">
                <div class="form-group">
                    <label>Mật khẩu cũ</label>
                    <input class="form-control" name="old_password" id="old_password" type="password">
                </div>
                <div class="form-group">
                    <label>Mật khẩu mới</label>
                    <input class="form-control" name="new_password" id="new_password" type="password">
                </div>
                <div class="form-group">
                    <label>Xác nhận lại mật khẩu mới</label>
                    <input class="form-control" name="confirm_new_password" id="confirm_new_password" type="password">
                </div>
                <button type="submit" class="btn_1 green">Cập nhật mật khẩu</button>
            </div><!-- End wrapper_indent -->
        </div>

        <div class="col-md-6 col-sm-6 add_bottom_15">
            <div class="indent_title_in">
                <i class="icon_mail_alt"></i>
                <h3>Đổi email mới</h3>
                <p>
                    Thay email khi bạn không còn xài email cũ.
                </p>
            </div>
            <div class="wrapper_indent">
                <div class="form-group">
                    <label>Email cũ</label>
                    <input class="form-control" name="old_email" id="old_email" type="email">
                </div>
                <div class="form-group">
                    <label>Email mới</label>
                    <input class="form-control" name="new_email" id="new_email" type="email">
                </div>
                <div class="form-group">
                    <label>Xác nhận lại email mới</label>
                    <input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
                </div>
                <button type="submit" class="btn_1 green">Cập nhật email</button>
            </div><!-- End wrapper_indent -->
        </div>

    </div><!-- End row -->

    <hr class="styled_2">

    <div class="indent_title_in">
        <i class="icon_shield"></i>
        <h3>Thiết lập thông báo</h3>
        <p>
            Cài đặt các thông báo cho nhà hàng.
        </p>
    </div>
    <div class="row">

        <div class="col-md-6 col-sm-6">
            <div class="wrapper_indent">
                <table class="table table-striped notifications">
                    <tbody>
                    <tr>
                        <td style="width:5%">
                            <i class="icon_pencil-edit_alt"></i>
                        </td>
                        <td style="width:65%">
                            Đơn hàng mới
                        </td>
                        <td style="width:35%">
                            <label>
                                <input type="checkbox" name="option_1_settings" checked class="icheck" value="yes">Yes</label>
                            <label class="margin_left">
                                <input type="checkbox" name="option_1_settings" class="icheck" value="no">No</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="icon_pencil-edit_alt"></i>
                        </td>
                        <td>
                            Đơn hàng đã được sửa
                        </td>
                        <td>
                            <label>
                                <input type="checkbox" name="option_2_settings" checked class="icheck" value="yes">Yes</label>
                            <label class="margin_left">
                                <input type="checkbox" name="option_2_settings" class="icheck" value="no">No</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="icon_pencil-edit_alt"></i>
                        </td>
                        <td>
                            Có đăng ký mới
                        </td>
                        <td>
                            <label>
                                <input type="checkbox" name="option_3_settings" checked class="icheck" value="yes">Yes</label>
                            <label class="margin_left">
                                <input type="checkbox" name="option_3_settings" class="icheck" value="no">No</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="icon_pencil-edit_alt"></i>
                        </td>
                        <td>
                            Có bình luận mới
                        </td>
                        <td>
                            <label>
                                <input type="checkbox" name="option_4_settings" checked class="icheck" value="yes">Yes</label>
                            <label class="margin_left">
                                <input type="checkbox" name="option_4_settings" class="icheck" value="no">No</label>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn_1 green">Cập nhật lại các thiết lập</button>
            </div>

        </div><!-- End row -->
    </div><!-- End wrapper_indent -->

</section><!-- End section 3 -->