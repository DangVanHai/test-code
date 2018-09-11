<?php

namespace App\model\backend;

use Illuminate\Database\Eloquent\Model;

class CaloteryModel extends Model
{
    protected $table = 'calotery';
    protected $primaryKey = 'cate_id';
    // protected $fillable = [

    // 	'full_name','name','email','password','level',
    // ];
    protected  $guarded = [];
}
