@extends('component.navbar')
@section('content')
    <style>
        body {
            background-image: url('/assets/image/bck.jpg');
            background-size: cover;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 150px;
            font-family: Arial;
        }
    </style>
    <div class="container" style="text-align: center;">
        <p style="font-size: 50px;">Halo <b>{{ $nama }} </b></p>
    </div>
@endsection
