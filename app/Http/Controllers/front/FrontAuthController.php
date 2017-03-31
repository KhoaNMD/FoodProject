<?php

namespace App\Http\Controllers\front;


use Auth;
use View;
use Session;
use Input;
use Redirect;
use Hash;
use Crypt;
use URL;
use Response;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\DB;


class FrontAuthController extends Controller
{
  use AuthenticatesUsers;

  protected $guard = "admin";

    public function index(){
      return View::make('front.home');
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
      return redirect('/');
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
            "url_image" => ""
        ]);
      }

     return Response::json($response);
    }

}
