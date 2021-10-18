@extends('layouts.main')

@section('container')
  <h2>Halaman About</h2>
  <h4>{{$name}}</h4>
  <h5>{{$email}}</h5>
  <img src="img/{{$image}}" alt="img" width="200px" height="200px" class="img-thumbnail rounded-circle"/>
@endsection
