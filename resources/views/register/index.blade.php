@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <main class="form-register">
          <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
          <form action="/register" method="POST">
            @csrf
            <div class="form-floating">
              <input type="tetx" class="form-control @error('name') is-invalid @enderror" required id="name" name="name" value="{{old('name')}}" placeholder="Name">
              <label for="name">Name</label>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" class="form-control @error('username') is-invalid @enderror" required id="username" name="username" value="{{old('username')}}" placeholder="Username">
              <label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" class="form-control @error('email') is-invalid @enderror" required id="emain" name="email" value="{{old('email')}}" placeholder="name@example.com">
              <label for="email">Email address</label>
              @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control @error('password') is-invalid @enderror" required id="password" name="password" placeholder="Password">
              <label for="password">Password</label>
              @error('password')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
          </form>
        </main>
      </div>
    </div>
@endsection