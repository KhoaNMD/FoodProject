<?php

namespace App\Http\Controllers\front\User;

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

class UserController extends Controller
{
  use AuthenticatesUsers;
  protected $guard = "admin";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
      $this->middleware('AuthUser');
    }

  public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $response = [
          'status' => '1'
      ];

      if( count(DB::table('tbl_users')->select("id")->where("email", '=', $_POST['email'])->get()) > 0 ){
        $response['status'] = 1;
      }else {
        User::create([
            "email" => $_POST['email'],
            "fullname" => $_POST['fullname'],
            "password" => Hash::make($_POST['password']),
            "gender" => 0,
            "address" => "",
            "url_image" => "public/uploads/avatar/user.png"
        ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $content = array(
          "id" => $id
      );
      return view('_parts.front.edit',$content);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = Validator::make(Input::all(),
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
        return Redirect::route('user.edit',$id)->withErrors($validator);
      } else {

        $password = DB::table('tbl_users')->where('id','=',$id)->value('password');
        if( !Hash::check(Input::get('old_password'),$password)){
          Session::flash('message',"Password cũ không đúng");
          Session::flash('color',"danger");
        }
        else{
          $changePassword = [
              'password' => Hash::make(Input::get('new_password'))
          ];
          if(DB::table('tbl_users')->where('id','=',$id)->update($changePassword))
            Session::flash('message',"Password thay đổi thành công.");
          Session::flash('color',"success");
        }
        return Redirect::route('user.edit',$id);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

  public function uploadAvatar(){
    $image = Input::file('avatar');
    $path = "public/uploads/avatar";
    $image->move($path,$image->getClientOriginalName());
    $newImage = Image::create([
        "name"       => $image->getClientOriginalName(),
        "type"       => $image->getClientOriginalExtension(),
        "size"       => $image->getClientSize(),
        "post_id"    => 0,
        "url_image"  => $path.'/'.$image->getClientOriginalName(),
        "insert_id"  => Auth::guard('admin')->user()->id
    ]);
    if( $newImage ) {
      $urlImage = User::find(Auth::guard('admin')->user()->id)->update(['url_image' =>  $path.'/'.$image->getClientOriginalName()]);
      if($urlImage) {
        Session::flash('message', 'Cập nhập avatar thành công');
        Session::flash('color', 'success');
      }
    }
    return Redirect::route('user.edit', Auth::guard('admin')->user()->id);
  }

}
