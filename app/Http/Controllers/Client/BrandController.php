<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Brand;
use App\Category;
class BrandController extends Controller
{
   
    // READ
    public function view() {
        return view('client.brand.view', [
            'brands' => Brand::orderBy('brand_name', 'asc')->get()
        ]);            

    }
    
}

