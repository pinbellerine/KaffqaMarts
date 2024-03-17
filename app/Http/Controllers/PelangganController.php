<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PelangganController extends Controller
{
    public function index(){
        $profil = DB::table('profil')->get();

        $title = 'Peringatan !';
        $text = 'Apakah anda yakin ingin menghapus ?';
        $icon = "Question";
        confirmDelete($title,$text);

        return view('pelanggan.index_pelanggan',compact('profil'));
    }

    public function tambahpelanggan(){
        return view('pelanggan.tambahpelanggan');
    }

    public function pelanggan(Request $request)
    {
        $request->validate([
            'nama' => 'required|',
            'nohp' => 'required|',
            'alamat' => 'required|'
        ]);

        DB::table('profil')-> insert([
            'nama_lengkap' => $request->nama,
            'no_hp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);
        Alert::success('Success','Data Berhasil');
        return redirect('/pelanggan');
    }

    public function show($id){
        $profil = DB::table('profil')->find($id);
        return view('pelanggan.detailpelanggan', compact('profil'));
    }

    public function edit($id){
        $profil = DB::table('profil')->find($id);
        return view('pelanggan.editpelanggan',compact('profil'));
    }

    public function update(Request $request, $id){
        $request -> validate([
            'nama' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
        ]);
        $request = DB::table('profil')
        ->where('id',$id)
        ->update([
            'nama_lengkap' => $request -> nama,
            'no_hp' => $request -> nohp,
            'alamat' => $request -> alamat,
        ]);

        Alert::success('Success', 'Data berhasil di Updae');
        return redirect('/pelanggan');
    }

    public function destroy($id){
        $profil = DB::table('profil')->where('id',$id)->delete();
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/pelanggan');
    }
}
