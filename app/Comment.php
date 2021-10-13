<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Comment extends Model
{
    protected $table = "star";
    protected $primaryKey = "id_star";

    public function addComment($data){
    	return DB::table('star')->insert($data);
    }
    // public function inTotalStar($id, $total){
    // 	return $this->where('number_total', '=')->update($total);
    // }
    public function getItemComment($id){
    	return $this->where('spid', $id)->get();
    }
}
