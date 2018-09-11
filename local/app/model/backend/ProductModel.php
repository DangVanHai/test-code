<?php

namespace App\model\backend;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
	protected $table = 'product';
	protected $primaryKey = 'prod_id';
    // protected $fillable = [

    // 	'full_name','name','email','password','level',
    // ];
	protected  $guarded = [];
	
	public function category(){
    	return $this->belongsTo('App\model\backend\CaloteryModel','prod_cate');//thuan

    }
}
