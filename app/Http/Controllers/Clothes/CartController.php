<?php

namespace App\Http\Controllers\Clothes;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use App\Cart;
use App\shop;
use App\Cat;
use App\Checkout;
use App\Ordersdetail;
use Auth;

class CartController extends Controller
{
    public function __construct(Cart $mcart, Shop $mshop, Cat $mcat, Checkout $mcheckout, Ordersdetail $mordersdetail){
    	$this->mcart         = $mcart;
    	$this->mshop         = $mshop;
    	$this->mcat          = $mcat;
        $this->mcheckout     = $mcheckout;
        $this->mordersdetail = $mordersdetail;
    }
    public function index(){
    	$getCats = data_tree($this->mcat->getCat());
    	$cats    = data_tree_shows($this->mcat->getCat());
    	return view('clothes.cart.index', compact('getCats', 'cats'));
    }
    public function purchase(){
        $orders  = $this->mcheckout->getOrder();
        $getCats = data_tree($this->mcat->getCat());
        $cats    = data_tree_shows($this->mcat->getCat());
        return view('clothes.order.purchase', compact('getCats', 'cats', 'orders'));
    }
    public function checkout(){
    	$getCats    = data_tree($this->mcat->getCat());
    	$cats       = data_tree_shows($this->mcat->getCat());
    	return view('clothes.cart.checkout', compact('getCats', 'cats'));
    }
    public function postCheckout(CheckoutRequest $request){
        $orders_name     = $request->orders_name;
        $orders_andress  = $request->orders_andress;
        $orders_ward     = $request->orders_ward;
        $orders_district = $request->orders_district;
        $orders_city     = $request->orders_city;
        $orders_phone    = $request->orders_phone;
        $orders_email    = $request->orders_email;
        $orders_payment  = $request->orders_payment;
        $andressAll      = $orders_andress.', '.$orders_ward.', '.$orders_district.', '.$orders_city.'.';

        $cart = Session::get('cart');
        $data = ['orders_code'    => strtoupper(substr(md5(microtime()), rand(0, 26), 5)),
             'orders_name'    => $orders_name,
             'orders_andress' => $andressAll,
             'orders_phone'   => $orders_phone,
             'orders_email'   => $orders_email,
             'orders_payment' => $orders_payment,
             // 'orders_price'   => $item['infoProduct']['price'],
             'orders_qty'     => $cart['totalQty'],
             'orders_total'   => $cart['totalPrice'],
             'id'             => Auth::user()->id,
             'orders_stauts'  => 0,
            ];
        
        $spid = $this->mcheckout->addCheckout($data);
        foreach ($cart['buy'] as $key => $item) {
            $data = ['spid'      => $key,
                     'orders_id' => $spid,
                     'name'      => $item['infoProduct']['name'],
                     'price'     => $item['infoProduct']['price'],
                     'qty'       => $cart['buy'][$key]['qty'],
                    ];
                    $this->mordersdetail->addProductDetail($data);
                    $product_qty = $cart['buy'][$key]['qty'];
                    $this->mshop->produtcQtyDecre($key, $product_qty);
        }
        if($spid){
            Session::forget('cart');
            return redirect()->route('clothes.order.purchase');
        }
    }
    public function getPayment($id){
        $information = $this->mcheckout->findOrder($id);
        $orDetails   = $this->mordersdetail->getProductDetail($information->orders_id);
        $getCats     = data_tree($this->mcat->getCat());
        $cats        = data_tree_shows($this->mcat->getCat());
        return view('clothes.order.payment', compact('information', 'getCats', 'cats', 'orDetails'));
    }
    public function postCart(Request $request)
    {
    	$id          = $request->id;
    	$product_qty = $request->product_qty;
    	$item = $this->mshop->findItem($id);
        if($item->discount){
            $total = ($item->price * $item->discount) / 100;
            $data  = ['name'       => $item->name,
                      'price'      => $total,
                      'sp_picture' => $item->sp_picture,
                      'product_qty'=> $item->product_qty,
                    ];
        }else  {
            $data  = ['name'       => $item->name,
                      'price'      => $item->price,
                      'sp_picture' => $item->sp_picture,
                      'product_qty'=> $item->product_qty,
                    ];
        }
        $this->mcart->add($id, $data, $product_qty);
        // Session::get('cart')['totalQty'] = 0;
        // return response()->json([
        //     'numberCart' => Session::get('cart')['totalQty']++,
        // ]);
    	// echo "<pre>";
    	// 	print_r(Session::get('cart'));
    	// echo "</pre>";
    }	
    public function delCart(Request $request)
    {
        // echo "<pre>";
        //  print_r($request->all());
        // echo "</pre>";
        $id      = $request->id;
        $result  = $this->mcart->delItem($id);
        $getCats = data_tree($this->mcat->getCat());
        $cats    = data_tree_shows($this->mcat->getCat());
        return view('clothes.cart.del-cart', compact('getCats', 'cats'));
        
    }
    public function updateCart(Request $request)
    {
        // echo "<pre>";
        //  print_r($request->all());
        // echo "</pre>";
        $id   = $request->id;
        $qty  = $request->qty;
        
        $item = $this->mshop->findItem($id);
        if($item->discount){
            $total = ($item->price * $item->discount) / 100;
            $data  = ['name'       => $item->name,
                      'price'      => $total,
                      'sp_picture' => $item->sp_picture,
                      'qty'        => $qty,
                    ];
        }else  {
            $data  = ['name'       => $item->name,
                      'price'      => $item->price,
                      'sp_picture' => $item->sp_picture,
                      'qty'        => $qty,
                    ];
        }
        $this->mcart->addCart($id, $data, $qty);
    }
    public function postAccceptorder(Request $request){
        $id        = $request->id;       
        $this->mcheckout->successOrder($id);
    }
    public function postUnorder(Request $request){
        $id          = $request->id;
        $data        = ['orders_stauts' => 5,];
        $information = $this->mcheckout->findOrder($id);
        $orDetails   = $this->mordersdetail->getProductDetails($information->orders_id);
        
        $product_qty = $orDetails->qty;   
        $spid        = $orDetails->spid;
        $this->mshop->produtcQtyIncre($spid, $product_qty);
        $this->mcheckout->changeStatus($id, $data);
    }
    public function del(){
        $this->mcart->del();

        return redirect()->route('clothes.index.index');
    }
}
