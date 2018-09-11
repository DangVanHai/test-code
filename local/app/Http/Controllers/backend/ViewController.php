<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\UserModel;
use App\Http\Requests\backend\AddUserRequest;
use Illuminate\Support\Facades\Hash;
class ViewController extends Controller
{
	public function getDashboard(){
		return view('backend.index');
	}
	public function getUserEmployees(){
		$user['employees'] = UserModel::Where('level','<=',2)->orderby('user_id','desc')->paginate(10);
		return view('backend.employees',$user);
	}
	public function getDelEmployees(Request $request, $id){
		$user= UserModel::find($id)->delete();
		return back();
	}
	public function getShowEmployees(Request $request, $id){
		$employee['show']= UserModel::find($id);
		return view('backend.show-employee',$employee);
	}
	public function getUserInfo(){
		$user['employees'] = UserModel::Where('level',3)->get();
		return view('backend.users',$user);
	}

	public function getAddUser(){
		return view('backend.add-user');
	}
	public function postAddUser(AddUserRequest $request){

		$user = new UserModel;
		$user->full_name = $request->full_name;
		$user->username = $request->username;
		$user->email = $request->email;
		$user->password =Hash::make($request->password);
		if($request->level==1){
			$user->function = "Admin";
			$user->phone = $request->phoneadmin;
		}else{
			$user->function = $request->function;
			$user->phone = $request->phone;
		}
		$user->level = $request->level;
		$user->address1 = $request->address;
		$user->id_card = $request->id_card;
		$user->employee_detail = $request->employee_detail;
		if ($request->hasFile('avatar')) {
			$filename = $request->avatar->getClientOriginalName();
			$user->avatar = $filename;
			$request->avatar->move('public/images/avatar',$filename);
		}
		$user->save();
		if ($request->level==1||$request->level==2) {
			return redirect()->intended('admin/users/employees')->withInput()->with('adduser','you have added user');
		}else{
			return redirect()->intended('admin/users/users')->withInput()->with('adduser','you have added guest');
		}
		
	}

	public function getUserGuest(){
		return view('backend.guest');
	}
	
}
