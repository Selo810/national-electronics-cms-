@extends('layouts.main')
@section('content')

<h1>View Products</h1>
<table>
  <tr>
    <th>Product Name</th>
    <th>Brand Name</th>
    <th>Image Path</th>
    <th>Created</th>
    <th>Last Updated</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
            <div>
                @foreach ($products as $p)
                    <tr>
                        <td></b>{{ $p->product_name}} </td>
                        <td>{{ $p->brand->brand_name }}</td>
                        <td>{{ $p->product_image }}</td>
                        <td></b> {{ date_format($p->created_at, "m/d/Y") }} at {{ date_format($p->created_at, "h:m A")  }}</td>
                        <td> {{ date_format($p->updated_at, "m/d/Y") }} at  {{ date_format($p->updated_at, "h:m A")  }}</td>
                        <td> <button class="button"><a href="/product/edit/{{ $p->id }}" >Edit</a></button></td>
                        
                        <td><form action="/product/{{$p->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                
                            <button class="button"type="submit">Delete Product</button>
                        </form>
                    </tr>
                    
                @endforeach
            </div>
            
            <button class="button"> <a href="https://cms-with-auth-seanskiver.c9users.io/admin/product/create">Create a new product</a></button>
        </div>

</table>
     
<style>

table, th, td {
   border: 1px solid #008CBA;
   text-align:center;
}
tr:nth-child(even) {background-color: #f2f2f2;}
th {
    background-color: #008CBA;
    color: white;
}
a{
    color:white;
    text-decoration:none;
}
.button {
    background-color: #008CBA;
    border: none;
    color:white;
    border-radius:5px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
@endsection