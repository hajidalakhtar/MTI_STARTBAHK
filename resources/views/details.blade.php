@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card">
    <div class="jumbotron jumbotron-fluid" style="background-img:url('https://picsum.photos/200')">
      <div class="container">
        <h1 class="display-3">Fluid jumbo heading</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
      </div>
    </div>
    <div class="card-body">
      <h1>{{$training->name}}</h1>
      <img src="" alt="">
    </div>
  </div>
</div>
@endsection