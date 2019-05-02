{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Tutorial Laravel #20 : Eloquent Laravel</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--<h1>Data Pegawai</h1>--}}
{{--<h3>www.malasngoding.com</h3>--}}
{{--<div class="container">--}}
{{--    <div class="card">--}}
{{--        <div class="card-head">--}}
{{--            List Pegawai--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <ul>--}}
{{--                @foreach($pegawai as $p)--}}
{{--                    <li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--</body>--}}
{{--</html>--}}

@extends('layouts.default')

@section('content')
{{--    <div class="container">--}}
        <div class="card">
            <div class="card-header">
                List Pegawai
            </div>
            <div class="card-title">-----</div>
            <div class="card-body">
                <ul>
                    @foreach($pegawai as $p)
                        <li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
{{--    </div>--}}
    @endsection