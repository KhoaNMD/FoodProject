$(document).ready(function(){


  $("#Register").submit(function(e){

    var fullname = $(this).find("#fullname").val();
    var email = $(this).find("#email").val();
    var password = $(this).find("#password1").val();
    var password1 = $(this).find("#password2").val();
    var token = $(this).find("#token").val();

    var errorContent = "";

    if(!fullname){
      errorContent += "<p> Fullname is required ! </p>" ;
    }

    if(!email){
      errorContent += "<p> Email is required ! </p>" ;
    }

    if(!password){
      errorContent += "<p> Password is required !</p>" ;
    }

    if(!password1){
      errorContent += "<p> Confirm-Password is required ! </p>" ;
    }

    $(".error1").html(errorContent);

    if(!errorContent) {
      if( password !== password1 ){
         errorContent += " <p> Confirm-Password is not same. </p>";
      }else {
        $.ajax({
          url: 'register',
          type: 'POST',
          data: {fullname: fullname, email: email, password: password, _token: token},
          dataType: 'json',
          success: function (response) {
              if(response.status === 1){
                  $(".error1").html("<p> Email has already existed. Please select again ! </p>");
              }else{
                alert("Success for registration ! Thanks guy. ");
                  window.location.reload();
              }
          }
        });
      }
    }



    e.preventDefault();

  });


});/**
 * Created by ASUS on 24/03/2017.
 */
