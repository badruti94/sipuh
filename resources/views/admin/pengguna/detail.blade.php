@extends('template.main_admin')
@section('title','Detail Pengguna')
@section('content')
<div class="containter-fluid">
    <div class="card ml-3" style="width: 35rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $pengguna->nama }}</h5>

            <table class="table table-borderless" >
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td>{{ $pengguna->nama }}</td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td> : </td>
                    <td>{{ $pengguna->no_tlp }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> : </td>
                    <td>{{ $pengguna->alamat }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection('content')