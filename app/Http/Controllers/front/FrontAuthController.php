<?php

namespace App\Http\Controllers\front;


use Auth;
use View;
use Session;
use Input;
use Redirect;
use Hash;
use Route;
use Crypt;
use URL;
use Request;
use Response;
use App\Models\User;
use App\Models\Image;
use App\Http\Controllers\Controller;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\DB;
use Validator;

class FrontAuthController extends Controller
{
  use AuthenticatesUsers;

  protected $guard = "admin";

    public function __construct()
    {

    }

  public function index(){
      return Redirect::route('restaurant.index');
    }

    public function Login(){

      $response = [
          'status' => '0'
      ];

      $content = [
          'email' => $_POST['username'],
          'password' => $_POST['password']
      ];

//      $checkRemember = $request->input('remember') ? true : false;

      if( Auth::guard('admin')->attempt($content,true) ){
          Session::put('user',Auth::guard('admin')->user()->email);
          $response['status'] = 1;
      }

      return Response::json($response);

    }

    public function Logout(){
      Auth::guard('admin')->logout();
      Session::forget('user');
      return Redirect::route('front.home');
    }

    public function Register()
    {

      $response = [
          'status' => '1'
      ];

      if( count(DB::table('tbl_users')->select("id")->where("email", '=', $_POST['email'])->get()) > 0 ){
          $response['status'] = 1;
      }else{
        User::create([
            "email" => $_POST['email'],
            "fullname" => $_POST['fullname'],
            "password" => Hash::make($_POST['password']),
            "gender" => 0,
            "address" => "",
            "url_image" => "public/uploads/avatar/user.png"
        ]);
      }

     return Response::json($response);
    }

  public function getDistrictById(){

    $response = array(
        "status" => 0,
        "data" => ""
    );
    $provinceId = $_GET['provinceid'];

    // Get all district with province ID.
    $districtList = DB::table("district")->where("provinceid","=",$provinceId)->get();
    // Set default value for select.
    $response['data'] = "<option value=''> -- Quận / Huyện -- </option>";

    // If districtList variable not empty , Getting and storing data in $response['data'] array.
    if( count($districtList) > 0 ) {
      foreach ($districtList as $district) {
        $response['data'] .= "<option value =" . $district->districtid . ">" . $district->name . "</option>";
      }
      $response['status'] = 1;
    }

    return Response::json($response);
  }


}
