@extends('layouts.main')

@section('container')
    <article class="mb-4">
      <h2>{{$post->title}}</h2>
      <p>By : Reyna in <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a></p>
      {!!$post->body!!}
    </article>
    <a href="/blog">Back To Posts</a>
@endsection