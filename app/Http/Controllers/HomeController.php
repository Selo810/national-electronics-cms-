<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // Authentication
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     
     /**
    public function index()
    {
        return view('admin.index');
    }
    **/
    
    
    public function index()
    {
        $products = Product::orderBy('created_at', 'desv')->take(5)->get();
        return view('admin.index', compact('products'));
    }
}
