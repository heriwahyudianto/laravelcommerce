<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = "discount";
    
    public function cart(){
    	return $this->hasMany('App\Cart');
    }
}
