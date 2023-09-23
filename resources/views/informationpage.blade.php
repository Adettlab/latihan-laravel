@extends('component.navbar')
@section('content')
    <style>
        body {
            background-image: url('/assets/image/bck.jpg');
            background-size: cover;
            font-family: Arial;
        }

        .kotak {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <img src="/assets/image/Unaki.png" alt="" style="width: 200px">
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="kotak">
                    <h3><b>{{ $kampus }}</b> </h3>
                    <p>{{ $alamat }}</p>
                    <h4><b>"VISI"</b></h4>
                    <P>Menjadi universitas yang unggul berdaya saing nasional, dalam bidang ilmu pengetahuan dengan
                        mengedepankan teknologi dan bisnis atas dasar keimanan Tuhan Yang Maha Esa</P>
                    <h4><b>"MISI"</b></h4>
                    <p>Menjaga dan meningkatkan mutu dalam pendidikan, penelitian, pengabdian</p>
                </div>
            </div>
        </div>
    </div>
@endsection
