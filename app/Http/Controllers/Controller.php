<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use Session;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function __construct()
  {
    $this->middleware('AuthUser');
  }

    public function setDefaultValue($object,$isAddNew){
    // If isAddNew parameter is true .
      if($isAddNew) {
        $object->insert_id = Auth::guard('admin')->user()->id;
        $object->created_at = Carbon::now();
      }
      $object->updated_at = Carbon::now();
    }

}
