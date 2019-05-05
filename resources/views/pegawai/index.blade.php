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

{{--@extends('layouts.default')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                List Pegawai--}}
{{--            </div>--}}
{{--            <div class="card-title">-----</div>--}}
{{--            <div class="card-body">--}}
{{--                <ul>--}}
{{--                    @foreach($pegawai as $p)--}}
{{--                        <li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="card-footer text-muted">--}}
{{--                2 days ago--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endsection--}}

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Pegawai - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
        </div>
        <div class="card-body">
            <a href="/pegawai/tambah" class="btn btn-primary">Input Pegawai Baru</a>
            <br/>
            <br/>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>OPSI</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>
                            <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                            <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>