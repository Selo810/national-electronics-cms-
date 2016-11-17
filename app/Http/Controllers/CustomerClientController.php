<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerClientController extends Controller
{
     // get
    public function create(){
        return view('client.customer.create');
    }
}
