<?php

namespace App\model\backend;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'useraccount';
    protected $primaryKey = 'user_id';
    // protected $fillable = [

    // 	'full_name','name','email','password','level',
    // ];
    protected  $guarded = [];
}
