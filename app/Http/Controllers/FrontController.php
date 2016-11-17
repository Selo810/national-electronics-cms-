<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use App\Http\Requests;

class FrontController extends Controller
{
    public function index() {
        $products = Product::orderBy('product_name', 'asc')->distinct('brand_id')->take(5)->get();
        $categories = Category::orderBy('category_name', 'asc')->get();
        $brands = Brand::orderBy('brand_name', 'asc')->get();
        //return view('home', compact('products'), compact('brands'));
        return view('home', [
           'brands' => $brands,
           'products' => $products,
           'categories' => $categories
        ]);
        
        View::share('categories');
    }
    
    
    // get about page
    public function about(){
       $products = Product::orderBy('product_name', 'asc')->distinct('brand_id')->take(5)->get();
        $categories = Category::orderBy('category_name', 'asc')->get();
        $brands = Brand::orderBy('brand_name', 'asc')->get();
        return view('client.about', [
           'brands' => $brands,
           'products' => $products,
           'categories' => $categories
           ]);
    }
    
    
    // get details page
    public function details(){
        return view('client.details');
    }
    
    // get service page
    public function service(){
        return view('client.service');
    }
    
    
    
}
