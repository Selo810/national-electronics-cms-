<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];
    
    public function brands() {
        return $this->hasMany(Brand::class);
        
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
    
    
    
    /**
     * Scope a query to only include popular users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMobilePhone($query)
    {
        return $query->where('category_name', '=', 'GSM Mobile Phones');
    }
}
