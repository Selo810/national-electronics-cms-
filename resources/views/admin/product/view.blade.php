@extends('layouts.admin.admin')
@section('content')


<div class="section">

<h4 class="black-text">Product List</h4>
<div>
<button class="waves-effect waves-light btn blue-grey darken-4"> <a class="white-text" href="https://cms-with-auth-seanskiver.c9users.io/admin/product/create">Create a new Product</a></button>
</div>
<br />
<table class="striped">
        <thead class="blue-grey darken-4 white-text">
          <tr>
              <th data-field="ProductName">Product Name</th>
              <th data-field="BrandName">Brand Name</th>
              <th data-field="ImagePath">Image Path</th>
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
            <td> {{ $p->product_image }} </td>
            <td></b> {{ date_format($p->created_at, "m/d/Y") }} at {{ date_format($p->created_at, "h:m A")  }}</td>
                        <td> {{ date_format($p->updated_at, "m/d/Y") }} at  {{ date_format($p->updated_at, "h:m A")  }}</td>
                        <td><a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/product/edit/{{ $p->id }}" ><i class="Medium material-icons">mode_edit</i></a></td>
                        
                        <td><form action="/admin/product/{{$p->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                
                            <button class="btn-floating btn-large waves-effect waves-light red"><i class="Medium material-icons">delete</i></button>
                        </form>
            </td>
        </tr>
        
          @endforeach
        </tbody>
      </table>
      <br />
      <div>
        <button class="waves-effect waves-light btn blue-grey darken-4"> <a class="white-text" href="https://cms-with-auth-seanskiver.c9users.io/admin/product/create">Create a new Product</a></button>
    </div>
</div>

@stop