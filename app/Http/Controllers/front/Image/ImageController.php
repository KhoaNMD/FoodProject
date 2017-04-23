<?php

namespace App\Http\Controllers\front\Image;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use Response;
use Redirect;

class ImageController extends Controller
{
  public function getUploadImage()
  {
    return view('front.customer.upload');
  }

  public function postUploadImage()
  {
    print_r(Input::all());
    $data = array(
        "post_id" => Input::get("post_id")
    );
    return view('front.customer.upload',$data);
  }

  public function uploadLogo()
  {

    $response = array(
        "data" => ""
    );

    for($i = 0; $i < count($_FILES['file']['name']);$i++){
        $response["data"][$i]["name"] =  $_FILES['file']['name'][$i];
        $response["data"][$i]["type"] =  $_FILES['file']['type'][$i];
        $response["data"][$i]["size"] =  $_FILES['file']['size'][$i];
    }

    return Response::json($response['data']);

  }
}
