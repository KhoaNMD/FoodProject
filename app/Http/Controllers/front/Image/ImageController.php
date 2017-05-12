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

    return view('front.customer.upload');
  }

  public function postUploadImage()
  {
    $publicPath = public_path();
    $filePath = "/uploads/photo/";
    $countImage = count(Input::get("photo_name"));


    for($i = 0; $i < $countImage; $i++) {
      move_uploaded_file(Input::get("tmp_name")[$i], $publicPath . $filePath . Input::get("name")[$i]);
      $image = Image::create([
          "name" => Input::get("photo_name")[$i],
          "type" => Input::get("photo_type")[$i],
          "size" => Input::get("photo_size")[$i],
          "post_id" => $_POST['post_id'],
          "url_image" => 'public' . $filePath . Input::get("photo_name")[$i],
          "insert_id" => Auth::guard("admin")->user()->id
      ]);
    }

    $post = DB::table("tbl_post")->where("id","=",$_POST['post_id'])->update(["thumb_id" => $image['id']]);

    $data = array(
        "post_id" => Input::get("post_id")
    );
    return view('front.customer.upload',$data);
  }

  public function uploadLogo()
  {
    $response = array(
        "status" => 0,
        "data"   => ""
    );
    // Count number of images for $_FILES.
    $countImages = count($_FILES['file']['name']);
    if($countImages > 0) {
      for ($i = 0; $i < $countImages; $i++) {
        $response['data'][$i]['name'] = $_FILES['file']['name'][$i];
        $response['data'][$i]['type'] = $_FILES['file']['type'][$i];
        $response['data'][$i]['size'] = $_FILES['file']['size'][$i];
        $response['data'][$i]['tmp_name'] = $_FILES['file']['tmp_name'][$i];
      }
    }
    return Response::json($response);
  }

}
