@extends('layouts.main')

@section('container')
  <div class="container pb-4">
    <div class="row justify-content-center">
      <div class="col-md-8 ">
        <h1 class="mb-3">{{$post->title}}</h1>
        <p>By.
          <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in 
          <a href="/category/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a>
        </p>

        <img src="https://source.unsplash.com/1200x300?{{$post->category->name}}" alt="{{$post->category->name}}" sizes="1200x400" class="img-fluid">

        <article class="my-4">
          {!!$post->body!!}
        </article>

        <a href="/blog">Back To Posts</a>
      </div>
    </div>
  </div>
@endsection