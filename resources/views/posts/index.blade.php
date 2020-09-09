@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')

<h1>Posts</h1>

<a href="/posts/create/">New Post</a>
<ul>
  @foreach($posts as $post)
  <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a><br>
    <a href="/posts/{{ $post->id }}/edit"> > Edit</a><br>

  <form action="/posts/{{ $post->id }}" method="post">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">Delete</button>
  </form>
  </li>

  @endforeach
</ul>

@endsection