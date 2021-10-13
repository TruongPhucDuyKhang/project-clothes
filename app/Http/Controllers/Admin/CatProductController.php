<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Cat;

class CatProductController extends Controller
{
	public function __construct(Cat $mcat){
		$this->mcat = $mcat;
	}
    public function index() {
    	$getCats = data_tree($this->mcat->getCat());
    	return view('admin.cat.index', compact('getCats'));
    }
    public function postAdd(Request $request){
    	$validator = Validator::make($request->all(), [
    		'name_cat' => 'required'
    	], [
    		'name_cat.required' => 'Nhập tên danh mục'
    	]);
    	if($validator->fails()) {
    		return response()->json([
    			'errors' => $validator->errors()->all()
    		]);
    	}
    	$data = ['name_cat'   => $request->name_cat,	
    			 'prarent_id' => $request->prarent_id
    			];
    	$result = $this->mcat->addCat($data);
    	if($result == true) {
    		return response()->json([
    			'success' => 'Thêm danh mục thành công'
    		]);
    	}
    }
    public function getEdit(Request $request){
        $id  = $request->id;
        $cat = $this->mcat->getItem($id);  

        return response()->json([
            'idEdit'  => $id,
            'nameCat' => $cat->name_cat,
        ]);
    }
    public function postEdit(Request $request){
        $nameEdit = $request->nameEdit;
        $idEdit   = $request->idEdit;
        $validator = Validator::make($request->all(), [
            'nameEdit' => 'required'
        ], [
            'nameEdit.required' => 'Nhập tên danh mục'
        ]);
        if($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()->all()
            ]);
        }
        $data     = ['name_cat' => $nameEdit];
        $result   = $this->mcat->editItem($idEdit, $data);
        return response()->json([
            'success' => 'Sửa thành công'
        ]);
    }
    public function del(Request $request){
        $id     = $request->id;
        $cat    = $this->mcat->getItem($id);
        $check  = $this->mcat->checkCat($cat->prarent_id);
        dd($check);
        // if($cat->prarent_id){
        //     return response()->json([
        //         'errors' => 'Bạn phải xoá thằng con trước'
        //     ]);
        // }else {
        //     $result = $this->mcat->delItem($id);
        //     return response()->json([
        //         'success' => 'Xoá thành công'
        //     ]);
        // }
    }
}




