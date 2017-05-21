{{--quan trọng là class modal-dialog modal-lg để class modal-lg của boottrap hoạt động thì phải fix class modal-dialog (
.modal-dialog {
    /*width: 100%;
    max-width: 560px;*/
    margin: 0 auto
})
 trong file style.css fix 2 dòng witdh và max-width (comment lại hoặc có thể bỏ luôn tùy ý)
 add css vào custom.css để body ko fucking padding-right:17px
 .modal-open {
    padding-right: 0px !important;
    overflow-y: scroll;
}
--}}
<!-- Large modal -->

<div id="modal-comment-{!! $post->id !!}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 1000px;">
    <div class="modal-content modal-comment clearfix">
      <div class="modal-header">
        {{--có mấy id như gridSystemModalLabel thì đặt tùy ý muốn gì cũng dc không ảnh hưởng --}}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

        <div class="modal-content-left">
          <div>
            <img src="{!! asset('public/images/loading.gif') !!}" width ="100%" height="188px">
          </div>
          <div class="location-infor clearfix">
            <div class="location-mark">
              8.0
            </div>
            <div class="location-name">
              <b>Location name here</b>
              <p style="font-size: 13px; overflow: hidden;">Address here asdas s</p>
            </div>
          </div>
        <button class="btn btn-primary" style="width: 100%; margin: 10px 0; height: 40px;"> Bình luận </button>

          <div class="post-rating clearfix">
            <h5 class="text-center">
              9 bình luận
            </h5>
            <ul class="comment-info-number">
              <li>
                1
                <p>Tuyệt vời</p>
              </li>
              <li>
                1
                <p>Khá tốt</p>
              </li>
              <li>
                1
                <p>Trung bình</p>
              </li>
              <li>
                1
                <p>Kém</p>
              </li>
            </ul>
          </div>
        </div>


        <div class="modal-content-right">

            <div class="tab-container">
              <ul class="tab-comments clearfix">
                <li class="active tab-comment-{!! $post->id !!}" id="all-comment-{!! $post->id !!}-1"> Bình luận </li>
                <li class="tab-comment-{!! $post->id !!}" id="friends-comment-{!! $post->id !!}-1"> Bạn bè bình luận</li>
                <li class="tab-comment-{!! $post->id !!}" id="mine-comment-{!! $post->id !!}-1"> Của tôi </li>
              </ul>
            </div>

            <div class="wp-user-comment">
              <div id="all-comment-{!! $post->id !!}" class="tab-comment-content-{!! $post->id !!}">
              @for($i =1 ; $i <= 3; $i++)
              <div class="user-comment clearfix">
               <div class="pd-10">
                <div class="user-infor clearfix">
                  <div class="user-avatar float-left">
                    <img src="{!! asset('public/images/loading.gif') !!}" width="50px" height="50px" style=" border-radius: 30px;">
                  </div>
                  <div class="float-left ml-5">
                    <b class="font-14">Name</b>
                    <h6 class="device-use">
                      <b>via Phone 15/05/2017</b> 7h
                    </h6>
                  </div>
                  <div class="user-mark float-right">
                    7.5
                  </div>
                </div>
                <div class="comment-info">
                  <h5>
                    <b> Status </b>
                  </h5>
                  <div class="content-comment font-14">
                    Mình với chị mình ra ăn, ăn xong mà thấy tiếc tiền. Ăn thì odwr, đồ ăn có bao nhiêu đâu mà tính tận 80-90k ! Kiểu như vậy thì chỉ ăn cho có phong trào còn mà ăn lâu dài thì KHÔNG BAO GIỜ
                    !
                    Mình với chị mình ra ăn, ăn xong mà thấy tiếc tiền. Ăn thì odwr, đồ ăn có bao nhiêu đâu mà tính tận 80-90k ! Kiểu như vậy thì chỉ ăn cho có phong trào còn mà ăn lâu dài thì KHÔNG BAO GIỜ
                    !
                    Mình với chị mình ra ăn, ăn xong mà thấy tiếc tiền. Ăn thì odwr, đồ ăn có bao nhiêu đâu mà tính tận 80-90k ! Kiểu như vậy thì chỉ ăn cho có phong trào còn mà ăn lâu dài thì KHÔNG BAO GIỜ
                    !
                    Mình với chị mình ra ăn, ăn xong mà thấy tiếc tiền. Ăn thì odwr, đồ ăn có bao nhiêu đâu mà tính tận 80-90k ! Kiểu như vậy thì chỉ ăn cho có phong trào còn mà ăn lâu dài thì KHÔNG BAO GIỜ
                    !
                  </div>
                  <div class="font-12">
                    Chi phí: 150,000đ + Sẽ quay lại: Không
                  </div>
                </div>
                <div class="leave-comment">
                  <ul class="feature-comment">
                    <li>
                      <span class="fa fa-heart"></span>
                      Thích
                    </li>
                    <li >
                      <span class="fa fa-comment"></span>
                      Bình luận
                    </li>
                  </ul>
                </div>
              </div>
                <div class="show-all-like pd-10">
                  <span class="fa fa-heart"></span> thanh,tretrau.
                </div>
                <div class="show-all-comment pd-10 clearfix">
                  <div class="user-comment-container clearfix">
                    <img src="{!! asset('public/images/loading.gif') !!}" width="50px" height="50px" style=" border-radius: 30px;" class="float-left">
                    <div class="comment-content dis-inline font-12 float-left ml-10">
                      <div class="user-comment-info">
                        <b> Name </b>
                        Quán cũng ngon ,
                        Quán cũng ngon ,
                        Quán cũng ngon,
                        Quán cũng ngon,
                        Quán cũng ngon,
                        Quán cũng ngon,
                        Quán cũng ngon,
                        Quán cũng ngon
                        <p class="mt5">
                          <i>
                            <b> 17/05/2017 20:20:00 </b>
                          </i>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="user-comment-container clearfix">
                    <img src="{!! asset('public/images/loading.gif') !!}" width="50px" height="50px" style=" border-radius: 30px;" class="float-left">
                    <div class="comment-content dis-inline font-12 float-left ml-10">
                      <div class="user-comment-info">
                        <b> Name </b>
                        Quán cũng ngon ,
                        Quán cũng ngon ,
                        Quán cũng ngon,
                        <p class="mt5">
                          <i>
                            <b> 17/05/2017 20:20:00 </b>
                          </i>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="user-comment-container clearfix">
                    <img src="{!! asset('public/images/loading.gif') !!}" width="40px" height="40px" style="margin-top: 8px; margin-left: 5px;" class="float-left">
                    <div class="comment-content dis-inline font-12 float-left ml-10">
                      <textarea class="form-control" placeholder="Viết bình luận"> </textarea>
                    </div>
                  </div>

                </div>
              </div>
                @endfor
              </div>


              <div id="friends-comment-{!! $post->id !!}" class="tab-comment-content-{!! $post->id !!} ">
                Friend Comment
              </div>

              <div id="mine-comment-{!! $post->id !!}" class="tab-comment-content-{!!  $post->id  !!}">
                Mine comment
              </div>

            </div>
        </div>
    </div>
  </div>
</div>
<!--begin modal window-->
