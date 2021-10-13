<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoessize extends Model
{
	protected $table = "shoes_size";
    protected $primaryKey = "sid";

    public function getSizeShoes(){
    	return $this->get();
    }
}
