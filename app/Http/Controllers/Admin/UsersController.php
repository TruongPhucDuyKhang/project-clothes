<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
	public function __construct(Users $musers){
		$this->musers = $musers;
	}
    public function index(){
    	$users = $this->musers->getUsers();
    	return view('admin.users.index', compact('users'));
    }
    public function getEdit($id){
    	$findUser = $this->musers->findUser($id);
    	return view('admin.users.edit', compact('findUser'));
    }
    public function postEdit(Request $request, $id){
    	$birthday   = $request->birthday;
    	$password   = bcrypt($request->password);
    	$permission = $request->permission;

    	$data = ['birthday'   => $birthday,
	    	 	 'password'   => $password,
	    	 	 'permission' => $permission
    			];
		$result = $this->musers->editUser($id, $data);
		if($result) {
    		return redirect()->route('admin.users.index')->with('msg', 'Đã sửa thành công');
    	}else {
    		return redirect()->route('admin.users.edit', $id)->with('error', 'Lỗi. Vui lòng thử lại');
    	}
    }
    public function delUser($id){
    	$this->musers->delUser($id);
    	return redirect()->route('admin.users.index')->with('msg', 'Đã xoá thành công');
    }
}
