/**
 * Created by ASUS on 27/05/2017.
 */
function ObjectLength( object ) {
  var length = 0;
  for( var key in object ) {
    if( object.hasOwnProperty(key) ) {
      ++length;
    }
  }
  return length;
}

function formatTitle( content ){
  var getString = content;
  if(getString.length > 30){
    getString = content.substr(0,30);
    getString += "...";
  }
  return getString;
}

function formatAddress(content){
  var getString = content;
  if(getString.length > 35){
    getString = content.substr(0,35);
    getString += "...";
  }
  return getString;
}

function showTemplate(responseData) {

  var htmlTemplate = '';
  var count = 0;
  for (var i = 0; i < responseData.data.postList.length; i++) {
    if(count % 3 === 0) {
      htmlTemplate += '<div class="row">';
    }
    count = count + 1;
    htmlTemplate += '<div class="col-md-4 col-sm-4 wow zoomIn" data-wow-delay="0.1s">';
    htmlTemplate += '<div class="strip_list grid">';
    htmlTemplate += '<div class="desc">';
    htmlTemplate += '<div class="thumb_strip">';
    htmlTemplate += '<a href="' + window.location.pathname + '/' + responseData.data.postList[i].id + '">';
    htmlTemplate += '<img src="http://' + window.location.hostname + '/' + responseData.data.postList[i].images[0].url_image + '" alt="">';
    htmlTemplate += '</a>';
    htmlTemplate += '</div>';
    htmlTemplate += ' <div class="content_post">';
    htmlTemplate += '<div>';
    htmlTemplate += '<div class="content_strip_logo">';
    htmlTemplate += responseData.data.postList[i].cnt_rank;
    htmlTemplate += '</div>';
    htmlTemplate += '<div class="content_strip">';
    htmlTemplate += '<div class="post_title">' + formatTitle(responseData.data.postList[i].title) + '</div>';
    htmlTemplate += '<div class="location">';
    htmlTemplate += formatAddress(responseData.data.postList[i].address);
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    if( typeof responseData.data.postList[i].comments[0] !== "undefined" ) {
      htmlTemplate += '<div class="current_comment">';
      htmlTemplate += '<div class="float-left">';
      htmlTemplate += '<img src="' + responseData.data.postList[i].comments[0].user.url_image + '"  width="35px" height="35px" style="border-radius: 40px">';
      htmlTemplate += '</div>';
      htmlTemplate += '<div class="content_strip">';
      htmlTemplate += '<div class="post_title">' + responseData.data.postList[i].comments[0].user.fullname + '</div>';
      htmlTemplate += '<div class="location">';
      htmlTemplate += responseData.data.postList[i].comments[0].content;
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
      htmlTemplate += '</div>';
    }else {
      htmlTemplate += '<div class="current_comment" style="padding: 21px 0">';
      htmlTemplate += 'Chưa có bình luận nào cho địa điểm này.';
      htmlTemplate += '</div>';
    }
    htmlTemplate += '<div class="post_info">';
    htmlTemplate += '<a class="fa fa-comment ml-5 photo" data-toggle="modal" data-target="#modal-comment-' + responseData.data.postList[i].id + ' " ' + ' > ' + ObjectLength(responseData.data.postList[i].comments) + ' </a>';
    htmlTemplate += '<a class="fa fa-camera ml-5 photo" data-toggle="modal" data-target="#modal-' + responseData.data.postList[i].id + ' " ' + ' > ' +  ObjectLength(responseData.data.postList[i].images) + '</a>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    htmlTemplate += '</div>';
    if(count % 3 === 0) {
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

function convertMonthFromIntToString(){
  var month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";

  var d = new Date();
  var n = month[d.getMonth()];
  return n;
}

function searchResultTemplate(responseData){
  htmlTemplate = "";
  var currentTime = new Date();
  var today = currentTime.getDate() + ' ' + convertMonthFromIntToString( currentTime.getMonth() + 1 )  + ' ,' + currentTime.getFullYear();
  for (var i = 0; i < responseData.data.postList.length; i++) {
    htmlTemplate += '<li class="clearfix">';
    htmlTemplate += '<a href="' + window.location.pathname + '/' + responseData.data.postList[i].id + '">';
    htmlTemplate += '<img src="http://' + window.location.hostname + '/' + responseData.data.postList[i].images[0].url_image + ' " width="50px" height="40px" class="float-left">';
    htmlTemplate += '<div class="float-left ml-10">';
    htmlTemplate += '<b>' + responseData.data.postList[i].title + '</b>';
    htmlTemplate += '<p class="font-12">' + formatAddress(responseData.data.postList[i].address) + '</p>';
    htmlTemplate += '</div>';
    htmlTemplate += '<div class="float-right font-11">';
    if( Date.parse(today + ' ' + responseData.data.postList[i].start_time) <= currentTime.getTime() && Date.parse(today + ' ' + responseData.data.postList[i].end_time) >= currentTime.getTime()) {
      htmlTemplate += '<span class="fa fa-circle color_green">';
      htmlTemplate += '</span>';
      htmlTemplate += '<span class="ml-10 font-11 color_green">';
      htmlTemplate += 'Đang hoạt động';
      htmlTemplate += '</span>';
    }else{
      htmlTemplate += '<span class="fa fa-circle color_red">';
      htmlTemplate += '</span>';
      htmlTemplate += '<span class="ml-10 font-11 color_red">';
      htmlTemplate += 'Chưa hoạt động';
      htmlTemplate += '</span>';
    }
    htmlTemplate += '</div>';
    htmlTemplate += '</a>';
    htmlTemplate += '</li>';
  }
  return htmlTemplate;
}


