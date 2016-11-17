<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Brand;



class ProductController extends Controller
{
    // Authentication
    public function __construct() {
        $this->middleware('auth');
    } 
     // CREATE
    // get
    public function create(){
        return view('admin.product.create', [
            'brands' => Brand::orderBy('brand_name', 'asc')->get()
        ]);
    }
    
    // post
    public function store(Request $request){
        
        //dd($request->all());
        $brand = Brand::where('brand_name', $request->input('brand'))->first();
        $product = new Product;
        
        $product->product_name = $request->input('product_name');
        $product->product_image = $request->input('product_image');
        // TODO
        //$brand->brand_image = $request->input('brand_image');
       
        
        $brand->products()->save($product);
        
        return redirect('/admin/products');
        
       // $product = new Product;
        //$product->product_name = $request->input('product_name');
        //$product->save();
        
       // return redirect('/products');
        
    }

    // READ
    public function view() {
        return view('admin.product.view', [
            'products' => Product::orderBy('product_name', 'asc')->get()
        ]);
    }
    
    //UPDATE
    //get
    public function editForm(Product $product) {
        return view('admin.product.edit', compact('product'));
    }
    
    //patch
    public function edit(Request $request, Product $product) {
        $product->update($request->all());
        
        return redirect('/admin/products');
    
    }
    
    // DELETE
    public function destroy(Request $request, Product $product) {
        $product->delete($request->all());
        return redirect('/admin/products');
    }
}
