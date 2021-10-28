@extends('layouts.main')

@section('container')

  <h2 class="text-center mb-3">{{$title}}</h2>

  <div class="container mb-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="/posts">
          @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
          @elseif(request('author'))
            <input type="hidden" name="author" value="{{request('author')}}">
          @endif
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{request('search')}}">
            <button class="btn btn-primary" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
      <div style="height: 300px;overflow:hidden">
        <img src="{{asset('storage/'.$posts[0]->image)}}" alt="{{$posts[0]->category->name}}" class="img-fluid bg-secondary d-block"loading="lazy">
      </div>
      @else
        <img src="https://source.unsplash.com/1200x300?{{$posts[0]->category->name}}" width="1200" height="300" class="card-img-top img-fluid bg-secondary d-block" alt="{{$posts[0]->category->name}}" loading="lazy">
      @endif

      <div class="card-body text-center">
        <h3 class="card-title"><a href="/post/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
        <p class="card-text"><small class="text-muted">By <a href="/posts?author={{$posts[0]->author->username}}" class="text-decoration-none "> {{$posts[0]->author->name}}</a> in <a href="/posts?category={{$posts[0]->category->slug}}" class="text-decoration-none "> {{$posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans()}}</small></p>
        <p class="card-text"><small>{{$posts[0]->excerpt}}</small></p>

        <a href="/post/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary"><small>Read more...</small></a>
      </div>
    </div>

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="/posts?category={{$post->category->slug}}"><small class="position-absolute px-3 py-1 text-light" style="background-color: rgb(0, 0, 0,0.7)">{{$post->category->name}}</small><a>
            @if ($post->image)
              <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->category->name}}" style="object-fit: fill" class="img-fluid bg-secondary d-block" loading="lazy">
            @else
              <img src="https://source.unsplash.com/500x300?{{$post->category->name}}" width="500" height="300" class="card-img-top img-fluid bg-secondary d-block" alt="{{$post->category->name}}" loading="lazy">
            @endif
            
            <div class="card-body">
              <h5 class="card-title"><a href="/post/{{$post->slug}}" class="text-decoration-none text-dark">{{$post->title}}</a></h5>
              <p class="card-text"><small class="text-muted">By <a href="/posts?author={{$post->author->username}}" class="text-decoration-none "> {{$post->author->name}}</a> {{$post->created_at->diffForHumans()}}</small></p>
              <p class="card-text"><small>{{$post->excerpt}}</small></p>
              <a href="/post/{{$post->slug}}" class="btn btn-primary"><small>Read more...</small></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  @else
    <p class="text-center mt-2">Post not found.</p>
  @endif

  <div class="d-flex justify-content-end my-4">
    {{$posts->links()}}
  </div>
@endsection