<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$product = Product::all();
    	return view('product', ['product' => $product]);
    }
    
    public function add()
    {
    	return view('product_add');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
			'price' => 'required',
    	]);
 
        Product::create([
    		'name' => $request->name,
			'price' => $request->price,
			'image' => $request->image
    	]);
 
    	return redirect('/product');
	}
	
	public function edit($id)
	{
		$product = Product::find($id);
		return view('product_edit', ['product' => $product]);
	}

	public function update($id, Request $request)
	{
		$this->validate($request,[
		'name' => 'required',
		'price' => 'required'
		]);

		$product = Product::find($id);
		$product->name = $request->name;
		$product->price = $request->price;
		$product->image = $request->image;
		$product->save();
		return redirect('/product');
	}

	public function delete($id)
	{
		$product = Product::find($id);
		$product->delete();
		return redirect('/product');
	}
}
