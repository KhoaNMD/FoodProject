/**
 * Created by ASUS on 20/04/2017.
 */
$(document).ready(function(e){
  // Search Post By province.

  // Show template response for search

  $('#image-loading').hide();

  // Set default location.
  if(localStorage.getItem('district_filter') === null || $("#province_filter").val() === "79"){
    $("#district_filter").html(
    " <option value=''> -- Quận / Huyện -- </option>" +
    "<option value =760>1</option><option value =761>12</option>" +
    "<option value =762>Thủ Đức</option>" +
    "<option value =763>9</option>" +
    "<option value =764>Gò Vấp</option>" +
    "<option value =765>Bình Thạnh</option>" +
    "<option value =766>Tân Bình</option>" +
    "<option value =767>Tân Phú</option>" +
    "<option value =768>Phú Nhuận</option>" +
    "<option value =769>2</option>" +
    "<option value =770>3</option>" +
    "<option value =771>10</option>" +
    "<option value =772>11</option>" +
    "<option value =773>4</option>" +
    "<option value =774>5</option>" +
    "<option value =775>6</option>" +
    "<option value =776>8</option>" +
    "<option value =777>Bình Tân</option>" +
    "<option value =778>7</option>" +
    "<option value =783>Củ Chi</option>" +
    "<option value =784>Hóc Môn</option>" +
    "<option value =785>Bình Chánh</option>" +
    "<option value =786>Nhà Bè</option>" +
    "<option value =787>Cần Giờ</option>"
    );
  }else{
    // Show data in select_box_filter class.
    $("#district_filter").html(localStorage.getItem("district_filter"));
  }


  $("#province_filter").change(function(){
    var provinceid = $("#province_filter").val();
    $.ajax({
      url : "/district",
      type : "GET",
      data : { provinceid : provinceid },
      dataType: 'json',
      success: function (response) {
        console.log(response.data);
        if(response.status == 1){
            // Save district get by provinceId in localStorage .
           localStorage.setItem("district_filter",response.data);
           // Save current link with province variable in localStorage.
           localStorage.setItem('current_link',"?province=" + provinceid );
          window.location.href = "?province=" + provinceid ;
        }
      }
    })
  });

  // Search Post By district id.
  $("#district_filter").change(function(){
    var districtid = $("#district_filter").val();
    var htmlTemplate = "";
    $.ajax({
      url : "/restaurant/search/location",
      type : "GET",
      data : { district : districtid },
      dataType: 'json',
      success: function (response) {
        $('#image-loading').show();
        setTimeout(function() {
            if(response.status === 1){
              htmlTemplate = showTemplate(response);
              $("#home").html(htmlTemplate);
            }else{
              $("#home").html(" <div class='text-danger'>Hiện có 0 bài viết theo yêu cầu.</div>");
            }
            $('#image-loading').hide();
          }, 2000);
      }
    })
  });

  // Get Top Post
  $('#top_post').click(function(){
    var provinceId = $("#province_filter").val();
    var districtId = $("#district_filter").val();
    var htmlTemplate = "";
    $.ajax({
      url : "/restaurant/search/location",
      type : "GET",
      data : { province : provinceId , district: districtId },
      dataType: 'json',
      success: function (response) {
        $('#image-loading').show();
        setTimeout(function() {
          if(response.status === 1){
            htmlTemplate = showTemplate(response);
            $("#home").html(htmlTemplate);
          }else{
            $("#home").html(" <div class='text-danger'>Hiện có 0 bài viết theo yêu cầu.</div>");
          }
          $('#image-loading').hide();
        }, 2000);
      }
    })
  });

  // Handle search name
  $("#search_input").keyup(function(){
    var searchInput = $(this).val();
    var provinceId = $("#province_filter").val();
    var districtId = $("#district_filter").val();
    var htmlTemplate = "";
    if($("#search_input").val().length > 0 ) {
      $.ajax({
        url: "/restaurant/search/location",
        type: "GET",
        data: {province: provinceId, district: districtId, searchInput: searchInput},
        dataType: 'json',
        success: function (response) {
          if (response.status === 1) {
            htmlTemplate = searchResultTemplate(response);
            $('ul.sub_search_result').show().html(htmlTemplate);
          } else {
            $('ul.sub_search_result').hide();
          }
        }
      })
    }else{
      $('ul.sub_search_result').hide();
    }
  });





  // Clear storage when loading page.
});/**
 * Created by ASUS on 04/05/2017.
 */
