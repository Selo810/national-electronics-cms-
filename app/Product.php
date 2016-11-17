<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Brand;

class Product extends Model
{
    public $fillable = ['product_name', 'product_description', 'brand_id', 'product_image'];
    
    public function brand() {
        return $this->belongsTo('App\Brand', 'brand_id', 'id');
    }
    
    
   //public function scopePhone($product)
    //{
   //     return $product->wherebrand_name('Apple');
   // }
    
    
    
}