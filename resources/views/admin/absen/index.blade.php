@extends('template.main_admin')
@section('title','Data Absen')
@section('content')

<div class="container-fluid">

    @if (session('status'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <br>
    <br>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Acara</th>
                <th scope="col">Tempat</th>
                <th scope="col">Tanggal</th>
                <th scope="col" class="text text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($acara as $acr)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $acr->nama_acara }}</td>
                <td>{{ $acr->tempat }}</td>
                <td>{{ $acr->tanggal }}</td>
                <td class="text text-center" > <a class="btn btn-primary btn-sm" href="{{url('/admin/absen/detail/' . $acr->id_acara )}}">Lihat Absen</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection