<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Brand;
use App\Category;

class BrandController extends Controller
{
    // Authentication
    public function __construct() {
        $this->middleware('auth');
    }
    
    // CREATE
    // get
    public function create(){
        return view('admin.brand.create', [
            'categories' => Category::orderBy('category_name', 'asc')->get()
        ]);
    }
    
    // post
    public function store(Request $request){
        
        //dd($request->all());
        $category = Category::where('category_name', $request->input('category'))->first();
        $brand = new Brand;
        
        $brand->brand_name = $request->input('brand_name');
        $brand->brand_image = $request->input('brand_image');
        // TODO
        //$brand->brand_image = $request->input('brand_image');
       
        
        $category->brands()->save($brand);
        
        return redirect('/admin/brands');
        
    }

    // READ
    public function view() {
        return view('admin.brand.view', [
            'brands' => Brand::orderBy('brand_name', 'asc')->get()
        ]);            

    }
    
    //UPDATE
    //get
    public function editForm(Brand $brand) {
        return view('admin.brand.edit', compact('brand'));
    }
    
    //patch
    public function edit(Request $request, Brand $brand) {
        $brand->update($request->all());
        
        return redirect('/admin/brands');
    
    }
    
    // DELETE
    public function destroy(Request $request, Brand $brand) {
        $brand->delete($request->all());
        return redirect('/admin/brands');
    }
}

