<form action="{!! route('restaurant.index') !!}" method="GET" >
  <div class="col-md-4 col-sm-4 col-xs-12">
      <span>
          <select class="select_box_province" data-icon="glyphicon-heart"  data-width="40%" name="province" id="province_filter">
            @foreach($provinceList as $province)
              <option value="{!! $province->provinceid !!}" {!! ( isset($_GET['province']) ? $province->provinceid == $_GET['province'] : $province->provinceid == "79" ) ? "selected" : ''  !!} > {!! $province->name !!} </option>
            @endforeach
          </select>
      </span>
      <span>
          <select class="select_box_district"  data-width="50%" name="district" id="district_filter">
               <option value="">-- Quận Huyện --</option>
          </select>
      </span>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
          <ul class="search_result">
            <li>
              <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm (vd: dclmm)..." id="search_input">
              <ul class="sub_search_result">
              </ul>
            </li>
          </ul>
  </div>
</form>