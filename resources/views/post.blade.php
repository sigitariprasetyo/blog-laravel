@extends('layouts.main')

@section('container')
    <article class="mb-4">
      <h2>{{$post->title}}</h2>
      {!!$post->body!!}
    </article>

    <a href="/blog">Back To Posts</a>
@endsection