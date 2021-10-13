<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB; 

class Checkout extends Model
{
    protected $table      = "orders";
    protected $primaryKey = "orders_id";

    public function addCheckout($data){
    	return $this->insertGetId($data);
    }
    public function findOrder($id){
    	return $this->findOrFail($id);
    }
    public function getOrder(){
    	return $this->orderBy('orders_id', 'DESC')->paginate(10);
    }
    public function changeStatus($id, $data){
        return DB::table('orders')->where('orders_id', $id)->update($data);
    }
    public function successOrder($id){
        return DB::table('orders')->where('orders_id', $id)->increment('orders_stauts');
    }
}
