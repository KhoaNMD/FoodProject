<!-- Register modal -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="review" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form method="post" action="http://www.ansonika.com/quickfood/assets/review_restaurant.php" name="review" id="review" class="popup-form">
                <div class="login_icon"><i class="icon_comment_alt"></i></div>
                <input name="restaurant_name" id="restaurant_name" type="hidden" value="Mexican Taco Mex">
                <div class="row" >
                    <div class="col-md-6">
                        <input name="name_review" id="name_review" type="text" placeholder="Tên của bạn" class="form-control form-white">
                    </div>
                    <div class="col-md-6">
                        <input name="email_review" id="email_review" type="email" placeholder="Địa chỉ email" class="form-control form-white">
                    </div>
                </div><!-- End Row -->

                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control form-white" name="food_review" id="food_review">
                            <option value="">Chất lượng món ăn</option>
                            <option value="Low">Thấp</option>
                            <option value="Sufficient">Tạm được</option>
                            <option value="Good">Tốt</option>
                            <option value="Excellent">Tuyệt vời</option>
                            <option value="Superb">Hoàn hảo</option>
                            <option value="Not rated">Tôi không biết</option>
                        </select>                            </div>
                    <div class="col-md-6">
                        <select class="form-control form-white"  name="price_review" id="price_review">
                            <option value="">Giá cả</option>
                            <option value="Low">Không hợp lý</option>
                            <option value="Sufficient">Tạm được</option>
                            <option value="Good">Tốt</option>
                            <option value="Excellent">Tuyệt vời</option>
                            <option value="Superb">Hoàn hảo</option>
                            <option value="Not rated">Tôi không biết</option>
                        </select>
                    </div>
                </div><!--End Row -->

                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control form-white"  name="punctuality_review" id="punctuality_review">
                            <option value="">Thời gian</option>
                            <option value="Low">Tệ</option>
                            <option value="Sufficient">Tạm hợp lý</option>
                            <option value="Good">Đung giờ</option>
                            <option value="Excellent">Rất tốt</option>
                            <option value="Superb">Tuyệt vời</option>
                            <option value="Not rated">Tôi không biết</option>
                        </select>                       </div>
                    <div class="col-md-6">
                        <select class="form-control form-white"  name="courtesy_review" id="courtesy_review">
                            <option value="">Phục vụ</option>
                            <option value="Low">Tệ</option>
                            <option value="Sufficient">Bình thường</option>
                            <option value="Good">Tốt</option>
                            <option value="Excellent">Tuyệt vời</option>
                            <option value="Superb">Hoàn hảo</option>
                            <option value="Not rated">Tôi không biết</option>
                        </select>
                    </div>
                </div><!--End Row -->
                <textarea name="review_text" id="review_text" class="form-control form-white" style="height:100px" placeholder="Viết bình luận ở đây"></textarea>
                <input type="text" id="verify_review" class="form-control form-white" placeholder="Are you human? 3 + 1 =">
                <input type="submit" value="Submit" class="btn btn-submit" id="submit-review">
            </form>
            <div id="message-review"></div>
        </div>
    </div>
</div><!-- End Register modal -->