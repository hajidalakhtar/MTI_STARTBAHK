@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-9">

            <form action="{{Route('addTraining')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="" class="h3">Judul</label>
                <input type="text" name="judul" class="form-control">
                <label for="" class="h3">Tgl Pelaksanaan</label>
                <input type="datetime-local" name="tgl" class="form-control">
                <label for="" class="h3">Lokasi</label>
                <input type="string" name="lokasi" class="form-control">
                <label for="" class="h3">Author</label><br>
                <input type="text" name="author" class="form-control">
                <label for="" class="h3">Fasilitator</label><br>
                <input type="text" name="fasilitator" class="form-control">
                <label for="" class="h3">Max</label>

                <input type="number" name="max" class="form-control">
                <label for="" class="h3">Tentang Training</label> <br>
                <textarea class="form-control" name="tentang">

                </textarea>
                <input type="file" class="mt-3" name="Images">
                <input type="submit">

            </form>
        </div>
    </div>

</div>

@endsection