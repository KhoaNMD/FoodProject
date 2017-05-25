<?php

namespace App\Http\Controllers\front\Post;

require_once getenv('DOCUMENT_ROOT').'/public/simple_html_dom.php';

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Image;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;
use Carbon\Carbon;
use Redirect;
use Response;
use Input;
use Request;
use View;
use App\Http\Utils\UtilityCommon;
use Auth;
use Session;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */


  public function __construct()
  {
    $this->middleware('AuthUser',['except' => array('index','show','searchPost') ]);
  }

  public function index()
  {
     //Create an images array.
    $imageList = array();
    $provinceList = DB::table("province")->get();
    $postList = $this->queryPost(Post::with("Images","Comments.User"))->get();

    foreach($postList as $post){
      foreach($post->images as $image){
        if($image->category_image == 1){
          $imageList[$post->id][1][] = $image->url_image;
        }elseif($image->category_image == 2) {
          $imageList[$post->id][2][] = $image->url_image;
        }elseif($image->category_image == 3) {
          $imageList[$post->id][3][] = $image->url_image;
        }elseif($image->category_image == 4) {
          $imageList[$post->id][4][] = $image->url_image;
        }elseif($image->category_image == 5) {
          $imageList[$post->id][5][] = $image->url_image;
        }
      }
    }

    $content = [
        "provinceList" => $provinceList,
        "postList"     => $postList,
        'imageList'  => $imageList
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
    // Flag for showing status.
    $status = false;
    $checkRating = array(
        "food"  => "",
        "serve" => "",
        "price" => "",
        "space" => ""
    );
    $post = Post::with('images','Comments','Comments.User')->find($id);

    if(Auth::guard('admin')->check()) {

      $flagMark = Rating::where([
          ['user_id', '=', Auth::guard('admin')->user()->id],
          ['post_id', '=', $id]
      ])->first();

    }

    if(!empty($flagMark)){
      if($flagMark['food'] > 0){
        $checkRating['food'] = true;
      }
      if($flagMark['serve'] > 0){
        $checkRating['serve'] = true;
      }
      if($flagMark['price'] > 0){
        $checkRating['price'] = true;
      }
      if($flagMark['space'] > 0){
        $checkRating['space'] = true;
      }
    }

    if(strtotime($post->start_time) <= strtotime("now") && strtotime($post->end_time) >= strtotime("now")){
      $status = true;
    }


    $content = array(
        'post'        => $post,
        'status'      => $status,
        'checkRating' => $checkRating
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
    $post = Post::find($id);
    $listCategory = DB::table("tbl_category")->get();
    $provinceList = DB::table("province")->get();
    $districtList = DB::table("district")->where("provinceid","=",$post->province)->get();
    $content = array(
        "post"       => $post,
        "categories" => $listCategory,
        "provinces"  => $provinceList,
        "districts"  => $districtList
    );
    return view('front.customer.customer',$content);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(PostRequest $request, $id)
  {
    $input = Input::all();
    $post = Post::find($id);
    $post->fill($input);
    if($post->save()){
      Session::flash('message',"Cập nhật thông tin thành công.");
      Session::flash('color',"success");
      return Redirect::route('restaurant.edit',$id);
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
    }else{
      $query->where("province",'=',"79");
    } // Set default value for search.

    return $query;
  }

  public function userPostList()
  {
    $userPost = Post::where('insert_id',Auth::guard('admin')->user()->id)->get();
    $content = array(
        'userPost' => $userPost
    );
    return view('front.customer.indexuserpost',$content);
  }

  public function searchPost()
  {

    $response = array(
        "status" => 0,
        "data"   => array(
            "postList" => "",
        "imageList" => "",
        )
    );

    if(!empty($_GET['district'])){
      $postList = Post::with('Images')->where('district','=',$_GET['district'])->get();
      if(count($postList) > 0){
        $response['data']["postList"] = $postList;
        $response['status'] = 1;

        foreach($postList as $post){
          foreach($post->images as $image){
            if($image->category_image == 1){
              $response['data']['imageList'][$post->id][1][] = $image->url_image;
            }elseif($image->category_image == 2) {
              $response['data']['imageList'][$post->id][2][] = $image->url_image;
            }elseif($image->category_image == 3) {
              $response['data']['imageList'][$post->id][3][] = $image->url_image;
            }elseif($image->category_image == 4) {
              $response['data']['imageList'][$post->id][4][] = $image->url_image;
            }elseif($image->category_image == 5) {
              $response['data']['imageList'][$post->id][5][] = $image->url_image;
            }
          }
        }

      }
    }

    return Response::json($response);
  }

  public function ratingPost(){

    $response = array(
        "status" => 0,
        "data" => ""
    );

    $flag = false;

    $tmp = array();

    if(isset($_POST['postId']) && isset($_POST['userId'])){
      if(is_numeric($_POST['postId']) && is_numeric($_POST['userId']) && is_numeric($_POST['mark'])){

        // Select type rating to store database.
        if($_POST['ratingFor'] === "rating-for-food"){
            $tmp["food"] = $_POST['mark'];
        }elseif( $_POST['ratingFor'] === "rating-for-space"){
            $tmp["space"] = $_POST['mark'];
        }elseif( $_POST['ratingFor'] === "rating-for-serve"){
            $tmp["serve"] = $_POST['mark'];
        }elseif( $_POST['ratingFor'] === "rating-for-price"){
            $tmp["price"] = $_POST['mark'];
        }

        // Check exist user and post .
        $checkRating = Rating::where([
            [ 'post_id', '=' ,$_POST['postId'] ],
            [ 'user_id', '=' , $_POST['userId'] ],
        ])->count();

        // If not exist , we will create a new record.
        if($checkRating == 0){
          // Create default value for new record.
          $rating = Rating::create([
              "user_id"  => $_POST['userId'],
              "post_id"  => $_POST['postId'],
              "total_mark" => 0,
              "food"     => 0,
              "space"    => 0,
              "serve"    => 0,
              "price"    => 0
          ]);
          // Get id for update.
          $id = $rating->id;

          if(!empty($id))
          {
            $update = Rating::where('id','=',$id)->update($tmp);
            // If successfully update
            if($update > 0){
              $flag = true;
              $response['status'] = 1;
            }
          }

        }else{ // Other Case.
          $update = Rating::where([
              [ 'post_id', '=' ,$_POST['postId'] ],
              [ 'user_id', '=' , $_POST['userId'] ],
          ])->update($tmp);
          // If successfully update
          if($update > 0){
            $flag = true;
            $response['status'] = 1;
          }
        }
      } else{
        // Error input data.
        $response['status'] = 2;
      }
    } else{
      // Error input data.
      $response['status'] = 2;
    }

    // Update mark
    if($flag == true){
      $mark = Rating::where([
          [ 'post_id', '=' ,$_POST['postId'] ],
          [ 'user_id', '=' , $_POST['userId'] ],
      ])->first();

      $total_mark = ( $mark->food + $mark->space + $mark->serve + $mark->price ) / 4.0;

      $update = Rating::where([
          [ 'post_id', '=' ,$_POST['postId'] ],
          [ 'user_id', '=' , $_POST['userId'] ],
      ])->update(["total_mark" => $total_mark]);

      //Calculate mark Avg for post.
      $markAvg = Rating::where(['post_id' => $_POST['postId']])->avg('total_mark');

      if(!empty($markAvg)){
        Post::where(["id" => $_POST['postId']])->update(["cnt_rank" => $markAvg]);
      }

    }

    return Response::json($response);
  }

}
