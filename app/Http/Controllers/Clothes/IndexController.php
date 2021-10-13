<?php

namespace App\Http\Controllers\Clothes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
use App\Shop;
use App\Users;

class IndexController extends Controller
{
	public function __construct(Cat $mcat, Shop $mshop, Users $musers){
		$this->mcat  = $mcat;
		$this->mshop = $mshop;
        $this->musers = $musers;
	}
    public function index() {
    	$getCats   = data_tree($this->mcat->getCat());
    	$cats      = data_tree_shows($this->mcat->getCat());
    	$items     = $this->mshop->getProductAll();
        $users     = $this->musers->getUser();
        $firstUser = $this->musers->getUserFirst();
    	return view('clothes.index.index', compact('getCats', 'cats', 'items', 'users', 'firstUser'));
    }
}
