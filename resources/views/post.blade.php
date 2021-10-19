@extends('layouts.main')

@section('container')
    <article class="mb-4">
      <h2 class="mb-3">{{$post->title}}</h2>
      <p>By.
          <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in 
          <a href="/category/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a>
        </p>
      {!!$post->body!!}
    </article>
    <a href="/blog">Back To Posts</a>
@endsection