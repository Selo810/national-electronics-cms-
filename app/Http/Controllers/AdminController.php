<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;
use App\Brand;
use App\Category;

class AdminController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $products = Product::orderBy('created_at', 'asc')->take(5)->get();
        $brands = Brand::orderBy('created_at', 'asc')->take(5)->get();
        $categories = Category::orderBy('category_name', 'asc')->take(3)->get();
        //dd($brands);
        
        return view('admin.index')->with([
            'products'  => $products,
            'brands'    => $brands,
            'categories'=> $categories,
            // ADD CUSTOMERS 
            // ADD COMPANIES 
        ]);
    }
}
