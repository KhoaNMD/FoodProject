<form action="{!! route('restaurant.index') !!}" method="GET" >
  <div class="col-md-6 col-sm-6 col-xs-12">
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
      <span>
        <select id="search_by_category" class="select_box_district" >
          <option value="" selected> Danh mục </option>
          @foreach($categoryList as $category)
            <option value="{!! $category->id !!}"> {!! $category->name !!} </option>
          @endforeach
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
  <div class="col-md-3 col-sm-3 col-xs-12">
    <select id="search_by_price" class="select_box_district" >
      <option value="" selected> Khoảng giá </option>
      <option value="1"> Dưới 500 nghìn </option>
      <option value="2"> 500 nghìn - 1 triệu  </option>
      <option value="3"> 1 - 3 triệu  </option>
      <option value="4"> Trên 3 triệu </option>
    </select>
  </div>
</form>