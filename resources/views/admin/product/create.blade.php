@extends('layouts.admin.admin')
@section('content')
            
            
<div class="section" >
<h4 class="black-text">Add Product</h4>
<div class="row">
    <form class="col s12" method="POST" action="/admin/product/create">
    

    <label>Brand Selection</label>
  <select class="browser-default" name="brand">
    <option disabled selected>Select a Brand</option>
    @foreach ($brands as $brand)
    <option>{{ $brand->brand_name }}</option>
    @endforeach
  </select>
    

      <div class="row">
    
        <div class="col s6">
          <label for="ProductName">Product Name</label>
          <input id="title" type="text" name="product_name" >
         
        </div>
        <div class="col s6">
          <label for="ProductImage">Product Image</label>
          <input id="title" type="text" name="product_image" >
         
        </div>
      </div>
     <!--*** IMPORTANT ***-->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" name="Submit" value="Add Product">
       
    </form>
   
  </div>


</div>

@endsection

