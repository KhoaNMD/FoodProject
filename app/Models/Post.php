<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = "tbl_post";

  public $timestamps = true;

  protected $fillable = [
      "title",
      "address",
      "email",
      "website",
      "describe",
      "status",
      "cnt_view",
      "cnt_rank",
      "category_id",
      "thumb_id",
      "kind",
      "capacity",
      "phone",
      "min_price",
      "max_price",
      "start_time",
      "end_time",
      "insert_id"
  ];
  public function Images(){
    return $this->hasMany('App\Models\Image');
  }
}
