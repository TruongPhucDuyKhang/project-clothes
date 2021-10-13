<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shirtsize extends Model
{
    protected $table = "shirt_size";
    protected $primaryKey = "aid";

    public function getSizeShirt(){
    	return $this->get();
    }
}
