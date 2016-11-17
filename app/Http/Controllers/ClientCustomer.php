<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use App\Http\Requests;

class ClientCustomer extends Controller
{
    public function index(){
        //return view('client.register');
        
        $products = Product::orderBy('product_name', 'asc')->distinct('brand_id')->take(5)->get();
        $categories = Category::orderBy('category_name', 'asc')->get();
        $brands = Brand::orderBy('brand_name', 'asc')->get();
        return view('client.register', [
           'brands' => $brands,
           'products' => $products,
           'categories' => $categories
           ]);
        
        
    }
}
