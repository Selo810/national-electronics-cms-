@extends('layouts.admin.admin')
@section('content')


<div class="section">

<h4 class="black-text">Brand List</h4>
<div>
<button class="waves-effect waves-light btn blue-grey darken-4"> <a class="white-text" href="https://cms-with-auth-seanskiver.c9users.io/admin/brand/create">Create a new Brand</a></button>
</div>
<br />
<table class="striped">
        <thead class="blue-grey darken-4 white-text">
          <tr class="white-text">
              <th data-field="BrandName">Brand Name</th>
              <th data-field="Category">Category</th>
              <th data-field="ImagePath">Image Path</th>
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
            <td> {{ $b->brand_image }} </td>
            <td></b> {{ date_format($b->created_at, "m/d/Y") }} at {{ date_format($b->created_at, "h:m A")  }}</td>
                        <td> {{ date_format($b->updated_at, "m/d/Y") }} at  {{ date_format($b->updated_at, "h:m A")  }}</td>
                        <td> <a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/brand/edit/{{ $b->id }}" ><i class="Medium material-icons">mode_edit</i></a></td>
                        
                        <td><form action="/admin/brand/{{$b->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                
                           <button class="btn-floating btn-large waves-effect waves-light red"><i style="vertical-align:middle;" class="Medium material-icons">delete</i></button>
                </form>
            </td>
        </tr>
        
          @endforeach
        </tbody>
      </table>
      <br />
      <div>
        <button class="waves-effect waves-light btn blue-grey darken-4"> <a class="white-text" href="https://cms-with-auth-seanskiver.c9users.io/admin/brand/create">Create a new Brand</a></button>
    </div>
</div>




@endsection
            