@extends('layout.app')

@section('body')
   <br>
   @include('todo.partials.message')
   <a href="todo/create" class="btn btn-info" style="height:35px;">Add New</a>
   <div class="col-lg-6 offset-lg-3">
   		<center><h1>Todo Lists</h1></center>
   	    <ul class="list-group col-lg-8">
            @foreach($todos as $todo)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <!-- {{ ucfirst($todo->body) }} -->
             <a href="{{'/todo/'.$todo->id}}"> {{ $todo->title }}</a>
             <span class="pull-right">{{ $todo->created_at->diffForHumans() }}</span>
             <a href="{{'/todo/'.$todo->id.'/edit'}}">Edit</a>
             <form  class="form-group pull-right" action="{{'/todo/'.$todo->id}}" method="post">
               {{csrf_field()}} 
               {{ method_field('DELETE') }}
               <input type="submit" class="delete_btn" value="Delete">
             </form>
          </li>
          @endforeach
        </ul>
        
   </div>
@endsection   