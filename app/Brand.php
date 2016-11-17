<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Brand extends Model
{
    public $fillable = ['brand_name', 'brand_image', 'category_id'];
    
    public function category() {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
    
    public function products() {
        return $this->hasMany(Product::class);
    }
    
    
     /**
     * Scope a query to only include popular users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
   
    
}
