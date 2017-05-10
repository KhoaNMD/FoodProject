/**
 * Created by ASUS on 20/04/2017.
 */
$(document).ready(function(e){
  // Search Post By province.
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

  // Show template response for search
  function showTemplate(responseData) {
    var htmlTemplate = '';
    var count = 0;
    for (var i = 0; i < responseData.data.length; i++) {
      count = count + 1;
      console.log(count);
      if(count % 2 === 0) {
        htmlTemplate += '<div class="row">';
      }
      htmlTemplate += '<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">';
      htmlTemplate += '<a class="strip_list grid" href="' + window.location.pathname + '/' + responseData.data[i].id + '">';
      htmlTemplate += '<div class="ribbon_1">Popular</div>';
      htmlTemplate += '<div class="desc">';
      htmlTemplate += '<div class="thumb_strip">';
      htmlTemplate += '<img src="http://' + window.location.hostname + '/' + responseData.data[i].images[0].url_image + '" alt="">';
      htmlTemplate += '</div>';
      htmlTemplate += '<div>';
      htmlTemplate += '<div class="content_strip_logo">';
      htmlTemplate += '7.2';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="content_strip">';
      htmlTemplate += '<div class="post_title">' + responseData.data[i].title + '</div>';
      htmlTemplate += '<div class="location">';
      htmlTemplate += responseData.data[i].address;
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="current_comment">';
      htmlTemplate += '<div class="content_strip_logo">';
      htmlTemplate += '7.2';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="content_strip">';
      htmlTemplate += '<div class="post_title">' + responseData.data[i].title + '</div>';
      htmlTemplate += '<div class="location">';
      htmlTemplate += responseData.data[i].address;
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="post_info">';
      htmlTemplate += '<span class="fa fa-comment"> 200 </span>';
      htmlTemplate += '<span class="fa fa-camera ml-5"> 100 </span>';
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '</a>';
      htmlTemplate += '</div>';
      if(count % 2 === 0) {
        htmlTemplate += '</div>';
      }
    }
    htmlTemplate += '<div class="row"></div>';
    htmlTemplate += '<a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Xem tiếp...</a>'
      return htmlTemplate;
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

  // Clear storage when loading page.
});/**
 * Created by ASUS on 04/05/2017.
 */
