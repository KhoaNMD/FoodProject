<div class="container margin_60_35">
  <div class="row">
    <div class="col-md-3" id="sidebar">
      <div class="theiaStickySidebar">
        <div class="panel panel-default sidebar-menu">
          {{--<div class="panel-heading">--}}
            {{--<h5 class="panel-title"> {!! Auth::guard('admin')->user()->fullname !!}</h5>--}}
          {{--</div>--}}
          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="{!! route('posts.user.get') !!}">
                  <i class="fa fa-list"></i> Tất cả bài đăng
                </a>
              </li>
              <li>
                <a href="#"><i class="fa fa-comments"></i> Tất cả bình luận</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-credit-card"></i> Các đơn đặt hàng</a>
              </li>
              <li class="active">
                <a href="{!! route('user.edit',Auth::guard('admin')->user()->id) !!}"><i class="fa fa-user-circle-o"></i> Quản lý tài khoản</a>
              </li>
            </ul>
          </div>
        </div>
      </div><!-- End theiaStickySidebar -->
    </div><!-- End col-md-3 -->