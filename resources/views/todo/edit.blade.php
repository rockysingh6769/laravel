@extends('todo.create')

@section('editId',$item->id)

@section('editTitle',$item->title)

@section('editBody',$item->body)

@section('editName','Update')

@section('editMethod')
 {{ method_field('PUT') }}
@endsection
