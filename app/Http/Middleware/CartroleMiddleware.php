<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CartroleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $cartrole)
    {
        $cart = Session::get('cart');
        if($cart['buy'] == false) {
	        if($cart != $cartrole){
	            return redirect()->route('clothes.index.index');
	        }
	    }
        // dd($cart);
        return $next($request);
    }
}
