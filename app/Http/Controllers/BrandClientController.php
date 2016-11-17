<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Brand;
use App\Category;
use App\Product;
class BrandClientController extends Controller
{
   
    // READ
    public function view() {
        return view('client.brand.view', [
            'brands' => Brand::orderBy('brand_name', 'asc')->get()
        ]);            

    }
    
    
    // get MObile Phones page
    public function getProducts($brandName){
        $brand = Brand::where('brand_name', '=', $brandName)->get();
        $brand = $brand[0];
        $products = $brand->products;
        $categories = Category::get();
        return view('client.brand.view', [
            'products' => $products,
            'categories' => $categories,
            'brand' => $brand

        ]);
    }
    
}

