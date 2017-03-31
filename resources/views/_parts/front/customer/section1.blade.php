<section id="section-1">
    <div class="indent_title_in">
        <i class="icon_house_alt"></i>
        <h3>Mô tả chung về nhà hàng</h3>
        <p>Partem diceret praesent mel et, vis facilis alienum antiopam ea, vim in sumo diam sonet. Illud ignota cum te, decore elaboraret nec ea. Quo ei graeci repudiare definitionem. Vim et malorum ornatus assentior, exerci elaboraret eum ut, diam meliore no mel.</p>
    </div>

    <div class="wrapper_indent">
        <div class="form-group">
            <label>Tên nhà hàng</label>
            <input class="form-control" name="restaurant_name" id="restaurant_name" type="text">
        </div>
        <div class="form-group">
            <label>Mô tả về nhà hàng</label>
            <textarea class="wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;"></textarea>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" id="Telephone" name="Telephone" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="Email" name="Email" class="form-control">
                </div>
            </div>
        </div>
    </div><!-- End wrapper_indent -->

    <hr class="styled_2">

    <div class="indent_title_in">
        <i class="icon_pin_alt"></i>
        <h3>Địa chỉ</h3>
        <p>
            Mussum ipsum cacilds, vidis litro abertis.
        </p>
    </div>
    <div class="wrapper_indent">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Khu vực</label>
                    <select class="form-control" name="country" id="country">
                        <option value="" selected>Tùy chọn khu vực</option>
                        <option value="Europe">Europe</option>
                        <option value="United states">United states</option>
                        <option value="Asia">Asia</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Số nhà</label>
                    <input type="text" id="street_1" name="street_1" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Đường</label>
                    <input type="text" id="street_2" name="street_2" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Thành phố</label>
                    <input type="text" id="city_booking" name="city_booking" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Tỉnh</label>
                    <input type="text" id="state_booking" name="state_booking" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Mã bưu chính</label>
                    <input type="text" id="postal_code" name="postal_code" class="form-control">
                </div>
            </div>
        </div><!--End row -->
    </div><!-- End wrapper_indent -->

    <hr class="styled_2">
    <div class="indent_title_in">
        <i class="icon_images"></i>
        <h3>Logo và các hình ảnh của nhà hàng</h3>
        <p>
            Mussum ipsum cacilds, vidis litro abertis.
        </p>
    </div>

    <div class="wrapper_indent add_bottom_45">
        <div class="form-group">
            <label>Upload your restaurant logo</label>
            <div id="logo_picture" class="dropzone">
                <input name="file" type="file">
                <div class="dz-default dz-message"><span>Click hoặc kéo thả hình ở đây</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Upload your restaurant photos</label>
            <div id="photos" class="dropzone">
                <input name="file" type="file" multiple>
                <div class="dz-default dz-message"><span>Click hoặc kéo thả hình ở đây</span>
                </div>
            </div>
        </div>
    </div><!-- End wrapper_indent -->

    <hr class="styled_2">
    <div class="wrapper_indent">
        <button class="btn_1">Lưu lại ngay</button>
    </div><!-- End wrapper_indent -->

</section><!-- End section 1 -->