<?php

namespace App\Http\Controllers\Clothes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;

class ContactController extends Controller
{
	public function __construct(Cat $mcat){
		$this->mcat = $mcat;
	}
    public function index(){
    	$getCats = data_tree($this->mcat->getCat());
    	$cats    = data_tree_shows($this->mcat->getCat());
    	return view('clothes.contact.index', compact('getCats', 'cats'));
    }
}
