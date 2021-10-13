<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libraryimages extends Model
{
    protected $table = "library_images";
    protected $primaryKey = "id_img";

    public $timestamps = false;

    public function addItem($data){
    	return $this->insert($data);
    }
    public function libraryImg($id){
        return $this->where('spid', $id)->get();
    }
    public function delImg($id){
        return $this->where('id_img', $id)->delete();
    }
}
