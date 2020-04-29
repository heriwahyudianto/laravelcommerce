<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $fillable = ['name','image','price'];
    
    public function cart(){
    	return $this->hasMany('App\Cart');
    }
}
