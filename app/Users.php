<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model
{
	protected $table = "users";
    protected $primaryKey = "id";

    public function getUser(){
    	return $this->get();
    }
    public function getUserFirst(){
        return $this->first();
    }
    public function getUsers(){
    	return $this->orderBy('id', 'desc')->paginate(9);
    }
    public function findUser($id){
    	return $this->findOrFail($id);
    }
    public function addUser($data){
    	return $this->insert($data);
    }
    public function editUser($id, $data){
    	return DB::table('users')->where('id', $id)->update($data);
    }
    public function delUser($id){
    	return $this->where('id', $id)->delete();
    }
    public function findEmail($email){
        return $this->where('email', '=', $email)->count();
    }
    public function editPassEmail($email, $data){
        return DB::table('users')->where('email', '=', $email)->update($data);
    }
}
