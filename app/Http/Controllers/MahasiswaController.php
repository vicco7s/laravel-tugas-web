<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Alert;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all(); //select * from mahasiswa
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create(){
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        Mahasiswa::create(([
            'user_id' => auth()->id(),
            'npm' => request('npm'),
            'tgl_lahir' => request('tgl_lahir'),
            'tempat_lahir' => request('tempat_lahir'),
            'alamat' => request('alamat'),
            'telepon' => request('telepon'),
            'gender' => request('gender')
        ]));
        alert()->success('Success','Data berhasil Di simpan !');
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $mhs = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mhs'));
    }

    public function update(Request $request, $id){
        $mhs = Mahasiswa::find($id);
        $mhs->update($request->all());
        toast('Yeah Data Berhasil Di Ubah','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id){
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        toast('Data Berhasil DI hapus :)','success');
        return redirect()->route('mahasiswa');
    }
}
