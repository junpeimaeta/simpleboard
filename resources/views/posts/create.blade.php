@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')
<form action="/posts" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
  <input type="text" class="form-controll" area-describedby="emailHelp" name="title">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Content</label>
  <input type="text" class="form-controll" name="content">
  </div>
  <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
<a href="/posts">Back</a>

@endsection
