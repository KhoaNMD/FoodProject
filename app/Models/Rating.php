<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
  protected $table = "tbl_rating";

  public $timestamps = true;

  protected $fillable = [
    "user_id",
    "post_id",
    "total_mark",
    "food",
    "space",
    "serve",
    "price"
  ];
}
