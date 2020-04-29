<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "cart";
    protected $fillable = ['product_id','qty','price','discount_id'];

    public function product(){
    	return $this->belongsTo('App\Product');
    }

    public function discount(){
    	return $this->belongsTo('App\Discount');
    }
}
