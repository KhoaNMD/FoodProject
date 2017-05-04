<?php

namespace App\Http\Controllers\front\Post;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;
use Carbon\Carbon;
use Redirect;
use Response;
use Input;
use Request;
use View;
use App\Http\Utils\UtilityCommon;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */


  public function __construct()
  {
    $this->middleware('AuthUser',['except' => array('index','show') ]);
  }

  public function index()
  {
    $provinceList = DB::table("province")->get();
    $postList = $this->queryPost(Post::with("Images"))->get();

    $content = [
        "provinceList" => $provinceList,
        "postList"     => $postList
    ];
    return view('front.restaurant.gridlist',$content);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    $post = new Post();

    $listCategory = DB::table("tbl_category")->get();
    $provinceList = DB::table("province")->get();

    $content = [
        "post" => $post,
        "categories" => $listCategory,
        "provinces" => $provinceList
    ];

    return view('front.customer.customer',$content);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(PostRequest $request)
  {
    $post = Post::create($request->all());

    $nameAddress = $this->getNameProvinceAndDistrict($request->province,$request->district);

    $post->address = $request->address.', '.$nameAddress['district'].', '.$nameAddress['province'].'.';
    $post->district = $request->district;
    $post->province = $request->province;
    $post->cnt_view = "0";
    $post->cnt_rank = "0";
    $post->website = "";
    $post->thumb_id = "0";
    $post->status = "0";


    $this->setDefaultValue($post,true);

    if($post->save()){
      $data = array(
          "post_id" => $post->id
      );
      return View('front.customer.upload',$data);
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
    $post = Post::where('id',$id)->with('images','Comments','Comments.User')->first();
    $content = array(
        'post' => $post
    );
    return view('front.restaurant.detail',$content);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $post = Post::where($id)->get();

//    $nameAddress = $this->getNameProvinceAndDistrict($request->province,$request->district);
//
//    $post->address = $request->address.', '.$nameAddress['district'].', '.$nameAddress['province'].'.';
//
//    $this->setDefaultValue($post,true);
//
//    if($post->save()){
//      $data = array(
//          "post_id" => $post->id
//      );
//      return View('front.customer.upload',$data);
//    }
      echo "<pre>";
      print_r($post);
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
    //
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

  public function getNameProvinceAndDistrict($provinceId,$districtId){
    // Get column name of province by id.
    $provinceName = DB::table("province")->select("name")->where("provinceId","=",$provinceId)->first();
    // Get column name of district by id.
    $districtName = DB::table("district")->select("name")->where("districtId","=",$districtId)->first();
    // Storing in $arr.
    $arr = array(
        "province" => $provinceName->name,
        "district" => $districtName->name
    );
    return $arr;
  }

  public function queryPost($query){
    if(Input::get('province')){
       $query->where("province",'=',Input::get('province'));
    }
    if(Input::get('district')){
      $query->where("district",'=',Input::get('district'));
    }
    return $query;
  }

}
