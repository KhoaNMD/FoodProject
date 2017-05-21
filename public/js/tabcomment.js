// /**
//  * Created by ASUS on 18/05/2017.
//  */
//
// $(document).ready(function(){
//   var id = "";
//   $(".comment-click").click(function(){
//     id = $(this).attr("id");
//     });
//
//     $('.tab-comment-content-' + id).not("#all-comment-" + id).hide();
//     $(".tab-comment-" + id).click(function(){
//       var getIndexOf1 = $(this).attr("id").indexOf("1");
//       var currentTab = $(this).attr("id").substr(0,getIndexOf1);
//       $("#" + currentTab).show(); // show currentTab with id .
//       $(".tab-comment-content-" + id).not("#" + currentTab).hide(); // Hide the others tab.
//       $(".tab-comment-" + id).not("#" + currentTab).removeClass("active"); // Remove class "active" of the others tab
//       $(this).addClass("active"); // Add class active in current tab.
//     });
// });