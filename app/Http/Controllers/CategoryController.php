<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    // Authentication
    public function __construct() {
        $this->middleware('auth');
    } 
    
    // CREATE
    // get
    public function create(){
        return view('admin.category.create');
    }
    
    // post
    public function store(Request $request){
        
        //dd($request->all());
        
        $category = new Category;
        $category->category_name = $request->input('category_name');
       
        $category->save();
        
        return redirect('/admin/categories');
        
    }
    
    // READ
    public function view() {
        return view('admin.category.view', [
            'categories' => Category::orderBy('category_name', 'asc')->get()
        ]);
    }
    
    
    //UPDATE
    //get
    public function editForm(Category $category) {
        return view('admin.category.edit', compact('category'));
    }
    
    //patch
    public function edit(Request $request, Category $category) {
        $category->update($request->all());
        
        return redirect('/admin/categories');
    
    }
    
    
    // DELETE
    public function destroy(Request $request, Category $category) {
        $category->delete($request->all());
        return redirect('/admin/categories');
    }
}
