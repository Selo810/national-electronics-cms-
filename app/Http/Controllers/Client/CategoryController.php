<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
   
    // READ
    public function view() {
        return view('client.category.view', [
            'categories' => Category::orderBy('category_name', 'asc')->get()
        ]);
    }
    
    
}
