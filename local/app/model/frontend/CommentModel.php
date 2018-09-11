<?php

namespace App\model\frontend;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
	protected $table = 'comment';
	protected $primaryKey = 'com_id';
    // protected $fillable = [

    // 	'full_name','name','email','password','level',
    // ];
	protected  $guarded = [];
}
