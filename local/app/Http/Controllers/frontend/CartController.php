<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\ProductModel;
use App\model\backend\CaloteryModel;
use App\model\frontend\CommenProductModeltModel;
use App\model\frontend\SubModel;
use Carbon\Carbon;
use DB;
use Cart;
use Mail;
use Auth;
class CartController extends Controller
{
	public function getCart(Request $request){
		$products['cart'] = Cart::content();
		$products['stt'] = 1;
		$products['tax'] =Cart::tax();
		$products['total'] = Cart::total();
		$products['subtotal'] = Cart::subtotal();
		return view ('frontend.checkout',$products);
	}


	public function getAddCart(Request $request,$id){
		$Product = ProductModel::find($id);
		$qty = $request->qty;
		Cart::add(['id' => $id, 'name' => $Product->prod_name, 'qty' => $qty, 'price' =>  $Product->prod_pe, 'options' => ['image' =>$Product-> prod_img,'slug' =>  $Product->prod_slug]]);
		return redirect()->intended('checkout');
	}
	public function getUpdateCart(Request $request){
		$qty = $request->qty;
		$rowId = $request->rowId;
		Cart::update($rowId, $qty);
	}
	public function getDeleteCart($rowId){
		Cart::remove($rowId);
		return back();
	}
	
	public function postPayment(Request $request){
		$data['info'] = $request->all();
		$data['date'] =  Carbon::now();
		$data['code'] =str_replace('-', '',$data['date']);
		$data['code'] =str_replace(':', '',$data['code']);
		$data['codeQuote'] =str_replace(' ', '',$data['code']);
		$data['cart'] = Cart::content();
		$data['tax'] = Cart::tax();
		$data['total'] = Cart::total();
		$data['subtotal'] = Cart::subtotal();
		$email = $request->email;
		$data['stt'] = 1;
		$code = $data['codeQuote'];
		Mail::send('frontend.email',$data, function($message) use ($email,$code){
			$message->from('bksensors@gmail.com','Bksensor');
			$message->to($email,$email);
			$message->cc('hai.dangnhu.plm@gmail.com','Admin');
			$message->subject('Xác Nhận Báo Giá BKsensor/Số '.$code);
		});
		Cart::destroy();
		return back()->withInput()->with('quote','Bạn đã nhận được báo giá , hãy kiểm tra email của bạn');
	}


	// public function getPaymentUser(Request $request,$id){
	// 	$data['userInfo'] = DB::table('fsusers')
	// 	->join('infousers', 'fsusers.id', '=', 'infousers.id_user')
	// 	->select('fsusers.*', 'infousers.*')->where('id',$id)->first();
	// 	$data['cart'] = Cart::content();
	// 	$data['tax'] = Cart::tax();
	// 	$data['total'] = Cart::total();
	// 	$data['subtotal'] = Cart::subtotal();
	// 	$email = $data['userInfo']->email;
	// 	$i=1;
	// 	$data['stt'] = $i;
	// 	Mail::send('frontend.email',$data, function($message) use ($email){
	// 		$message->from('kthhhd4@gmail.com','Shophaituan');
	// 		$message->to($email,$email);
	// 		$message->cc('hai.dangnhu.plm@gmail.com','Dang Hai');
	// 		$message->subject('Xác Nhận Hóa Đơn Mua Hàng ShopHaiTuan');
	// 	});
	// 	Cart::destroy();
	// 	return redirect()->intended('shophaituan/complate');
	// }
	// public function getComplate(){
		
	// 	return view('frontend.complate');
	// }
}
