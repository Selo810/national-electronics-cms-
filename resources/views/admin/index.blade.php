@extends('layouts.admin.admin')
@section('content')


<div class="row">
    <!--PRODUCT TABLE-->
    <div class="col s12 m12 l6">
        <h4>Products</h4>
        <table class="striped " style="font-size:.85em;">
            <thead class="blue-grey darken-4 white-text">
                <tr>
                  <th data-field="ProductName">Product Name</th>
                  <th data-field="BrandName">Brand Name</th>
                  <th data-field="Created">Created </th>
                  <th data-field="LastUpdated">Last Updated</th>
                  <th data-field="edit" style="width: 1px;">edit</th>
                  <th data-field="Delete" style="width: 1px;">Delete</th>
                </tr>
            </thead>
          
            <tbody>
            @foreach ($products as $p)
                <tr>
                    <td> {{ $p->product_name }}</td>
                    <td> {{ $p->brand['brand_name'] }}</td>
                    <td></b> {{ date_format($p->created_at, "m/d/Y") }}</td>
                    <td> {{ date_format($p->updated_at, "m/d/Y") }}</td>
                    <td><a class="btn-floating btn-small waves-effect waves-light blue" href="/admin/product/edit/{{ $p->id }}" ><i class="Medium material-icons">mode_edit</i></a></td>
                    <td>
                        <form action="/admin/product/{{$p->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                
                            <button class="btn-floating btn-small waves-effect waves-light red"><i class="Medium material-icons">delete</i></button>
                        </form>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <a href="admin/products"><h5 class="right-align">More Products <i style="vertical-align:middle;" class="material-icons">arrow_forward</i></h5></a>
    </div>
    <!--END PRODUCT TABLE-->
    
    <!--BRANDS TABLE-->
    <div class="col s12 m12 l6">
        <h4>Brands</h4>
            <table class="striped" style="font-size:.85em;">
                <thead class="blue-grey darken-4 white-text">
                    <tr>
                        <th data-field="BrandName">Brand Name</th>
                        <th data-field="Category">Category Name</th>
                        <th data-field="Created">Created </th>
                        <th data-field="LastUpdated">Last Updated</th>
                        <th data-field="edit" style="width: 1px;">edit</th>
                        <th data-field="Delete" style="width: 1px;">Delete</th>
                    </tr>
                </thead>
            
                <tbody>
                @foreach ($brands as $b)
                    <tr>
                        <td></b>{{ $b->brand_name }} </td>
                        <td></b>{{ $b->category->category_name }}</td>
                        <td></b> {{ date_format($b->created_at, "m/d/Y") }}</td>
                        <td> {{ date_format($b->updated_at, "m/d/Y") }}</td>
                        <td> <a class="btn-floating btn-small waves-effect waves-light blue" href="/admin/brand/edit/{{ $b->id }}" ><i class="Medium material-icons">mode_edit</i></a></td>
                        
                        <td><form action="/admin/brand/{{$b->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        
                        <button class="btn-floating btn-small waves-effect waves-light red"><i style="vertical-align:middle;" class="Medium material-icons">delete</i></button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        <a href="admin/brands"><h5 class="right-align">More Brands <i style="vertical-align:middle;" class="material-icons">arrow_forward</i></h5></a>
    </div>
    <!--END BRANDS TABLE-->
</div>

<div class="row">
    <div class="col m12 l12 s12">
        <h4>Categories</h4>
        <table class="striped">
            <thead class="blue-grey darken-4 white-text">
                <tr>
                    <th data-field="category">Category</th>
                    <th data-field="Created">Created</th>
                    <th data-field="updated">Last Updated</th>
                    <th data-field="edit" style="width: 1px;">edit</th>
                    <th data-field="Delete" style="width: 1px;">Delete</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td></b>{{ $c->category_name }} </td>
                    <td></b> {{ $c->created_at }}</td>
                    <td> {{ $c->updated_at }} </td>
                    <td><a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/category/edit/{{ $c->id }}" ><i class="Medium material-icons">mode_edit</i></a></td>
                    <td><form action="/admin/category/{{$c->id}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    
                    <button class="btn-floating btn-large waves-effect waves-light red"><i class="Medium material-icons">delete</i></button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="admin/brands"><h5 class="right-align">More Categories <i style="vertical-align:middle;" class="material-icons">arrow_forward</i></h5></a>
    </div>
</div>

<table>
    
</table>

@endsection