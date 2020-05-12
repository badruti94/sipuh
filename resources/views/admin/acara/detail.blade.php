@extends('template.main_admin')
@section('title','Detail Acara')
@section('content')
<div class="containter-fluid">
    <div class="card ml-3" style="width: 35rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $acara->nama_acara }}</h5>

            <table class="table table-borderless" >
                <tr>
                    <td>Nama Acara</td>
                    <td> : </td>
                    <td>{{ $acara->nama_acara }}</td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td> : </td>
                    <td>{{ $acara->keterangan }}</td>
                </tr>
                <tr>
                    <td>Tempat</td>
                    <td> : </td>
                    <td>{{ $acara->tempat }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td> : </td>
                    <td>{{ $acara->tanggal }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection('content')