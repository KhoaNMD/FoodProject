<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  protected $table = "tbl_food";

  public $timestamps = true;

  protected $fillable = [
      "name" ,
      "price",
      "post_id",
      "category_food_id",
      "url_image"
  ];

}
