@extends('layouts.admin.admin')
@section('content')
            <h1>Edit a Brand</h1>
            
            <form method="POST" action="/admin/brand/{{ $brand->id }}">
                {{ method_field('PATCH') }}
                <label for="BrandName">New Brand Name</label>
               
                <input type="text" name="brand_name" value="{{ $brand->brand_name }}">
                
                <br>
                <input type="text" name="brand_image" value="{{ $brand->brand_image }}">
                <br>
                <!--*** IMPORTANT ***-->
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <input type="submit" name="Submit" value="Submit">
            </form>
        </div>
@endsection
            
            