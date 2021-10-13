<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Shop extends Model
{
    protected $table = "product";
    protected $primaryKey = "spid";

    public function getProduct(){
    	return $this->join('cat', 'product.cat_id', '=', 'cat.cat_id')
                    ->orderBy('spid', 'desc')
    				->paginate(9);
    }
    public function getSaleOnline(){
        return $this->get();
    }
    public function getProductAll(){
        return $this->orderBy('spid', 'asc')->get();
    }
    public function getItem($id){
        return $this->orderBy('spid', 'desc')->where('cat_id', $id)->paginate(9);
    }
    public function libraryImg($id){
        return $this->where('spid', $id)->get();
    }
    public function findItem($id){
        return $this->findOrFail($id);
    }
    public function addItem($data){
    	return $this->insertGetId($data);
    }
    public function editItem($data, $id){
        return $this->where('spid', $id)->update($data);
    }
    public function getLQ($cat_id){
        return $this->where('cat_id', $cat_id)
                    ->orderBy('spid', 'desc')
                    ->take(5)->get();
    }
    public function editProduct($data, $id){
        return $this->where('spid', $id)->update($data);
    }
    public function changeSelling($data, $id){
        return $this->where('spid', $id)->update($data);
    }
    public function changeStatus($data, $id){
        return $this->where('spid', $id)->update($data);
    }
    public function decrementQty($id, $data){
        return $this->where('spid', $id)->update($data);
    }
    public function produtcQtyDecre($id, $product_qty){
        return DB::table('product')->where('spid', $id)->update(['product_qty' => DB::raw('product_qty - '.$product_qty)]); 
    }
    public function produtcQtyIncre($id, $product_qty){
        return DB::table('product')->where('spid', $id)->update(['product_qty' => DB::raw('product_qty + '.$product_qty)]); 
    }
    public function delItem($id){
        return $this->where('spid', $id)->delete();
    }
}
