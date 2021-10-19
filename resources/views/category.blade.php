@extends('layouts.main')

@section('container')
  <h2>Halaman Category {{$category}}</h2>
  @foreach ($posts as $post)
      <article class="mt-3">
        <h2>
          <a href="/post/{{$post->slug}}"> {{$post->title}}</a>
        </h2>
        <p>{{$post->excerpt}}</p>
      </article>
  @endforeach
@endsection