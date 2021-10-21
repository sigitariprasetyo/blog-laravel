@extends('layouts.main')

@section('container')
  <h1 class="mb-5">Post Categories</h1>

  <div class="conteiner">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4">
          <a href="/category/{{$category->slug}}">
            <div class="card text-white bg-dark">
              <img src="https://source.unsplash.com/500x500?{{$category->name}}" class="card-img-top" alt="...">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title flex-fill p-4 fs-3 text-center" style="background-color: rgba(0, 0, 0, 0.7)">{{$category->name}}</h5>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection