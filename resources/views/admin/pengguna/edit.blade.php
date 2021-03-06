@extends('template.main_admin')
@section('title','Edit Pengguna')
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

    <form action="{{ url('/kelola_pengguna/' . $pengguna->id_pengguna ) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{ $pengguna->nama }}" required>
        </div>
        <div class="form-group">
            <label for="no_tlp">No. Telepon</label>
            <input class="form-control" type="text" name="no_tlp" id="no_tlp" value="{{ $pengguna->no_tlp }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"> {{$pengguna->alamat}} </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>

@endsection