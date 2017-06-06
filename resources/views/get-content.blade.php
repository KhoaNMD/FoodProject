<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
<div class="container">
  <h3> Clone data </h3>
  <form method="post" name="form-html" action="/gethtml">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="form-group">
      <input type="text" name="url_html" class="form-control" placeholder="Đường dẫn dữ liệu">
    </div>
    <div class="form-group">
      <input type="text" name="url_image" class="form-control" placeholder="Đường dẫn hình ảnh">
    </div>
    <input type="submit" class="btn btn-default" name="clone_action" value="Clone data">
  </form>
</div>
</body>
</html>


<?php
use App\Models\Post;
use App\Models\Image;
if(isset($_POST['clone_action']) && !empty($_POST['clone_action'])) {


  require "simple_html_dom.php";



  $con = mysqli_connect("localhost", "root", "", "foodproject");

// Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $html = file_get_html($_POST['url_html']);

  $html_image = file_get_html($_POST['url_image']);

  $id = getData($html);

  getImage($html_image, $id);
}
function getData($html){

  $content = array();
  //table category
//xác định loại hình

  $content['category_id'] = 1;

  $post_title = $html->find("h1[itemprop='name']",0)->innertext;

  $content['title'] = $post_title;

  $post_description = $html->find("meta[name='description']", 0)->content;

  $content['describe'] = $post_description;

  $post_address = $html->find("div[itemprop='address']",0)->plaintext;

  $content['address'] = trim($post_address);

  $web_images = $html->find("img[itemprop='image']",0)->src;

  $post_images = str_replace("s480x300","s",$web_images);


  $capacity = $html->find(".new-detail-info-sec .new-detail-info-area",6);
  $post_capacity = str_replace(["Sức chứa","người lớn"],"",$capacity);

  $content['capacity'] = trim($post_capacity);

  $post_rating=$html->find("span[itemprop='ratingValue']",0)->plaintext;

  $content['cnt_rank'] = $post_rating;

  $content['status'] = 1;

  $price = $html->find("span[itemprop='priceRange'] span",0)->innertext;
  $arr_price=explode(" - ",$price);
  $min_price = rtrim($arr_price[0],"đ");//xóa chữ đ
  $max_price = rtrim($arr_price[1],"đ");

  $content['min_price'] = $min_price;
  $content['max_price'] = $max_price;

  $post_open_time = $html->find("div.micro-timesopen span",4)->innertext;
  $post_close_time = $html->find("div.micro-timesopen span",5)->innertext;

  $content['start_time'] = $post_open_time;
  $content['end_time'] = $post_close_time;

  $content['province'] = 79;
  $content['district'] = 760;

  $post_latitude = $html->find("meta[property='place:location:latitude']",0)->content;
  $post_longitude = $html->find("meta[property='place:location:longitude']",0)->content;

  $content['latitude'] = $post_latitude;
  $content['longitude'] = $post_longitude;

  $content['email'] = "testclone@gmail.com";

  $content['phone'] = "01678757064";

  $content['cnt_view'] = 1;

  $content['thumb_id'] = 123;

  $content['status'] = 1;

  $content['insert_id'] = 1;

  $post = Post::create(
      $content
  );

  return $post->id;

}

function getImage($html_image,$post_id)
{

  $publicPath = public_path();
  $filePath = "/uploads/photo/";

  $menu_images = $publicPath . $filePath;

  if (!is_dir($menu_images)) {//hình menu
    mkdir($menu_images);
  }

  echo "<hr>";

//xác định mấy cái div chứa hình

  $images = $html_image->find("div.micro-home-album-img");

  foreach ($images as $image) {
    $a = $image->find("a", 0);//tìm thẻ a đầu tiên
    //$title = $a->attr['title'];//lấy thuộc tính title trong thẻ a
    $href = $a->href;//lấy href (image url)
    $info = getimagesize($href);

     $type = $info['mime'];//lấy type

     $name = basename($href);//lấy tên

    $url_images = $menu_images . $name;//set đường dẫn

    file_put_contents($url_images, file_get_contents($href));//save hình

    $size = filesize($url_images);

$image = Image::create([
    "name" => $name,
    "type" => $type,
    "size" => $size,
    "post_id" => $post_id,
    "url_image" => 'public' . $filePath . $name,
    "insert_id" => 1,
    "category_image" => 1
]);

  }

  $post = DB::table("tbl_post")->where("id","=",$post_id)->update(["thumb_id" => $image['id']]);


}

function convert_vi_to_en($str)
{
  $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/",'a',$str);
  $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/",'e',$str);
  $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/",'i',$str);
  $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/",'o',$str);
  $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/",'u',$str);
  $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/",'y',$str);
  $str = preg_replace("/(đ)/",'d',$str);
  $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/",'A', $str);
  $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/",'E', $str);
  $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/",'I',$str);
  $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/",'O',$str);
  $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/",'U',$str);
  $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/",'Y',$str);
  $str = preg_replace("/(Đ)/",'D',$str);
  return $str;
}

function getCategoryId($categoryName){
  echo strlen(strtolower(convert_vi_to_en($categoryName)));
  echo json_encode($categoryName);
  echo json_encode("Quán ăn");
  switch (strtolower(convert_vi_to_en($categoryName))){
    case "an vat":
      return 1;
      break;
    case "nha hang":
      return 2;
      break;
    case "buffet":
      return 3;
      break;
    case "sang trong":
      return 4;
      break;
    case "an chay":
      return 5;
      break;
    case "cafe/dessert":
      return 6;
      break;
    case "quan an":
      return 7;
      break;
    case "quán an":
      return 7;
      break;
    case "bar/pub":
      return 8;
      break;
    case "quan nhau":
      return 9;
      break;
    case "beer club":
      return 10;
      break;
    case "tiem banh":
      return 11;
      break;
    case "shop online":
      return 12;
      break;
    case "com van phong":
      return 13;
      break;
    case "khu am thuc":
      return 14;
      break;
  }
}

function getId($district)
{
  switch (strtolower(convert_vi_to_en($district))){
    case "quan 1":
      return 760;
      break;
    case "quan 2":
      return 769;
      break;
    case "quan 3":
      return 770;
      break;
    case "quan 4":
      return 773;
      break;
    case "quan 5":
      return 774;
      break;
    case "quan 6":
      return 775;
      break;
    case "quan 7":
      return 778;
      break;
    case "quan 8":
      return 776;
      break;
    case "quan 9":
      return 763;
      break;
    case "quan 10":
      return 771;
      break;
    case "quan 11":
      return 772;
      break;
    case "quan 12":
      return 761;
      break;
    case "thu duc":
      return 762;
      break;
    case "binh thanh":
      return 765;
      break;
    case "go vap":
      return 764;
      break;
    case "tan binh":
      return 766;
      break;
    case "binh tan":
      return 777;
      break;
    case "phu nhuan":
      return 768;
      break;
    case "tan phu":
      return 767;
      break;
    case "cu chi":
      return 783;
      break;
    case "hoc mon":
      return 784;
      break;
    case "binh chanh":
      return 785;
      break;
    case "nha be":
      return 786;
      break;
    }
}

