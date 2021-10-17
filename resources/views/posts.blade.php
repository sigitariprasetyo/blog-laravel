@extends('layouts.main')

@section('container')
  <h2>Halaman Posts</h2>

  @foreach ($posts as $post)
      <article class="mt-5">
        <h1>
          <a href="/post/{{$post["slug"]}}"> {{$post["title"]}}</a>
        </h1>
        <h6>By : {{$post["author"]}}</h6>
        <p>{{$post["body"]}}</p>
      </article>
  @endforeach
@endsection
