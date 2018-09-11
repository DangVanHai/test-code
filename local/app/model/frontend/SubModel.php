<?php

namespace App\model\frontend;

use Illuminate\Database\Eloquent\Model;

class SubModel extends Model
{
	protected $table = 'subnews';
	protected $primaryKey = 'sub_id';
    // protected $fillable = [

    // 	'full_name','name','email','password','level',
    // ];
	protected  $guarded = [];
}
