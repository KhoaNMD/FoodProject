/**
 * Created by ASUS on 29/04/2017.
 */
$(document).ready(function(){
  $('#comment').submit(function(e){

    var content_comment = $(this).find('#content_comment').val();
    var user_id = $(this).find('#user_id').val();
    var post_id = $(this).find('#post_id').val();
    var token = $(this).find('#token').val();

    if(!content_comment){
      $('.error').text("Comment must have more than 1 character.");
    }else{

      $.ajax({
        url : '/comment/add',
        type : 'POST',
        data : { comment: content_comment , user_id : user_id , post_id : post_id , _token : token },
        dataType : 'json',
        success : function(response){
          if(response.status === 1){
            swal("Thành công!", "Cảm ơn đánh giá của bạn", "success");
            window.location.reload();
          }
        }
      });

    }

    e.preventDefault();

  });
});