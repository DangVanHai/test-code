<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	// +++++++++++++++++++++++++start backend++++++++++++++++++++++++++++
Route::group(['namespace'=>'backend'], function(){
	Route::group(['prefix'=>'admin', 'middleware'=>'checkadmin'], function(){
		Route::get('/','ViewController@getDashboard');

		Route::group(['prefix'=>'users'], function(){
			Route::group(['prefix'=>'employees'], function(){
				Route::get('/','ViewController@getUserEmployees');
				Route::get('del/{id}','ViewController@getDelEmployees');
				Route::get('show/{id}','ViewController@getShowEmployees');
			});
			Route::get('users','ViewController@getUserInfo');
			Route::get('guest','ViewController@getUserGuest');
			Route::group(['prefix'=>'add'], function(){
				Route::get('/','ViewController@getAddUser');
				Route::post('/','ViewController@postAddUser');
			});
		});
		
		Route::group(['prefix'=>'categories'], function(){
			Route::group(['prefix'=>'add'], function(){
				Route::get('/','CategoryController@getAddCategory');
				Route::post('/','CategoryController@postAddCategory');
			});

			Route::get('show','CategoryController@getShowCategory');
			Route::get('del/{id}','CategoryController@getDelCategory');
			Route::group(['prefix'=>'edit/{id}'], function(){
				Route::get('/','CategoryController@getEditProduct');
				Route::post('/','CategoryController@postEditProduct');
			});
			
		});
		Route::group(['prefix'=>'products'], function(){
			Route::get('/','ProductController@getShowProduct');
			Route::get('show/{id}','ProductController@getShowDetailProduct');
			Route::get('del/{id}','ProductController@getDelProduct');
			Route::group(['prefix'=>'add'], function(){
				Route::get('/','ProductController@getAddProduct');
				Route::post('/','ProductController@postAddProduct');
			});
			Route::group(['prefix'=>'edit'], function(){
				Route::get('{id}','ProductController@getEditProduct');
				Route::post('{id}','ProductController@postEditProduct');
			});
		});
	});
});
	// ++++++++++++++++++++++/end backend+++++++
	// +++++++++++++++++++++++++start frontend++++++++++++++++++++++++++++

Route::group(['namespace'=>'frontend'], function(){
	Route::get('/','FronEndViewController@getBksensor');
	Route::get('chitietsanpham/{id}/{slug}.html','FronEndViewController@getProductDetail');
	Route::get('{cate}/{name}.html','FronEndViewController@getCateProduct');
	Route::get('lienhe','FronEndViewController@getAdress');
	Route::get('search','FronEndViewController@getSearch');
	Route::get('baohanh-dieukhoan','FronEndViewController@getLaw');
	Route::post('sub','FronEndViewController@postSub');
	Route::get('taikhoan','FronEndViewController@getSubUser');
	Route::post('taikhoan','FronEndViewController@postLogin');
	Route::post('taikhoan/dangky','FronEndViewController@postAddUser');
	Route::get('taikhoan/dangxuat','FronEndViewController@getLogout');
	Route::group(['prefix'=>'checkout'], function(){
		Route::get('/','CartController@getCart');
		Route::get('add/{id}','CartController@getAddCart');
		Route::get('update','CartController@getUpdateCart');
		Route::get('delete/{rowId}','CartController@getDeleteCart');
		Route::post('payment/guest','CartController@postPayment');
		Route::get('payment//user/{id}','CartController@getPayment');
	});
	Route::get('pdf','FronEndViewController@getPDF');
	Route::get('viewpdf','FronEndViewController@getviewPDF');

});

	// ++++++++++++++++++++++/end frontend+++++++
Route::get('exel','TestExel@getExel');