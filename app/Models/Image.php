<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $table = "tbl_image";

  public $timestamps = true;

  protected $fillable = [
      "name",
      "type",
      "size",
      "category_image",
      "post_id",
      "url_image",
      "insert_id",
  ];

  public function Post(){
    return $this->hasMany('App\Models\Post');
  }

}
