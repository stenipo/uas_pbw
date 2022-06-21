<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;

class PasienController extends Controller
{
    public function viewPasien()
    {
        $psn = Pasien::paginate(5);
        return view('pasien.pasien', ['pasien' => $psn]);
    }

    public function tambahPsn(){
        return view('pasien.tambahPsn');
    }

    public function simpanPsn(Request $request){
        $kln = implode(",", $request->get('keluhan'));
        Pasien::create([
            'no_pasien' => $request->no_pasien,
            'nama_pasien' => $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jenis_rawat' => $request->jenis_rawat,
            'keluhan' => $kln
        ]);
        return redirect('/masterdata/pasien')->with('success_insert','Data pasien baru telah ditambahkan!');
    }

    public function editPsn($id) {
        $psn = Pasien::find($id);
        return view('pasien.editpsn', ['pasien' => $psn]);
    }

    public function updatedPsn($id, Request $request) {
        $kln = implode(",", $request->get('keluhan'));
        $psn = Pasien::find($id);
        $psn->no_pasien = $request->no_pasien;
        $psn->nama_pasien = $request->nama_pasien;
        $psn->jenis_kelamin = $request->jenis_kelamin;
        $psn->jenis_rawat = $request->jenis_rawat;
        $psn->keluhan = $kln;
        $psn->save();
        return redirect("/masterdata/pasien")->with('success_update','Data pasien sudah diperbarui!');
    }

    public function deletePsn($id) {
        $psn = Pasien::find($id);
        $psn->delete();
        return redirect('/masterdata/pasien')->with('success_delete','Data pasien sudah dihapus!');
    }

    public function searchPsn(Request $request) {
        $cari = $request->q;
        $psn = Pasien::
        where('nama_pasien','like',"%".$cari."%")
        ->paginate();
        return view('pasien.pasien',['pasien' => $psn]);
    }
}
