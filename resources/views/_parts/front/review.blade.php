<!-- Register modal -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="review" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form method="post" action="#" name="review" id="comment" class="popup-form">
                <div class="login_icon"><i class="icon_comment_alt"></i></div>
                <p class="error"></p>
                <input name="_token" id="token" type="hidden" value="{!! csrf_token() !!}">
                <input id="user_id" type="hidden" value="{!! Auth::guard('admin')->user()->id !!}">
                <input id="post_id" type="hidden" value="{!! $post->id !!}">
                {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<select class="form-control form-white" name="food_review" id="food_review">--}}
                            {{--<option value="">Chất lượng món ăn (Theo thang điểm 10) </option>--}}
                            {{--@for($i = 1; $i <= 10 ; $i = $i + 1)--}}
                                {{--<option value="{!! $i !!}">{!! $i !!}</option>--}}
                            {{--@endfor--}}
                        {{--</select>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<select class="form-control form-white"  name="price_review" id="price_review">--}}
                            {{--<option value="">Giá cả (Theo thang điểm 10)</option>--}}
                            {{--@for($i = 1; $i <= 10 ; $i = $i + 1)--}}
                                {{--<option value="{!! $i !!}">{!! $i !!}</option>--}}
                            {{--@endfor--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div><!--End Row -->--}}

                <div class="row">
                    {{--<div class="col-md-6">--}}
                        {{--<select class="form-control form-white"  name="punctuality_review" id="punctuality_review">--}}
                            {{--<option value="">Thời gian</option>--}}
                            {{--<option value="Low">Tệ</option>--}}
                            {{--<option value="Sufficient">Tạm hợp lý</option>--}}
                            {{--<option value="Good">Đung giờ</option>--}}
                            {{--<option value="Excellent">Rất tốt</option>--}}
                            {{--<option value="Superb">Tuyệt vời</option>--}}
                            {{--<option value="Not rated">Tôi không biết</option>--}}
                        {{--</select>                       </div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<select class="form-control form-white"  name="courtesy_review" id="courtesy_review">--}}
                            {{--<option value="">Phục vụ</option>--}}
                            {{--<option value="Low">Tệ</option>--}}
                            {{--<option value="Sufficient">Bình thường</option>--}}
                            {{--<option value="Good">Tốt</option>--}}
                            {{--<option value="Excellent">Tuyệt vời</option>--}}
                            {{--<option value="Superb">Hoàn hảo</option>--}}
                            {{--<option value="Not rated">Tôi không biết</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                </div><!--End Row -->
                <textarea name="review_text" id="content_comment" class="form-control form-white" style="height:100px" placeholder="Viết bình luận ở đây"></textarea>
                {{--<input type="text" id="verify_review" class="form-control form-white" placeholder="Are you human? 3 + 1 =">--}}
                <input type="submit" value="Submit" class="btn btn-submit" id="submit-review">
            </form>
            <div id="message-review"></div>
        </div>
    </div>
</div><!-- End Register modal -->