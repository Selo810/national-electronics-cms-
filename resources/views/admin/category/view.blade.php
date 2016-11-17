@extends('layouts.admin.admin')

@section('content')

<div class="section">

<h4 class="black-text">Category List</h4>
<div>
<button class="waves-effect waves-light btn blue-grey darken-4 "> <a class="white-text" href="https://cms-with-auth-seanskiver.c9users.io/admin/category/create">Create a new Category</a></button>
</div>
<br />
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
      
</div>

@stop
            
            