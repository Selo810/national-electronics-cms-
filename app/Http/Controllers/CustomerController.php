<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    // Authentication
    public function __construct() {
        $this->middleware('auth');
    } 
    
     // CREATE
    // get
    public function create(){
        return view('admin.customer.create');
    }
    
    // post
    public function store(Request $request){
        
        //dd($request->all());
        
        $category = new Category;
        $category->customer_name = $request->input('customer_name');
       
        $category->save();
        
        return redirect('/admin/customers');
        
    }
    
    // READ
    public function view() {
        return view('admin.customer.view', [
            'customers' => Customer::orderBy('customer_name', 'asc')->get()
        ]);
    }
    
    
    //UPDATE
    //get
    public function editForm(Customer $customer) {
        return view('admin.customer.edit', compact('customer'));
    }
    
    //patch
    public function edit(Request $request, Customer $customer) {
        $customer->update($request->all());
        
        return redirect('/admin/categories');
    
    }
    
    
    // DELETE
    public function destroy(Request $request, Customer $customer) {
        $customer->delete($request->all());
        return redirect('/admin/customers');
    }
}
