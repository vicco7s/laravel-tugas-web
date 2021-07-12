<?php

namespace App\Http\Controllers;

use App\Nilai;
use Illuminate\Http\Request;
Use Alert;
use App\Mahasiswa;
use App\Makul;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa'],['makul'])->get(); // select * from makul
        return view('nilai.index', compact('nilai'));
    }

    public function create(){
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        return view('nilai.create',compact('mahasiswa','makul'));
    }
    public function store(Request $request){
         Nilai::create($request->all());
         alert()->success('Success','Data berhasil Di simpan !');
         return redirect()->route('nilai');
    }
    public function edit($id){
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai','mahasiswa','makul'));
    }
    
    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Yeah Data Berhasil Di Ubah','success');
        return redirect()->route('nilai');
    }

    public function destroy($id){
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Data Berhasil DI hapus :)','success');
        return redirect()->route('nilai');
    }
}