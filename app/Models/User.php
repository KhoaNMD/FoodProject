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
        'url_image',
  ];

  protected $hidden = ['password','remember_token'];

}
