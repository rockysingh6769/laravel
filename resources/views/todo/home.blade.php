@extends('layout.app')

@section('body')
   <br>
   @include('todo.partials.message')
   <a href="todo/create" class="btn btn-info" style="height:35px;">Add New</a>
   <div class="col-lg-6 offset-lg-3">
   		<center><h1>Todo Lists</h1></center>
        <table class="table table-hover">
          <thead>
          <tr>
          <th scope="col">Item Name</th>
          <th scope="col">Submited </th>
          <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($todos as $todo)
            <tr class="table-active">
            <td> <a href="{{'/todo/'.$todo->id}}"> {{ $todo->title }}</a></td>
            <td><span class="pull-right">{{ $todo->created_at->diffForHumans() }}</span></td>
            <td><a href="{{'/todo/'.$todo->id.'/edit'}}">Edit</a>
             <form  class="form-group pull-right" action="{{'/todo/'.$todo->id}}" method="post">
               {{csrf_field()}} 
               {{ method_field('DELETE') }}
               <input type="submit" class="delete_btn" value="Delete">
             </form></td>
          </tr>
           @endforeach
          </tbody>
        </table> 	    
  </div>
@endsection   






