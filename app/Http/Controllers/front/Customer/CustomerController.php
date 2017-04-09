<?php

namespace App\Http\Controllers\front\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Psy\Output\ProcOutputPager;
use Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;
use Carbon\Carbon;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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
      $post = new Post();

      $listCategory = DB::table("tbl_category")->get();

      $content = [
          "post" => $post,
          "categories" => $listCategory
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

      $post->address = $request->address.','.$request->district.','.$request->province.'.';

      $this->setDefaultValue($post,true);

      $post->save();

      return Redirect::route('restaurant.create');
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
        //
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

    public function setDefaultValue($object,$isAddNew){
      if($isAddNew) {
        $object->cnt_view = "0";
        $object->cnt_rank = "0";
        $object->website = "";
        $object->thumb_id = "0";
        $object->status = "0";
        $object->insert_id = Auth::guard('admin')->id;
        $object->created_at = Carbon::now();
      }
        $object->updated_at = Carbon::now();
    }
}
