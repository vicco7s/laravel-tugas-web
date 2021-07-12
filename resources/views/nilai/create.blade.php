@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Nilai</div>

                <div class="card-body">
                    <form action="{{route('simpan.nilai')}}" method="post">
                        @csrf

                        <div class="form grub">
                            <div class="form col">
                            <div class="row">
                                    <label for="mahasiswa">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                        <option value="" disabled selected>--pilih Nama--</option>
                                        @foreach ($mahasiswa as $mhs)
                                            <option value="{{ $mhs->id}}">{{$mhs->user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="makul">Nama Matkul</label>
                                    <select name="makul_id" id="makul_id" class="form-control">
                                        <option value="" disabled selected>--pilih Nama makul--</option>
                                        @foreach ($makul as $mk)
                                            <option value="{{ $mk->id}}">{{$mk->nama_makul}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="nilai">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Tambahkan nilai" > 
                                </div>
                                
                            </div>
                            <div class="form-grub float-right">
                                <div class="form-row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                        <a href="{{route('nilai')}}" class="btn btn-md btn-danger">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
