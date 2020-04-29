<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\Discount;

class CartController extends Controller
{
    public function index(){
        //$cart = Cart::all();
        $cart = Cart::with(['product','discount'])->get();
        return view('cart',['cart' => $cart]);
    }

    public function add()
    {
        $product = Product::all();
        $discount = Discount::all();
        return view('cart_add', ['product' => $product, 'discount' => $discount]);
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'product_id' => 'required',
            'price' => 'required',
            'qty' => 'required'
    	]);
 
        Cart::create([
    		'product_id' => $request->product_id,
			'price' => $request->price,
            'qty' => $request->qty,
            'discount_id' => $request->discount_id
    	]);
 
    	return redirect('/');
    }
    
    public function delete($id)
	{
		$product = Cart::find($id);
		$product->delete();
		return redirect('/');
	}
}
