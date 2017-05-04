<form action="{!! route('restaurant.index') !!}" method="GET" >
  <div class="col-md-5 col-sm-5 col-xs-12">
      <span>
          <select class="select_box_province" data-icon="glyphicon-heart"  data-width="40%" name="province" id="province">
                  @foreach($provinceList as $province)
                      <option value="{!! $province->provinceid !!}" {!! ( $province->provinceid ==  old('province') ) || ( $province->provinceid ==  79 ) ? "selected" : ''  !!} > {!! $province->name !!} </option>
                  @endforeach
          </select>
      </span>
      <span>
          <select class="select_box_district"  data-width="50%" name="district" id="district">
               <option value="">-- Quận Huyện --</option>
          </select>
      </span>
  </div>
  <div class="col-md-5 col-sm-5 col-xs-12">
      <div class="input-group">
          <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm (vd: dclmm)..." id="thanhtimkiem">
          <span class="input-group-btn">
          <button class="btn btn-default" type="submit" style="margin-left: -2.8em" id="nuttimkiem"><span class="icon-search"></span> </button>
        </span>
      </div><!-- /input-group -->
  </div>
</form>