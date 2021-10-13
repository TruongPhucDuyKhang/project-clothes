<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = "cat";
    protected $primaryKey = "cat_id";

    public function getCat(){
    	return $this->all();
    }
    public $timestamps = false;

    public function addCat($data){
    	return $this->insert($data);
    }
    public function getItem($id){
    	return $this->findOrFail($id);
    }
    public function editItem($id, $data){
        return $this->where('cat_id', $id)->update($data);
    }
    public function delItem($id){
        return $this->where('cat_id', $id)->delete();
    }
}