@extends('layouts.admin.admin')
@section('content')
            
            <h1>Edit a Product</h1>
            
            <form method="POST" action="/admin/product/{{ $product->id }}">
                {{ method_field('PATCH') }}
                <label for="product_name">New Product Name</label>
                <input type="text" name="product_name" value="{{ $product->product_name }}">
                <label for="product_image">New Product Image</label>
                <input type="text" name="product_image" value="{{ $product->product_image }}">
                
                <br>
                <!--*** IMPORTANT ***-->
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <input type="submit" name="Submit" value="Submit">
            </form>
        </div>
@endsection