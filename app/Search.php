<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Search extends Model
{
    protected $table = "product";
    protected $primaryKey = "spid";

    public function search($keyword){
    	$keyword = '%'.$keyword.'%';
    	return  DB::table('product')->where('name', 'like', $keyword)->paginate(9);
    }
    public function show($keyword){
    	$keyword = '%'.$keyword.'%';
    	return  DB::table('product')->where('name', 'like', $keyword)->paginate(5);
    }
}
