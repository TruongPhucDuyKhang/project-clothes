<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
use App\Shop;
use App\Libraryimages;
use App\Rating;

use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
	public function __construct(Cat $mcat, Shop $mshop, Libraryimages $mlibraryimages, Rating $mrating)
    {
		$this->mcat  		  = $mcat;
		$this->mshop  		  = $mshop;
        $this->mrating        = $mrating;
		$this->mlibraryimages = $mlibraryimages;
	}
    public function index() {
        $products    = $this->mshop->getProduct();
    	return view('admin.shop.index', compact('products'));
    }
    public function getAdd() {
    	$getCats = data_tree($this->mcat->getCat());
    	return view('admin.shop.add', compact('getCats'));
    }
    public function postAdd(Request $request)
    {
    	if($request->hasFile('sp_picture')){
    		$fileName = $request->file('sp_picture')->store('avatar');
    		$data = ['name'    	   => $request->name,
    				 'price'   	   => $request->price, 
                     'discount'    => $request->discount, 
    				 'product_qty' => $request->qty, 
    				 'cat_id'      => $request->cat_id, 
    				 'sp_picture'  => $fileName,
    				 'des_text'    => $request->des_text,
    				 'detail_text' => $request->detail_text,
                     'status'      => 1,
                     'selling'     => $request->selling,
    				];
    				$spid = $this->mshop->addItem($data);
    	}else {
    		return redirect()->route('admin.shop.add')->with('error', 'Vui lòng nhập ảnh');
    	}
    	// Thư viện ảnh
    	if($spid){
	    		if($request->hasFile('library_picture')){
	    		foreach($request->file('library_picture') as $item_library) {
	    			$list_picture = $item_library->store('lib');
	    			$data = ['picture' => $list_picture,
	    					 'spid'  => $spid,
	    					];
	    			$this->mlibraryimages->addItem($data);
	    		}
	    	}
	    	// Chuyển hướng thông báo
	    	return redirect()->route('admin.shop.index')->with('msg', 'Thêm sản phẩm thà
                nh công');
    	}else {
            return redirect()->route('admin.shop.add')->with('error', 'Có lỗi khi thêm ảnh');
        }
    }
    public function getEdit($id) {
        $getCats  = data_tree($this->mcat->getCat());
        $findLibs = $this->mlibraryimages->libraryImg($id);
        $findEdit = $this->mshop->findItem($id);
        return view('admin.shop.edit', compact('getCats', 'findEdit', 'findLibs'));
    }
    public function postEdit(Request $request, $id){
        if($request->hasFile('sp_picture')){
            $fileName = $request->file('sp_picture')->store('avatar');
            $data = ['name'        => $request->name,
                     'price'       => $request->price, 
                     'discount'    => $request->discount, 
                     'product_qty' => $request->qty, 
                     'cat_id'      => $request->cat_id, 
                     'sp_picture'  => $fileName,
                     'des_text'    => $request->des_text,
                     'detail_text' => $request->detail_text,
                     'status'      => 1,
                     'selling'     => $request->selling,
                    ];
                    // dd($data);
                    $spid = $this->mshop->editItem($data, $id);
                    
        }else {
            $findEdit = $this->mshop->findItem($id);
            $data = ['name'        => $request->name,
                     'price'       => $request->price, 
                     'discount'    => $request->discount, 
                     'product_qty' => $request->qty, 
                     'cat_id'      => $request->cat_id, 
                     'sp_picture'  => $findEdit->sp_picture,
                     'des_text'    => $request->des_text,
                     'detail_text' => $request->detail_text,
                     'status'      => 1,
                     'selling'     => $request->selling,
                    ];
                    // dd($data);
                    $spid = $this->mshop->editItem($data, $id);
        }
        // Thư viện ảnh
        if($spid){
                if($request->hasFile('library_picture')){
                foreach($request->file('library_picture') as $item_library) {
                    $list_picture = $item_library->store('lib');
                    $data = ['picture' => $list_picture,
                             'spid'  => $spid,
                            ];
                    $this->mlibraryimages->addItem($data);
                }
            }
            // Chuyển hướng thông báo
            return redirect()->route('admin.shop.index')->with('msg', 'Sửa sản phẩm thà
                nh công');
        }else {
            return redirect()->route('admin.shop.edit', $id)->with('error', 'Có lỗi khi thêm ảnh');
        }
    }
    public function changeSelling(Request $request){
        $id       = $request->id;
        $selling  = $request->selling;
        $findEdit = $this->mshop->findItem($id);
        $name     = $findEdit->name;
        $urlPic   = 'storage/app/'.$findEdit->sp_picture;
        
        if($selling == 0) {
            $selling = 1;
        }else {
            $selling = 0;
        }
        $data = ['selling' => $selling,];
        $this->mshop->changeSelling($data, $id);
        
        // echo "<pre>";
        //     print_r($request->all());
        // echo "</pre>"; 
        $products = $this->mshop->getProduct();
        return view('admin.shop.ajax-selling', compact('products', 'id', 'selling', 'name', 'urlPic'));
    }
    public function changeStatus(Request $request){
        $id       = $request->id;
        $status   = $request->status;
        $findEdit = $this->mshop->findItem($id);
        $name     = $findEdit->name;
        $urlPic   = 'storage/app/'.$findEdit->sp_picture;

        if($status == 0) {
            $status = 1;
        }else {
            $status = 0;
        }
        $data = ['status' => $status,];
        $this->mshop->changeStatus($data, $id);
        
        // echo "<pre>";
        //     print_r($request->all());
        // echo "</pre>"; 
        $products = $this->mshop->getProduct();
        return view('admin.shop.ajax-status', compact('products', 'id', 'status'));
    }
    public function delImg(Request $request){
        $id = $request->id;
        return $this->mlibraryimages->delImg($id);
    }
    public function delProduct($id){
        $this->mshop->delItem($id);

        return redirect()->route('admin.shop.index')->with('msg', 'Xoá sản phẩm thành công');
    }
}
