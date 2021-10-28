@extends('dashboard.layouts.main')

@section('container')
  <div class="container pb-4">
    <div class="row my-3">
      <div class="col-lg-8 ">
        <h1 class="mb-3">{{$post->title}}</h1>

        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all posts</a>
        <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline"> 
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Delete this post?')"><span data-feather="x-circle"></span> Delete</button>
        </form>

        <img src="https://source.unsplash.com/1200x300?{{$post->category->name}}" alt="{{$post->category->name}}" height="300" width="1200"  class="img-fluid mt-3 bg-secondary d-block" loading="lazy">

        <article class="my-4">
          {!!$post->body!!}
        </article>

      </div>
    </div>
  </div>
@endsection