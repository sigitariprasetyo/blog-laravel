@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
  </div>

  <div class="col-lg-8">
    <form action="/dashboard/posts" method="POST" class="mb-5" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title')}}">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{old('slug')}}">
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
          @foreach ($categories as $category)
          @if (old('category_id') == $category->id)
            <option value="{{$category->id}}" selected>{{$category->name}}</option>
          @else
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endif
          @endforeach
        </select>
        @error('category')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image Post</label>
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
        @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
          <p class="text-danger">
            {{ $message }}
          </p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{old('body')}}">
        <trix-editor input="body"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
      fetch(`/dashboard/posts/checkSlug?title=${title.value}`)
      .then(res => res.json())
      .then(data => slug.value = data.slug)
    })
  </script>
@endsection