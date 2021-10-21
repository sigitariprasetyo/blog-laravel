@extends('layouts.main')

@section('container')
  @if ($posts->count())
    <h2 class="mb-3">{{$title}}</h2>

    <div class="card mb-3">
      <img src="https://source.unsplash.com/1200x300?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
      <div class="card-body text-center">
        <h3 class="card-title"><a href="/post/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
        <p class="card-text"><small class="text-muted">By <a href="/author/{{$posts[0]->author->username}}" class="text-decoration-none "> {{$posts[0]->author->name}}</a> {{$posts[0]->created_at->diffForHumans()}}</small></p>
        <p class="card-text"><small>{{$posts[0]->excerpt}}</small></p>

        <a href="/post/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary"><small>Read more...</small></a>
      </div>
    </div>

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="/category/{{$post->category->slug}}"><small class="position-absolute px-3 py-1 text-light" style="background-color: rgb(0, 0, 0,0.7)">{{$post->category->name}}</small><a>
            <img src="https://source.unsplash.com/500x300?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
            <div class="card-body">
              <h5 class="card-title"><a href="/post/{{$post->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h5>
              <p class="card-text"><small class="text-muted">By <a href="/author/{{$post->author->username}}" class="text-decoration-none "> {{$post->author->name}}</a> {{$post->created_at->diffForHumans()}}</small></p>
              <p class="card-text"><small>{{$post->excerpt}}</small></p>
              <a href="/post/{{$post->slug}}" class="btn btn-primary"><small>Read more...</small></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  @else
    <p class="text-center mt-5">Post not found.</p>
  @endif
@endsection
