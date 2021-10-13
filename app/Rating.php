<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = "star";
    protected $primaryKey = "id_star";

    public function findStarNumber($id){
    	return $this->where('spid', $id)->avg('star_number');
    }
}
