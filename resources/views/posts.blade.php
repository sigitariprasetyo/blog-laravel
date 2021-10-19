@extends('layouts.main')

@section('container')
  <h2 class="mb-3">{{$title}}</h2>

  @foreach ($posts as $post)
      <article class="mb-3 border-bottom pb-3">
        <h2><a href="/post/{{$post->slug}}" class="text-decoration-none"> {{$post->title}}</a></h2>
        <p>By.
          <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in 
          <a href="/category/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a>
        </p>

        <p>{{$post->excerpt}}</p>

        <a href="/post/{{$post->slug}}" class="text-decoration-none">Read more...</a>
      </article>
  @endforeach
@endsection
