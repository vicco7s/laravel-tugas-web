@extends('layouts.app')
 
@section('content')
    
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">Tambah Mata Kuliah </div>
                 <div class="card-body">
                 <form method="POST" action="{{ route('simpan.makul')}}">
                 @csrf
                         <div class="form-group">
                            <div class="from row">
                                <div class="col">
                                    <label>Kode Mata Kuliah</label>
                                    <input type="text" class="form-control" name="kode_makul" placeholder="Masukan Kode Mata Kuliah...">
                                </div>
                                <div class="col">
                                    <label>Nama Mata Kuliah</label>
                                    <input type="text" class="form-control" name="nama_makul" placeholder="Masukan Nama Mata Kuliah...">
                                </div>
                                <div class="col">
                                    <label>SKS</label>
                                    <input type="number" class="form-control" name="sks" placeholder="Masukkan SKS Mata Kuliah...">
                                </div>
                            </div>
                        </div>
                        <div class="form group">
                            <div class="form row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('makul')}}" class="btn btn-md btn-danger">BATAL</a>
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