<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
  //
  use Notifiable;

  use SoftDeletes;

  protected $table = "tbl_users";

  public $timestamps = true;
  protected $softDelete = true; // Bật tính năng.
  protected $dates = ['deleted_at']; // Thuộc tính thực hiện softdeleted.

  protected $fillable = [
      'email',
      'password',
      'fullname',
      'gender',
      'address',
      'phone',
      'birthday',
      'url_image',
  ];

  protected $hidden = ['remember_token'];

  public function Comments()
  {
    return $this->hasMany('App\Models\Comment');
  }

  public function Posts()
  {
    return $this->hasMany('App\Models\Post','insert_id','id');
  }

}