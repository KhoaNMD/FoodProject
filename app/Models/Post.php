<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
  use SoftDeletes;

  protected $table = "tbl_post";

  public $timestamps = true;

  protected $dates = ['deleted_at'];

  protected $fillable = [
      "title",
      "address",
      "email",
      "website",
      "describe",
      "status",
      "province",
      "district",
      "cnt_view",
      "cnt_rank",
      "latitude",
      "longitude",
      "category_id",
      "thumb_id",
      "kind",
      "capacity",
      "phone",
      "min_price",
      "max_price",
      "start_time",
      "end_time",
      "insert_id",
      "avg_food_price"
  ];

  public function Images()
  {
    return $this->hasMany('App\Models\Image');
  }

  public function Comments()
  {
    return $this->hasMany('App\Models\Comment','post_id','id');
  }

  public function Rating()
  {
    return $this->hasOne('App\Models\Rating');
  }


}
