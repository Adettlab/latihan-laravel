@extends('component.navbar')
@section('content')
    <style>
        body {
            background-image: url('/assets/image/bck.jpg');
            background-size: cover;
        }

        .container {
            width: 65%;
            background-color: white;
            border: 2px solid;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial;
            font-weight: bold;
        }
    </style>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <br><br>
                <h4>Nama : {{ $nama }}</h4>
                <br>
                <h4>Universitas : Universitas Aki / {{ $lokasi }}</h4>
                <br>
                <h4>SI : {{ $mitra }} </h4>
            </div>
            <div class="col-6 col-md-4">
                <div style="width: 18rem; margin: auto;">
                    <img src="/assets/image/gits.jpeg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
@endsection
