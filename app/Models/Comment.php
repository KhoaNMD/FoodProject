<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table = "tbl_comment";

  public $timestamps = true;

  protected $fillable = [
    "content" ,
    "user_id",
    "post_id",
    "cnt_like"
  ];

  public function Post(){
    return $this->belongsTo('App\Models\Post');
  }

  public function User(){
    return $this->belongsTo('App\Models\User','user_id');
  }

}
