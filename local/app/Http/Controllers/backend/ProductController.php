<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\backend\ProductRequest;
use App\model\backend\ProductModel;
use App\model\backend\CaloteryModel;
class ProductController extends Controller
{
    public function getAddProduct(){
		$cate['categories'] = CaloteryModel::Where('cate_main','children')->orWhere('cate_main','parent')->orderby('cate_id','desc')->get();
		return view('backend.add-product',$cate);
	}
	public function postAddProduct(ProductRequest $request){
		$prods = new ProductModel;
		$prods->prod_name = $request->prod_name;
		$prods->prod_code = $request->prod_code;
		$prods->prod_rate = $request->prod_rate;
		$prods->prod_cate = $request->prod_cate;
		$prods->prod_pi = $request->prod_pi;
		$prods->prod_pe = $request->prod_pe;
		$prods->prod_qtyI = $request->prod_qtyI;
		$prods->prod_qtyE = $request->prod_qtyE;
		$prods->prod_qtyR = $request->prod_qtyI;
		$prods->prod_partner_name = $request->prod_partner_name;
		$prods->prod_partner_info = $request->prod_partner_info;
		$prods->prod_partner_level = $request->prod_partner_level;
		$prods->prod_detail = $request->prod_detail;
		$prods->prod_slug = str_slug($request->prod_name);
		if ($request->hasFile('prod_img')) {
			$filename1 = $request->prod_img->getClientOriginalName();
			$prods->prod_img = $filename1;
			$request->prod_img->move('public/images/products',$filename1);
		}
		if ($request->hasFile('prod_file')) {
			$filename = $request->prod_file->getClientOriginalName();
			$prods->prod_file = $filename;
			$request->prod_file->move('public/images/catalogues',$filename);
		}
		$prods->save();
		return redirect()->intended('admin/products');
	}
	public function getShowProduct(){
		$prods['prods'] = ProductModel::orderby('prod_id','desc')->paginate(10);
		return view('backend.product',$prods);
	}
	public function getDelProduct(Request $request, $id){
		$cate= ProductModel::find($id)->delete();
		return back();
	}
	public function getEditProduct(Request $request, $id){
		$prod['prod_edit']=ProductModel::find($id);
		$prod['categories'] = CaloteryModel::Where('cate_main','children')->orWhere('cate_main','parent')->orderby('cate_id','desc')->get();
		return view('backend.edit-product',$prod);
	}
	public function postEditProduct(Request $request, $id){
		$prods = ProductModel::find($id);
		$prods->prod_name = $request->prod_name;
		$prods->prod_code = $request->prod_code;
		$prods->prod_rate = $request->prod_rate;
		$prods->prod_cate = $request->prod_cate;
		$prods->prod_pi = $request->prod_pi;
		$prods->prod_pe = $request->prod_pe;
		$prods->prod_qtyI = $request->prod_qtyI;
		$prods->prod_qtyE = $request->prod_qtyE;
		$prods->prod_qtyR = $request->prod_qtyI;
		$prods->prod_partner_name = $request->prod_partner_name;
		$prods->prod_partner_info = $request->prod_partner_info;
		$prods->prod_partner_level = $request->prod_partner_level;
		$prods->prod_detail = $request->prod_detail;
		$prods->prod_slug = str_slug($request->prod_name);
		if ($request->hasFile('prod_img')) {
			$filename1 = $request->prod_img->getClientOriginalName();
			$prods->prod_img = $filename1;
			$request->prod_img->move('public/images/products',$filename1);
		}
		if ($request->hasFile('prod_file')) {
			$filename = $request->prod_file->getClientOriginalName();
			$prods->prod_file = $filename;
			$request->prod_file->move('public/images/catalogues',$filename);
		}
		$prods->save();
		return redirect()->intended('admin/products');
	}
	public function getShowDetailProduct(Request $request, $id){
		$prod['prod_show']=ProductModel::find($id);
		$prod['categories'] = CaloteryModel::Where('cate_main','children')->orWhere('cate_main','parent')->orderby('cate_id','desc')->get();
		return view('backend.show-product',$prod);
	}
}
