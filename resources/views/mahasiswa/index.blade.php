@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="{{ route('tambah.mahasiswa')}}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Npm</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Jenis Kelamin</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td>{{ $mhs->id}}</td>
                                    <td>{{ $mhs->user->name}}</td>
                                    <td>{{ $mhs->npm}}</td>
                                    <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir}}</td>
                                    <td>{{ $mhs->alamat}}</td>
                                    <td>{{ $mhs->telepon}}</td>
                                    <td>{{ $mhs->gender}}</td>
                                    <td>
                                        <a href="{{route('edit.mahasiswa',$mhs->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{route('hapus.mahasiswa',$mhs->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
