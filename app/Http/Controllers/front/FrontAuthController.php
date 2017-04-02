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
use Request;
use Response;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\DB;
use Validator;

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

    public function getEdit(){
      return view('_parts.front.edit');
    }

    public function postEdit($id) {
        $validator = Validator::make(Request::all(),
          [
              'old_password' => 'required',
              'new_password' => 'required|confirmed',
              'new_password_confirmation' => 'required'
          ],
            [
              'old_password.required' => 'Password cũ không được bỏ trống',
              'new_password.required' => 'Password mới không được bỏ trống',
              'new_password_confirmation.required' => 'Password xác nhận không được bỏ trống',
              'new_password_confirmation' => 'Password xác nhận không đúng'
            ]
        );

        if($validator->fails()){
            return redirect('/edit')->withErrors($validator);
        } else {

              $password = DB::table('tbl_users')->where('id','=',$id)->value('password');
              if( !Hash::check(Input::get('old_password'),$password)){
                Session::flash('message',"Password cũ không đúng");
                Session::flash('color',"danger");
                return Redirect::route('front.user.edit.get');
              }
              else{
                $changePassword = [
                    'password' => Hash::make(Input::get('new_password'))
                ];
                if( DB::table('tbl_users')->where('id','=',$id)->update($changePassword))
                  Session::flash('message',"Password thay đổi thành công.");
                  Session::flash('color',"success");
                  return Redirect::route('front.user.edit.get');
              }
        }

    }

}
