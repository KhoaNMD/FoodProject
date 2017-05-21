/**
 * Created by ASUS on 20/04/2017.
 */
$(document).ready(function(e){
  // Search Post By province.

  // Show template response for search
  function showTemplate(responseData) {
    var htmlTemplate = '';
    var count = 0;
    for (var i = 0; i < responseData.data.postList.length; i++) {
      if(count % 2 === 0) {
        htmlTemplate += '<div class="row">';
      }
      count = count + 1;
      htmlTemplate += '<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">';
      htmlTemplate += '<div class="strip_list grid">';
      htmlTemplate += '<div class="desc">';
      htmlTemplate += '<div class="thumb_strip">';
      htmlTemplate += '<a href="' + window.location.pathname + '/' + responseData.data.postList[i].id + '">';
      htmlTemplate += '<img src="http://' + window.location.hostname + '/' + responseData.data.postList[i].images[0].url_image + '" alt="">';
      htmlTemplate += '</a>';
      htmlTemplate += '</div>';
      htmlTemplate += '<div>';
      htmlTemplate += '<div class="content_strip_logo">';
      htmlTemplate += '7.2';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="content_strip">';
      htmlTemplate += '<div class="post_title">' + responseData.data.postList[i].title + '</div>';
      htmlTemplate += '<div class="location">';
      htmlTemplate += responseData.data.postList[i].address;
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="current_comment">';
      htmlTemplate += '<div class="content_strip_logo">';
      htmlTemplate += '7.2';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="content_strip">';
      htmlTemplate += '<div class="post_title">' + responseData.data.postList[i].title + '</div>';
      htmlTemplate += '<div class="location">';
      htmlTemplate += responseData.data.postList[i].address;
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="post_info">';
      htmlTemplate += '<a class="fa fa-camera ml-5 photo" data-toggle="modal" data-target="#modal-comment-' + responseData.data.postList[i].id + ' " ' + ' > 200 </a>';
      htmlTemplate += '<a class="fa fa-camera ml-5 photo" data-toggle="modal" data-target="#modal-' + responseData.data.postList[i].id + ' " ' + ' > 200 </a>';
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
         if(count % 2 === 0) {
        htmlTemplate += '</div>';
      }
      htmlTemplate += imagesTemplate(responseData.data.postList[i],responseData.data.imageList[responseData.data.postList[i].id]);
    }
      htmlTemplate+= '</div>';
      htmlTemplate += '<div class="row"></div>';
      htmlTemplate += '<a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Xem tiếp...</a>'
      return htmlTemplate;
  }

  function imagesTemplate(responseData,imageList){
    htmlTemplate =  '';
    htmlTemplate += '<div id="modal-' + responseData.id +'" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">';
    htmlTemplate += '<div class="modal-dialog modal-lg" role="document">';
    htmlTemplate += '<div class="modal-content">';
    htmlTemplate += '<div class="modal-header">';
    htmlTemplate += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    htmlTemplate += '<h4 class="modal-title" id="gridSystemModalLabel">Tên nhà hàng</h4>';
    htmlTemplate += '<p>' + responseData.address + '</p>';
    htmlTemplate += '<div id="picturetabs">';
    htmlTemplate += '<div class="row">';
    htmlTemplate += '<div class="col-md-12 col-sm-12 col-xs-12 tabs tabbable responsive" id="tabs">';
    htmlTemplate += '<ul class="nav nav-picture">';
    htmlTemplate += '<li class="active">';
    htmlTemplate += '<a href="#all-image-' + responseData.id + '" data-toggle="tab">Tất cả (' + responseData.images.length + ')</a>';
    htmlTemplate += '</li>';
    htmlTemplate += '<li>';
    htmlTemplate += '<a href="#videopic-' + responseData.id + '" data-toggle="tab">Video ( ';
    if (typeof imageList[1] !== 'undefined') {
      htmlTemplate += imageList[1].length;
    }
    else{
      htmlTemplate += '0';
    }
    htmlTemplate += ')</a>';
    htmlTemplate += '</li>';
    htmlTemplate += '<li>';
    htmlTemplate += '<a href="#monan-'+ responseData.id +' " data-toggle="tab">Món ăn (';
    if (typeof imageList[2] !== 'undefined') {
      htmlTemplate += imageList[2].length;
    }
    else{
      htmlTemplate += '0';
    }
    htmlTemplate += ')</a>';
    htmlTemplate += '</li>';
    htmlTemplate += '<li>';
    htmlTemplate += '<a href="#khonggian-' + responseData.id + '" data-toggle="tab">Không gian (';
    if (typeof imageList[3] !== 'undefined') {
      htmlTemplate += imageList[3].length;
    }
    else{
      htmlTemplate += '0';
    }
    htmlTemplate += ')</a>';
    htmlTemplate += '</li>';
    htmlTemplate += '<li>';
    htmlTemplate += '<a href="#tonghop-' + responseData.id + '" data-toggle="tab">Tổng hợp (';
    if (typeof imageList[4] !== 'undefined') {
      htmlTemplate += imageList[4].length;
    }
    else{
      htmlTemplate += '0';
    }
    htmlTemplate += ')</a>';
    htmlTemplate += '</li>';
    htmlTemplate += '<li>';
    htmlTemplate += '<a href="#thucdon-' + responseData.id + '" data-toggle="tab">Thực đơn (';
    if (typeof imageList[5] !== 'undefined') {
      htmlTemplate += imageList[5].length;
    }
    else{
      htmlTemplate += '0';
    }
    htmlTemplate += ')</a>';
    htmlTemplate += '</li>';
    htmlTemplate += '</ul>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '<div class="modal-body">';
    htmlTemplate += '<div class="tab-content">';

    htmlTemplate += '<div class="tab-pane active" id="all-image-' + responseData.id + '">';
    htmlTemplate += '<ul class="list-inline-custom">';
    for( var image in responseData.images) {
      htmlTemplate += '<li data-toggle="modal" data-target="#myModal">';
      htmlTemplate += '<a href="#myGallery" data-slide-to="0">';
      htmlTemplate += '<img class="img-thumbnail" src="http://' + window.location.hostname + '/' + responseData.images[image].url_image + ' " width="200px" height="100px"><br>';
      htmlTemplate += '</a>';
      htmlTemplate += '</li>';
    }
      htmlTemplate += '</ul>';
      htmlTemplate += '</div>';

      htmlTemplate += '<div class="tab-pane" id="videopic-' + responseData.id + '">';
      htmlTemplate += '<ul class="list-inline-custom">';
      if( typeof imageList[1] !== "undefined" && imageList[1].length){
        for(var i = 0; i < imageList[1].length;i++) {
          htmlTemplate += '<li data-toggle="modal" data-target="#myModal">';
          htmlTemplate += '<a href="#myGallery" data-slide-to="0">';
          htmlTemplate += '<img class="img-thumbnail" src="http://' + window.location.hostname + '/' + imageList[1][i] + '" width="200px" height="100px"><br>';
          htmlTemplate += '</a>';
          htmlTemplate += '</li>';
        }
      } else{
          htmlTemplate += '<p>Hiện không có dữ liệu cho mục này</p>';
      }
      htmlTemplate += '</ul>';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="tab-pane" id="monan-' + responseData.id + '">';
      htmlTemplate += '<ul class="list-inline-custom">';
      if( typeof imageList[2] !== "undefined" && imageList[2].length) {
        for (var i = 0; i < imageList[2].length; i++) {
          htmlTemplate += '<li data-toggle="modal" data-target="#myModal">';
          htmlTemplate += '<a href="#myGallery" data-slide-to="0">';
          htmlTemplate += '<img class="img-thumbnail" src="http://' + window.location.hostname + '/' + imageList[2][i] + '" width="200px" height="100px"><br>';
          htmlTemplate += '</a>';
          htmlTemplate += '</li>';
        }
      }else{
        htmlTemplate += '<p>Hiện không có dữ liệu cho mục này</p>';
      }
      htmlTemplate += '</ul>';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="tab-pane" id="khonggian-' + responseData.id + '">';
      htmlTemplate += '<ul class="list-inline-custom">';
    if( typeof imageList[3] !== "undefined" && imageList[3].length) {
      for (var i = 0; i < imageList[3].length; i++) {
        htmlTemplate += '<li data-toggle="modal" data-target="#myModal">';
        htmlTemplate += '<a href="#myGallery" data-slide-to="0">';
        htmlTemplate += '<img class="img-thumbnail" src="http://' + window.location.hostname + '/' + imageList[3][i] + '" width="200px" height="100px"><br>';
        htmlTemplate += '</a>';
        htmlTemplate += '</li>';
      }
    }else{
      htmlTemplate += '<p>Hiện không có dữ liệu cho mục này</p>';
    }
    htmlTemplate += '</ul>';
    htmlTemplate += '</div>';
    htmlTemplate += '<div class="tab-pane" id="tonghop-' + responseData.id + '">';
    htmlTemplate += '<ul class="list-inline-custom">';
    if( typeof imageList[4] !== "undefined" && imageList[4].length) {
      for (var i = 0; i < imageList[4].length; i++) {
        htmlTemplate += '<li data-toggle="modal" data-target="#myModal">';
        htmlTemplate += '<a href="#myGallery" data-slide-to="0">';
        htmlTemplate += '<img class="img-thumbnail" src="http://' + window.location.hostname + '/' + imageList[4][i] + '" width="200px" height="100px"><br>';
        htmlTemplate += '</a>';
        htmlTemplate += '</li>';
      }
    }else{
      htmlTemplate += '<p>Hiện không có dữ liệu cho mục này</p>';
    }
    htmlTemplate += '</ul>';
    htmlTemplate += '</div>';
    htmlTemplate += '<div class="tab-pane" id="thucdon-' + responseData.id + '">';
    htmlTemplate += '<ul class="list-inline-custom">';
    if( typeof imageList[5] !== "undefined" && imageList[5].length) {
      for (var i = 0; i < imageList[5].length; i++) {
        htmlTemplate += '<li data-toggle="modal" data-target="#myModal">';
        htmlTemplate += '<a href="#myGallery" data-slide-to="0">';
        htmlTemplate += '<img class="img-thumbnail" src="http://' + window.location.hostname + '/' + imageList[5][i] + '" width="200px" height="100px"><br>';
        htmlTemplate += '</a>';
        htmlTemplate += '</li>';
      }
    }else{
      htmlTemplate += '<p>Hiện không có dữ liệu cho mục này</p>';
    }
    htmlTemplate += '</ul>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '<div class="modal-footer">';
    htmlTemplate += '<div class="btn-load-more"><a href="#0">Xem tiếp...</a></div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    return htmlTemplate;
  }

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

  // Clear storage when loading page.
});/**
 * Created by ASUS on 04/05/2017.
 */
