@extends('layout.app')

@section('title','Welcome')

@section('body')
 Welcome {{ $user->number }}
@endsection