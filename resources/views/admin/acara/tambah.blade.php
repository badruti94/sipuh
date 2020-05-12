@extends('template.main_admin')
@section('title','Tambah Acara')
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

    <form action="{{ url('/kelola_acara') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama_acara">Nama Acara</label>
            <input class="form-control" type="text" name="nama_acara" id="nama_acara" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="tempat">Tempat</label>
            <input class="form-control" type="text" name="tempat" id="tempat" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input class="form-control" type="date" name="tanggal" id="tanggal" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

@endsection