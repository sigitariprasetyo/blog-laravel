@extends('layouts.main')

@section('container')
    <article>
      <h1>{{$post["title"]}}</h1>
      <h6>By:{{$post["author"]}}</h6>
      <p>{{$post["body"]}}</p>
    </article>

    <a href="/blog">Back To Posts</a>
@endsection