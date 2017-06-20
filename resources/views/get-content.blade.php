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
    <div class="form-group">
      <input type="text" name="url_menu" class="form-control" placeholder="Đường dẫn menu">
    </div>
    <input type="submit" class="btn btn-default" name="clone_action" value="Clone data">
  </form>
</div>
</body>
</html>


<?php
use App\Models\Post;
use App\Models\Image;
use App\Models\CategoryFood;
use App\Models\Food;
if(isset($_POST['clone_action']) && !empty($_POST['clone_action'])) {

  set_time_limit(120);

  require "simple_html_dom.php";

  $con = mysqli_connect("localhost", "root", "", "foodproject");

// Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $html = file_get_html($_POST['url_html']);

  $html_image = file_get_html($_POST['url_image']);

  $html_menu = file_get_html($_POST['url_menu']);

  $id = getData($html);

  getImage($html_image, $id);

  getMenu($html_menu,$id);

}

function getData($html){

  $content = array();
  //table category
//xác định loại hình

  $category_name = $html->find('div.category div.category-items a',0)->innertext;

  $category_id = getCategoryId($category_name);

  $content['category_id'] = $category_id;

  $post_title = $html->find("h1[itemprop='name']",0)->innertext;

  $content['title'] = html_entity_decode($post_title, ENT_QUOTES, "UTF-8");

  $post_description = $html->find("meta[name='description']", 0)->content;

  $content['describe'] = $post_description;

  $post_address = $html->find("div[itemprop='address']",0)->plaintext;

  $content['address'] = html_entity_decode(trim($post_address), ENT_QUOTES, "UTF-8");

  $web_images = $html->find("img[itemprop='image']",0)->src;

  $post_images = str_replace("s480x300","s",$web_images);


  $capacity = $html->find(".new-detail-info-sec .new-detail-info-area",6)->children(1)->children(0)->innertext;

 $post_capacity = str_replace("người lớn","",$capacity);

  $content['capacity'] = $post_capacity;

  $post_rating=$html->find("span[itemprop='ratingValue']",0)->plaintext;

  $content['cnt_rank'] = $post_rating;

  $content['status'] = 1;

  $min_price = $html->find("span[itemprop='priceRange'] span",0)->innertext;
  $max_price =  $html->find("span[itemprop='priceRange'] span span",0)->innertext;

  $content['min_price'] = (int)$min_price * 1000;
  $content['max_price'] = (int)$max_price * 1000;

  $post_open_time = $html->find("div.micro-timesopen span",4)->innertext;
  $post_close_time = $html->find("div.micro-timesopen span",5)->innertext;

  $content['start_time'] = $post_open_time;
  $content['end_time'] = $post_close_time;

  $content['province'] = 79;

  $post_district = $html->find("span[itemprop='addressLocality']",0)->innertext;

  $content['district'] = getId($post_district);

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

  $menu_images = $publicPath . $filePath. $post_id .'/';

  if (!is_dir($menu_images)) {//hình menu
    mkdir($menu_images);
  }

  $images = $html_image->find("div.micro-home-album-img");

  foreach ($images as $image) {
    $a = $image->find("a", 0);//tìm thẻ a đầu tiên
    //$title = $a->attr['title'];//lấy thuộc tính title trong thẻ a
    $href = $a->href;//lấy href (image url)

    $info = getimagesize($href);

     $type = $info['mime'];//lấy type

     $name = basename($href);//lấy tên

    $url_images = $menu_images . $name;//set đường dẫn

    file_put_contents($url_images,file_get_contents($href));//save hình

    $size = filesize($url_images);

  $image = Image::create([
      "name" => $name,
      "type" => $type,
      "size" => $size,
      "post_id" => $post_id,
      "url_image" => 'public' . $filePath . $post_id . '/' . $name,
      "insert_id" => 1,
      "category_image" => 1
  ]);

  }

  $post = DB::table("tbl_post")->where("id","=",$post_id)->update(["thumb_id" => $image['id']]);

}

function getMenu($html_menu,$post_id){

  $publicPath = public_path();
  $filePath = "/uploads/photo/";

  $menu_images = $publicPath . $filePath. $post_id .'/menu'.'/';

  if (!is_dir($menu_images)) {//hình menu
    mkdir($menu_images);
  }

  $content = array();
  $avgPrice = 0;

  foreach( $html_menu->find('div.deli-dish') as $element){
    $flag = true;
    $content['category_name'] = html_entity_decode($element->find('p span',0)->innertext); // Get category name of food.
    $category = CategoryFood::where('name','=',$content['category_name'])->first(); // Find category exists.

    if(count($category) > 0){ // If exist , we will get category id.
     $category_food_id = $category->id;
    }else{ // If not exists , we will create a new category in tbl_category_food and return new id.
     $getId = CategoryFood::create([
         "name" => $content['category_name']
     ]);
     $category_food_id = $getId->id;
    }
    $content['post_id'] = $post_id; // Get post id.
    $content['category_food_id'] = $category_food_id; // Get category id.
    foreach($element->find('div.deli-box-menu-detail') as $subElement){ // Loop through food with category.
      $content['url_image'] = $subElement->find('div.img-food-detail img',0)->src; // Get URL image.
      $content['name'] = html_entity_decode($subElement->find('div.deli-name-food-detail a.deli-title-name-food h3',0)->innertext); // Get food name.
      $content['price'] =  (int)$subElement->find('div.deli-more-info div.product-price p.current-price span',0)->innertext * 1000; // Get food price.

      if($flag){
        $avgPrice += $content['price'];
        $flag = false;
      }

      $name = basename($content['url_image']);//lấy tên

      $url_images = $menu_images . $name;//set đường dẫn

      file_put_contents($url_images,file_get_contents($content['url_image']));//save hình

      Food::create([
          "name"             => $content['name'],
          "price"            => $content['price'],
          "post_id"          => $content['post_id'],
          "category_food_id" => $content['category_food_id'],
          "url_image"        => 'public' . $filePath . $post_id . '/menu/' . $name,
      ]);

    }
  }

  Post::where('id','=',$post_id)->update([ 'avg_food_price' => $avgPrice ]);
}

function convert_vi_to_en($str)
{
  $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/","a",$str);
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
  $categoryName = str_replace(array(","," "),"",$categoryName);

  switch (strtolower(convert_vi_to_en(html_entity_decode($categoryName, ENT_QUOTES, "UTF-8")))){
    case "anvat":
      return 1;
      break;
    case "nhahang":
      return 2;
      break;
    case "buffet":
      return 3;
      break;
    case "sangtrong":
      return 4;
      break;
    case "anchay":
      return 5;
      break;
    case "cafe/dessert":
      return 6;
      break;
    case "quanan":
      return 7;
      break;
    case "bar/pub":
      return 8;
      break;
    case "quannhau":
      return 9;
      break;
    case "beerclub":
      return 10;
      break;
    case "tiembanh":
      return 11;
      break;
    case "shoponline":
      return 12;
      break;
    case "giaocomvanphong":
      return 13;
      break;
    case "khuamthuc":
      return 14;
      break;
    case "anvat/viahe":
      return 15;
      break;
  }
}

function getId($district)
{
  switch (strtolower(convert_vi_to_en(html_entity_decode($district, ENT_QUOTES, "UTF-8")))){
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
    case "quan thu duc":
      return 762;
      break;
    case "quan binh thanh":
      return 765;
      break;
    case "quan go vap":
      return 764;
      break;
    case "quan tan binh":
      return 766;
      break;
    case "quan binh tan":
      return 777;
      break;
    case "quan phu nhuan":
      return 768;
      break;
    case "quan tan phu":
      return 767;
      break;
    case "quan cu chi":
      return 783;
      break;
    case "quan hoc mon":
      return 784;
      break;
    case "quan binh chanh":
      return 785;
      break;
    case "quan nha be":
      return 786;
      break;
    }
}

