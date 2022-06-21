<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;

class DokterController extends Controller
{
    public function viewDokter()
    {
        $dtr = Dokter::paginate(5);
        return view('dokter.dokter', ['dokter' => $dtr]);
    }

    public function tambahDtr(){
        return view('dokter.tambahDtr');
    }

    public function simpanDtr(Request $request){
        $lyn = implode(",", $request->get('layanan'));
        Dokter::create([
            'no_dokter' => $request->no_dokter,
            'nama_dokter' => $request->nama_dokter,
            'jenis_kelamin' => $request->jenis_kelamin,
            'spesialis' => $request->spesialis,
            'layanan' => $lyn
        ]);
        return redirect('/masterdata/dokter')->with('success_insert','Data dokter baru telah ditambahkan!');
    }

    public function editDtr($id) {
        $dtr = Dokter::find($id);
        return view('dokter.editdtr', ['dokter' => $dtr]);
    }

    public function updatedDtr($id, Request $request) {
        $lyn = implode(",", $request->get('layanan'));
        $dtr = Dokter::find($id);
        $dtr->no_dokter = $request->no_dokter;
        $dtr->nama_dokter = $request->nama_dokter;
        $dtr->jenis_kelamin = $request->jenis_kelamin;
        $dtr->spesialis = $request->spesialis;
        $dtr->layanan = $lyn;
        $dtr->save();
        return redirect("/masterdata/dokter")->with('success_update','Data dokter sudah diperbarui!');
    }

    public function deleteDtr($id) {
        $dtr = Dokter::find($id);
        $dtr->delete();
        return redirect('/masterdata/dokter')->with('success_delete','Data dokter sudah dihapus!');
    }

    public function searchDtr(Request $request) {
        $cari = $request->q;
        $dtr = Dokter::
        where('nama_dokter','like',"%".$cari."%")
        ->paginate();
        return view('dokter.dokter',['dokter' => $dtr]);
    }
}
