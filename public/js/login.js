$(document).ready(function(){

  $("#login_2").submit(function(e){

    var username = $(this).find("#username").val();
    var password = $(this).find("#password").val();
    var token = $(this).find("#token").val();

    if(!username || !password){
        $(".error").text("All of field is required . ");
    }else{

      $.ajax({
        url : '/login',
        type : 'POST',
        data : { username : username , password : password , _token : token },
        dataType : 'json',
        success : function(response){
            if(response.status === 1){
              window.location.reload();
            }else{
              $('.error').text("Email or Password is wrong. Please try it again !");
            }
        }
      });

    }

  e.preventDefault();

  });


});/**
 * Created by ASUS on 24/03/2017.
 */
