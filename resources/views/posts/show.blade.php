@if (session('message'))
  {{ session('message') }}
@endif

{{ $post->title }}
{{ $post->content }}

<li><a href="/posts/{{ $post->id }}/edit"> > Edit</a></li>
