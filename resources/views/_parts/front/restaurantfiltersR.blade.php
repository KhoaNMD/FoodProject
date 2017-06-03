<div id="filters_col">
    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Bộ lọc <i class="icon-plus-1 pull-right"></i></a>
    <div class="collapse" id="collapseFilters">
        <div class="filter_type">
            <h6>Khoảng cách</h6>
            <input type="text" id="range" value="" name="range">
            {{--<br/>--}}
            {{--<h6>Thể loại</h6>--}}
            {{--<ul>--}}
              {{--@foreach($categoryList as $category)--}}
                {{--<li>--}}
                  {{--<label>--}}
                    {{--<input type="radio" class="icheck" value="{!! $category->id !!}">{!! $category->name !!}--}}
                  {{--</label>--}}
                {{--</li>--}}
              {{--@endforeach--}}
            {{--</ul>--}}
        </div>
        {{--<div class="filter_type">--}}
            {{--<h6>Rating</h6>--}}
            {{--<ul>--}}
                {{--<li><label><input type="checkbox" class="icheck"><span class="rating">--}}
							{{--<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>--}}
							{{--</span></label></li>--}}
                {{--<li><label><input type="checkbox" class="icheck"><span class="rating">--}}
							{{--<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>--}}
							{{--</span></label></li>--}}
                {{--<li><label><input type="checkbox" class="icheck"><span class="rating">--}}
							{{--<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>--}}
							{{--</span></label></li>--}}
                {{--<li><label><input type="checkbox" class="icheck"><span class="rating">--}}
							{{--<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>--}}
							{{--</span></label></li>--}}
                {{--<li><label><input type="checkbox" class="icheck"><span class="rating">--}}
							{{--<i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>--}}
							{{--</span></label></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="filter_type">--}}
            {{--<h6>Các lựa chọn</h6>--}}
            {{--<ul class="nomargin">--}}
                {{--<li><label><input type="checkbox" class="icheck">Giao hàng</label></li>--}}
                {{--<li><label><input type="checkbox" class="icheck">Mang về</label></li>--}}
                {{--<li><label><input type="checkbox" class="icheck">Khoảng cách 10Km</label></li>--}}
                {{--<li><label><input type="checkbox" class="icheck">Khoảng cách 5Km</label></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </div><!--End collapse -->
</div><!--End filters col-->
