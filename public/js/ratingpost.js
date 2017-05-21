/**
 * Created by ASUS on 20/05/2017.
 */
$(document).ready(function(){
  $('div.rating ul.rating-post span a').click(function(){
    var _t = $(this);
    var postId = $(this).parents('.rating').attr('id');
    var userId = $(this).parents('.rating').attr('data-user-id');
    var mark = $(this).attr('data-mark');
    var ratingFor = $(this).attr('data-for');
    var token =  $('.rating input#token').val();
    if(postId !== "undefined" && userId !== "undefined"){
      $.ajax({
        url : "/restaurant/rating",
        type : "POST",
        data: { postId: postId, userId: userId , _token: token , mark: mark , ratingFor: ratingFor },
        dataType: "json",
        success: function(response){
          if(response.status === 1){ // Success;
            swal("Thành công!", "Cảm ơn đánh giá của bạn", "success");
            _t.addClass('disabled-a').parent().siblings().children("a").addClass('disabled-a');
          }else if( response.status === 2){ // input error
            swal("Thất bại!", "Đã xảy ra lỗi , vui lòng thử lại", "error");
          }else{ // create success but saving is fail.
            swal("Thất bại!", "Đã xảy ra lỗi , vui lòng thử lại", "error");
          }
        }
      })
    }
  });
});