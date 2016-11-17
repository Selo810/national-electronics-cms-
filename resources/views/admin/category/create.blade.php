
@extends('layouts.admin.admin')
@section('content')

<div class="section" >
  <h4 class="black-text">Add Category</h4>
<div class="row">
    <form class="col s12" method="POST" action="/admin/category/create">
      <div class="row">
        <div class="col s6">
          <label for="category_name">Category Name</label>
          <input id="title" type="text" name="category_name" >
         
        </div>
      </div>
     <!--*** IMPORTANT ***-->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" name="Submit" value="Add Category">
       
    </form>
   
  </div>


        </div>
@endsection


            
            