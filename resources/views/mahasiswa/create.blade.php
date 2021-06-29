@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form action="{{route('simpan.mahasiswa')}}" method="post">
                        @csrf

                        <div class="form grub">
                            <div class="form col">
                                <!-- <div class="row">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Tambahkan nama"> 
                                </div> -->
                                <div class="row">
                                    <label for="npm">Npm</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Tambahkan npm"> 
                                </div>
                                <div class="row">
                                    <label for="tanggal">tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder=""> 
                                </div>
                                <div class="row">
                                    <label for="tempat">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir"> 
                                </div>
                                <div class="row">
                                    <label for="alamat">Alamat</label>
                                    <input type="type" name="alamat" class="form-control" placeholder="Masukan Alamat"> 
                                </div>
                                <div class="row">
                                    <label for="telepon">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="tambahkan Nomor telepon"> 
                                </div>
                                <div class="row">
                                    <label for="gender">gender</label>
                                    <br>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="">Select menu</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <br>
                            </div>
                            <div class="form-grub float-right">
                                <div class="form-row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                        <a href="{{route('mahasiswa')}}" class="btn btn-md btn-danger">Batal</a>
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
