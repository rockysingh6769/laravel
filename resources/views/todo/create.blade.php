@extends('layout.app')

@section('body')
  <br>
  <a href="/todo" class="btn btn-info" style="height:35px;">Back</a>
  <div class="col-lg-4 offset-lg-4">
   <center><h1>{{ ucfirst(substr(Route::currentRouteName(),5)) }} Item</h1></center>
   <form class="form-horizontal" action="/todo/@yield('editId')" method="post">
    {{csrf_field()}} 
    @section('editMethod')
    @show
   <!-- {{ method_field('PUT') }} -->
      <fieldset>
        <div class="form-group">
          <div class="col-lg-10">
            <input type="text" name="title" class="form-control" placeholder="Title" value="@yield('editTitle')">
            <br> 
          </div>
          <div class="col-lg-10">
            <textarea class="form-control" name="body" rows="5" id="textArea" placeholder="Body">@yield('editBody')</textarea>
            <br> 
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </fieldset> 
    </form>
    @include('todo.partials.errors')
  </div>
@endsection 