<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Brand;


class ProductController extends Controller
{
    
    // READ
    public function view() {
        return view('client.product.view', [
            'products' => Product::orderBy('product_name', 'asc')->get()
        ]);
    }
    
}
