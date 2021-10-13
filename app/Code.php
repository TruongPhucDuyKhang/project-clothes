<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = "mail_code";
    protected $primaryKey = "code_id";

    public function findCode($code){
    	return $this->where('name_code', '=', $code)->count();
    }
    public function addCode($data){
    	return $this->insert($data);
    }
    // public function deleteCode($code_id){
    // 	return $this->where('code_id', $code_id)->delete();
    // }
}
