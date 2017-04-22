/**
 * Created by ASUS on 20/04/2017.
 */
$(document).ready(function(){
  $("#province").change(function(){
    var provinceid = $("#province").val();
    $.ajax({
      url : "/district",
      type : "GET",
      data : { provinceid : provinceid },
      dataType: 'json',
      success: function (response) {
         if(response.status == 1){
          $("#district").html(response.data);
         }
      }
    })
  });
});