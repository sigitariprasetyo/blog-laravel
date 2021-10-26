@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
  </div>

  <div class="col-lg-8">
    <form action="/dashboard/posts" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" id="slug">
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select">
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input id="body" type="hidden" name="body">
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

{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum maxime a consequuntur itaque adipisci doloribus iusto incidunt aspernatur assumenda possimus harum dignissimos culpa porro vel dolorum perferendis delectus in, corrupti fuga quis necessitatibus. 

Nulla sint autem impedit explicabo cum, vero deserunt ratione, eius soluta, cupiditate quibusdam ullam atque! Explicabo repellat adipisci rerum quaerat distinctio sit, eligendi veniam laborum repellendus totam, illum vitae placeat consequuntur similique doloremque porro deserunt consectetur amet molestias?

Molestiae similique, voluptate aperiam perferendis iusto pariatur aut deserunt earum veniam perspiciatis fugit possimus, labore quam officia nisi qui nihil, veritatis porro. Dignissimos animi veniam libero, neque culpa quia? --}}