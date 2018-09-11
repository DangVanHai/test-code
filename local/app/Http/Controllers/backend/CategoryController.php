<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\CaloteryModel;
use App\Http\Requests\backend\CategoryRequest;

class CategoryController extends Controller
{
	public function getAddCategory(){
		$cate['categories'] = CaloteryModel::Where('cate_level',0)->orderby('cate_id','desc')->get();
		return view('backend.add-category',$cate);
	}
	public function postAddCategory(CategoryRequest $request){
		$cate = new CaloteryModel;
		if($request->cate_main == "children" && $request->cate_level == 0){
			return back()->withInput()->with('error_add_cate',' You must choise category parents');
		}elseif ($request->cate_main == "children" && $request->cate_level != 0) {
			$cate->cate_name = $request->cate_name;
			$cate->cate_main = $request->cate_main;
			$cate->cate_level = $request->cate_level;
			$cate->save();
			$cate2 = CaloteryModel::find($request->cate_level);
			$cate2->cate_main = "parents";
			$cate2->save();
			return redirect()->intended('admin/categories/show');
		}else{
			$cate->cate_name = $request->cate_name;
			$cate->cate_main = $request->cate_main;
			$cate->cate_level = $request->cate_level;
			$cate->save();
			return redirect()->intended('admin/categories/show');
		}

	}
	public function getShowCategory(){
		$cate['categories'] = CaloteryModel::orderby('cate_id','desc')->paginate(10);
		return view('backend.show-category',$cate);
	}
	public function getDelCategory(Request $request, $id){
		$cate= CaloteryModel::find($id)->delete();
		return back();
	}
}
