@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')
<form action="/posts" method="post">
  {{ csrf_field() }}
  <input type="text" name="title" id="">
  <input type="text" name="content" id="">
  <input type="submit">
</form>

@endsection
