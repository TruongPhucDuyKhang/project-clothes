<?php

namespace App\Http\Controllers\Clothes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;

class PaymentController extends Controller
{
	public function __construct(Cat $mcat){
		$this->mcat = $mcat;
	}
    public function payment(){
    	$getCats = data_tree($this->mcat->getCat());
    	$cats    = data_tree_shows($this->mcat->getCat());
    	return view('clothes.order.payment', compact('getCats', 'cats'));
    }
}
