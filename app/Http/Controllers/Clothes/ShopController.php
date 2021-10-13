<?php

namespace App\Http\Controllers\Clothes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
use App\shop;
use App\Libraryimages;
use App\Shirtsize;
use App\Shoessize;
use App\Rating;
use App\Comment;
use Str;

class ShopController extends Controller
{
	public function __construct(Cat $mcat, Shop $mshop, Libraryimages $mlibraryimages, Shirtsize $mshirtsize, Shoessize $mshoessize, Rating $mrating, Comment $mcomment)
    {
		$this->mcat           = $mcat;
        $this->mshop          = $mshop;
        $this->mshirtsize     = $mshirtsize;
        $this->mshoessize     = $mshoessize;
        $this->mlibraryimages = $mlibraryimages;
        $this->mrating        = $mrating;
        $this->mcomment       = $mcomment;
	}
    public function list($slug, $id) {
    	$getCats = data_tree($this->mcat->getCat());
    	$cats    = data_tree_shows($this->mcat->getCat());
        $items   = $this->mshop->getItem($id);
    	return view('clothes.shop.list', compact('getCats', 'cats', 'items'));
    }
    public function detail($slug, $id) {
    	$getCats     = data_tree($this->mcat->getCat());
    	$cats        = data_tree_shows($this->mcat->getCat());
        $item        = $this->mshop->findItem($id);
        $rating      = $this->mrating->findStarNumber($id);
        $age         = round($rating);
        $LQs         = $this->mshop->getLQ($item->cat_id);
        $libraryimgs = $this->mlibraryimages->libraryImg($id);
        $shirts      = $this->mshirtsize->getSizeShirt();
        $shoess      = $this->mshoessize->getSizeShoes();
        $comments    = $this->mcomment->getItemComment($id);
    	return view('clothes.shop.detail', compact('getCats', 'cats', 'item', 'libraryimgs', 'LQs', 'shirts', 'shoess', 'age', 'rating', 'comments'));
    }
    public function quickView(Request $request){
        $id        = $request->id;
        $item      = $this->mshop->findItem($id);
        $des       = Str::limit($item->des_text, 130);
        $slug      = Str::slug($item->name);
        $urlPic    = 'storage/app/'.$item->sp_picture; 
        $urlDetail = route('clothes.shop.detail', [$slug, $id]); 
        return response()->json([
            'spid'       => $id,
            'name'       => $item->name,
            'price'      => '',
            'des_text'   => $des,
            'sp_picture' => $urlPic,
            'urlDetail'  => $urlDetail,
        ]);
        // echo "<pre>";
        //     print_r($item);
        // echo "</pre>";
    }
    public function saleOnline(){
        $getCats  = data_tree($this->mcat->getCat());
        $cats     = data_tree_shows($this->mcat->getCat());
        $items    = $this->mshop->getSaleOnline();
        return view('clothes.shop.sale', compact('getCats', 'cats', 'items'));
    }
}
