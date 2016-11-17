@extends('layouts.main')

@section('content')

<div class="section">

<h4 class="blue-text">View Categories</h4>
<div>
<button class="button"> <a href="http://ne-cms-seanskiver.c9users.io/category/create">Create a new Category</a></button>
</div>
<br />
<table class="striped">
        <thead class="blue lighten-1">
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
            <td><button class="button"><a href="/category/edit/{{ $c->id }}" ><i class="Medium material-icons">mode_edit</i></a></button></td>
            <td><form action="/category/{{$c->id}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                
            <button class="button" type="submit"><i class="Medium material-icons">delete</i></button>
                </form>
            </td>
        </tr>
        
          @endforeach
        </tbody>
      </table>
</div>
    

@stop
            
            