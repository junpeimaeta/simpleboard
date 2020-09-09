@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')

<h1>Posts</h1>
<h2>Branch Test</h2>
  @foreach($posts as $post)
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text">{{ $post->content }}</p>
    </div>
    <div class="d-flex" style="height:36.4px">
      <a href="/posts/{{ $post->id }}" class="btn btn-outline-primary">Show</a><br>
      <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit</a>
      <form action="/posts/{{ $post->id }}" method="post" onsubmit="if(confirm('Delete? Are you sure?')){ return true } else { return false};">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-outline-danger">Delete</button>
      </form>
    </div>
  </div>
  @endforeach
  <a href="/posts/create/">New Post</a>

@endsection