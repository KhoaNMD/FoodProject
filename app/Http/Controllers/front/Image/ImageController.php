<?php

namespace App\Http\Controllers\front\Image;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Input;
use Response;
use Redirect;
use Auth;
class ImageController extends Controller
{

  public function __construct()
  {
    $this->middleware('AuthUser');
  }

  public function getUploadImage()
  {
    print_r(Input::file('file'));
    return view('front.customer.upload');
  }

  public function postUploadImage()
  {
    $data = array(
        "post_id" => Input::get("post_id")
    );
    return view('front.customer.upload',$data);
  }

  public function uploadLogo()
  {
      $publicPath = public_path();
      $filePath = "/uploads/photo/";
      $countImages = count($_FILES['file']['name']);
      for($i = 0 ; $i < $countImages; $i++){
        move_uploaded_file($_FILES['file']['tmp_name'][$i],$publicPath.$filePath.$_FILES['file']['name'][$i]);
       $image = Image::create([
            "name"      => $_FILES['file']['name'][$i],
            "type"      => $_FILES['file']['type'][$i] ,
            "size"      => $_FILES['file']['size'][$i],
            "post_id"   => $_POST['post_id'],
            "url_image" => 'public'.$filePath.$_FILES['file']['name'][$i],
            "insert_id" => Auth::guard("admin")->user()->id
        ]);
      }

      $post = DB::table("tbl_post")->where("id","=",$_POST['post_id'])->update(["thumb_id" => $image['id']]);
//      return Redirect::route("restaurant.create");
  }

}
