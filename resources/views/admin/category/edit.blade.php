@extends('layouts.admin.admin')
@section('content')
    
    <h4 class="blue-text">Edit a category</h4>
    
    <form method="POST" action="/admin/category/{{ $category->id }}">
        {{ method_field('PATCH') }}
        <label for="CategoryName">New Category Name</label>
        <input type="text" name="category_name" value="{{ $category->category_name }}">
        
        <br>
        <!--*** IMPORTANT ***-->
        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
        <input type="submit" name="Submit" value="Submit">
    </form>

@endsection
            
            