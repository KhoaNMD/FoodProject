/**
 * Created by ASUS on 20/04/2017.
 */
$(document).ready(function(e){
  // Search Post By province.
  $("#province_filter").change(function(){
    var provinceid = $("#province_filter").val();
    $.ajax({
      url : "/district",
      type : "GET",
      data : { provinceid : provinceid },
      dataType: 'json',
      success: function (response) {
        if(response.status == 1){
            // Save district get by provinceId in localStorage .
           localStorage.setItem("district_filter",response.data);
           // Save current link with province variable in localStorage.
           localStorage.setItem('current_link',"?province=" + provinceid );
           window.location.href = "?province=" + provinceid ;
        }
      }
    })
  })
  // Search Post By district id.
  $("#district_filter").change(function(){
    var districtid = $("#district_filter").val();
    window.location.href = localStorage.getItem("current_link") + "&district=" + districtid ;
    });
  // // Show data in select_box_filter class.
  // $("#district_filter").html(localStorage.getItem("district_filter"));

  // Clear storage when loading page.
});/**
 * Created by ASUS on 04/05/2017.
 */
