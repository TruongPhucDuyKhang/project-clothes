<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Ordersdetail extends Model
{
    protected $table = "orders_detail";
    protected $primaryKey = "orders_detail_id";

    public function addProductDetail($data){
    	return $this->insert($data);
    }
    public function getProductDetail($id){
    	return $this->where('orders_id', $id)->get();
    }
    public function getProductDetails($id){
    	return $this->where('orders_id', $id)->value('qty');
    }
}
