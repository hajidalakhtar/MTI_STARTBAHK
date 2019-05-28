@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1 class="display-4">Selamat Datang</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
          featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </div>
    </div>


  </div>
  <div class="row">
    @foreach ($training as $data)
    <div class="col-md-6">
      <div class="card" style="width: 100%">
        <div class="card-body">
          <h2 class="card-title " style="color:rgb(102, 102, 102);font-size:26px">{{$data->name}}</h2>
          <div class="card">
            <div class="card-body">
              Tgl :{{$data->tgl}} <br>
              Fasilitator : <b>{{$data->fasilitator}}</b> <br>
              Lokasi : <b>{{$data->lokasi}}</b>

            </div>
          </div>

          <a href="{{Route('details',$data->id,$data->slug)}}" class="card-link btn btn-warning mt-3 "><b>Read
              More</b></a>

        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection