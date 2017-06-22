<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryFood extends Model
{
  protected $table = "tbl_category_food";

  public $timestamps = true;

  protected $fillable = [
      "name" ,
  ];

  function Food(){
    return $this->hasMany('App\Models\Food');
  }

}
