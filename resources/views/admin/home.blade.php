@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{Route('createTraining')}}" class="btn btn-primary mb-3 mt-5">Tambah Pelatihan</a>
            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Fasilitator</th>
                                <th scope="col">Author</th>
                                <th scope="col">Max</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($training as $data)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$data->name}}</td>
                                <td>{{$data->fasilitator}}</td>
                                <td>{{$data->author}}</td>
                                <td>{{$data->max}}</td>
                                <td><a href="" class="btn btn-danger">Delete</a><a href=""
                                        class="ml-3 btn btn-warning">Edit</a><a href=""
                                        class="ml-3 btn btn-success">View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection