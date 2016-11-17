@extends('layouts.admin.admin')
@section('content')
<div class="section" >
  <h4 class="black-text">Add Brand</h4>
<div class="row">
    <form class="col s12" method="POST" action="/admin/brand/create">
    

    <label>Browser Select</label>
  <select class="browser-default" name="category">
    <option disabled selected>Choose a category</option>
    @foreach ($categories as $category)
    <option>{{ $category->category_name }}</option>
    @endforeach
  </select>
    

      <div class="row">
    
        <div class="col s6">
          <label for="category_name">Brand Name</label>
          <input id="title" type="text" name="brand_name" >
         
        </div>
        <div class="col s6">
          <label for="BrandImage">Brand Image</label>
          <input id="title" type="text" name="brand_image" >
         
        </div>
      </div>
     <!--*** IMPORTANT ***-->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" name="Submit" value="Add Brand">
       
    </form>
   
  </div>


</div>



@endsection

