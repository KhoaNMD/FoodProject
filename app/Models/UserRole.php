<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //
    use SoftDeletes;

    protected $table = "tbl_role";

    public $timestamps = true;
    protected $softDelete = true; // Bật tính năng.
    protected $dates = ['deleted_at']; // Thuộc tính thực hiện softdeleted.

    protected $fillable = [
        ''
    ];
}
