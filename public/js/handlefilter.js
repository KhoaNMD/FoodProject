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
    var provinceid = $("#province_filter").val();
    var districtid = $("#district_filter").val();
    var categoryId = $("#search_by_category").val();
    var price = $("#search_by_price").val();
    var htmlTemplate = "";
    $.ajax({
      url : "/restaurant/search/location",
      type : "GET",
      data : { province: provinceid , district : districtid ,categoryid: categoryId , price: price},
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
            $('.quantity_post').html(response.data.numberPost);
          }, 2000);
      }
    })
  });

  // Get Top Post
  $('#top_post').click(function(){
    var provinceId = $("#province_filter").val();
    var districtId = $("#district_filter").val();
    var categoryId = $("#search_by_category").val();
    var htmlTemplate = "";
    $.ajax({
      url : "/restaurant/search/location",
      type : "GET",
      data : { province: provinceId, district: districtId, categoryid: categoryId },
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
          $('.quantity_post').html(response.data.numberPost);
        }, 2000);
      }
    })
  });

  // Get new post.
  $('#new_post').click(function(){
    var provinceId = $("#province_filter").val();
    var districtId = $("#district_filter").val();
    var categoryId = $("#search_by_category").val();
    var htmlTemplate = "";
    $.ajax({
      url : "/restaurant/search/location",
      type : "GET",
      data :  { province: provinceId, district: districtId, categoryid: categoryId , newPost: 1 },
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
          $('.quantity_post').html(response.data.numberPost);
        }, 2000);
      }
    })
  });

  // Search current post by category and distance.
  $('#search_current_post').click(function(){
    var lat = $("#latitude").val();
    var long = $("#longitude").val();
    var getStartEnd = $("#range").val().split(";");
    var categoryId = $("#search_by_category").val();
    var start = getStartEnd[0];
    var end = getStartEnd[1];
    var htmlTemplate = "";
    $.ajax({
      url : "/restaurant/search/location",
      type : "GET",
      data : { lat: lat , long: long , start: start , end: end , categoryid: categoryId },
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
          $('.quantity_post').html(response.data.numberPost);
        }, 2000);
      }
    })
  });

  // Handle search name
  $("#search_input").on('keyup',_.debounce(function() {
    var searchInput = $(this).val();
    var provinceId = $("#province_filter").val();
    var districtId = $("#district_filter").val();
    var categoryId = $("#search_by_category").val();
    var htmlTemplate = "";
    if ($("#search_input").val().length > 0) {
      $.ajax({
        url: "/restaurant/search/location",
        type: "GET",
        data: {province: provinceId, district: districtId, searchInput: searchInput, categoryid: categoryId},
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
    } else {
      $('ul.sub_search_result').hide();
    }
  },500));

  // Current location filter with map API
  $('.current_location_label').click(function(){
    if(!$(this).hasClass('bg-5bc0de')) {
      $(this).removeClass('bg-d8d6d3').addClass('bg-5bc0de').css('color','#fff').html('ON');
    }else{
      $(this).removeClass('bg-5bc0de').addClass('bg-d8d6d3').css('color','#666').html('OFF');
    }
  });

  // Search by category

  $("#search_by_category").change(function(){
    var provinceId = $("#province_filter").val();
    var districtId = $("#district_filter").val();
    var price = $("#search_by_price").val();
    var categoryId = $(this).val();
    var htmlTemplate = "";
    $.ajax({
      url : "/restaurant/search/location",
      type : "GET",
      data : { district : districtId , province: provinceId , categoryid: categoryId , price: price },
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
          $('.quantity_post').html(response.data.numberPost);
        }, 2000);
      }
    })
  });

  $("#search_by_price").change(function(){
    var provinceId = $("#province_filter").val();
    var districtId = $("#district_filter").val();
    var categoryId = $("#search_by_category").val();
    var price = $(this).val();
    var htmlTemplate = "";
    $.ajax({
      url : "/restaurant/search/location",
      type : "GET",
      data : { district : districtId , province: provinceId , categoryid: categoryId , price: price },
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
          $('.quantity_post').html(response.data.numberPost);
        }, 2000);
      }
    })
  });

  // Search by rating
  $('.filter_rating').click(function(){
    var provinceId = $("#province_filter").val();
    var districtId = $("#district_filter").val();
    var categoryId = $("#search_by_category").val();
    var price = $("#search_by_price").val();
    var mark = $(this).attr('data-rate-mark');
    var htmlTemplate = "";
    $.ajax({
      url : "/restaurant/search/location",
      type : "GET",
      data :  { province: provinceId, district: districtId, categoryid: categoryId , price: price , mark: mark },
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
          $('.quantity_post').html(response.data.numberPost);
        }, 2000);
      }
    })
  });

  // Clear storage when loading page.
});/**
 * Created by ASUS on 04/05/2017.
 */


/* SELECT * FROM tbl_post WHERE longitude =? and */