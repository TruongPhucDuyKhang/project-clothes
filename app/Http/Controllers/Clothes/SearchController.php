<?php

namespace App\Http\Controllers\Clothes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Search;
use App\Cat;
use App\Shop;

class SearchController extends Controller
{
	public function __construct(Search $msearch, Cat $mcat, Shop $mshop){
		$this->msearch = $msearch;
		$this->mcat    = $mcat;
		$this->mshop   = $mshop;
	}
    public function getSearch(Request $request)
	{
	    $getCats  = data_tree($this->mcat->getCat());
    	$cats     = data_tree_shows($this->mcat->getCat());
    	$keyword  = $request->keyword;
    	$products = $this->msearch->search($keyword);
    	$items 	  = $this->mshop->getProduct();
    	// dd($products->total());
    	if($keyword){
    		return view('clothes.search.search', compact('products', 'getCats', 'cats', 'items', 'keyword'));
    	}
	    
	}
	public function show(Request $request){
		$data    = $request->all();
		$keyword = $data['keyword'];
		if($keyword){
			$products = $this->msearch->show($keyword);
			return view('clothes.search.show', compact('products', 'keyword'));
		}
		// echo "<pre>";
		// 	print_r($keyword);
		// echo "</pre>";
	}
}
