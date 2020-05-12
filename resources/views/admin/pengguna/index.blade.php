@extends('template.main_admin')
@section('title','Data Pengguna')
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

    <a class="btn btn-primary" href="{{ url('/kelola_pengguna/create') }}"><i class="fas fa-plus"></i>Tambah</a>
    <br>
    <br>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No. Telepon</th>
                <th scope="col" colspan="3" class="text text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengguna as $pengg)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $pengg->nama }}</td>
                <td>{{ $pengg->no_tlp }}</td>
                <td class="text text-center" > <a class="btn btn-primary btn-sm" href="{{url('/kelola_pengguna/' . $pengg->id_pengguna )}}"><i class="fas fa-search-plus"></i></a> </td>
                <td class="text text-center" > <a class="btn btn-warning btn-sm" href="{{url('/kelola_pengguna/' . $pengg->id_pengguna . '/edit' )}}"><i class="fas fa-edit"></i></a> </td>
                <td class="text text-center" >
                    <form action="{{ url('/kelola_pengguna/' . $pengg->id_pengguna ) }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Data akan dihapus?');" type="submit"><i class=" fas fa-trash" ></i></button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection