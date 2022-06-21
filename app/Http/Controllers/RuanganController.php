<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;

class RuanganController extends Controller
{
    public function viewRuangan()
    {
        $rrg = Ruangan::paginate(5);
        return view('ruangan.ruangan', ['ruangan' => $rrg]);
    }

    public function tambahRrg(){
        return view('ruangan.tambahRrg');
    }

    public function simpanRrg(Request $request){
        Ruangan::create([
            'nama_ruangan' => $request->nama_ruangan,
            'no_ruangan' => $request->no_ruangan,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/masterdata/ruangan')->with('success_insert','Data ruangan baru telah ditambahkan!');
    }

    public function editRrg($id) {
        $rrg = Ruangan::find($id);
        return view('ruangan.editRrg', ['ruangan' => $rrg]);
    }

    public function updatedRrg($id, Request $request) {
        $rrg = Ruangan::find($id);
        $rrg->nama_ruangan = $request->nama_ruangan;
        $rrg->no_ruangan = $request->no_ruangan;
        $rrg->keterangan = $request->keterangan;
        $rrg->save();
        return redirect("/masterdata/ruangan")->with('success_update','Data ruangan sudah diperbarui!');
    }

    public function deleteRrg($id) {
        $rrg = Ruangan::find($id);
        $rrg->delete();
        return redirect('/masterdata/ruangan')->with('success_delete','Data ruangan sudah dihapus!');
    }

    public function searchRrg(Request $request) {
        $cari = $request->q;
        $rrg = Ruangan::
        where('nama_ruangan','like',"%".$cari."%")
        ->paginate();
        return view('ruangan.ruangan',['ruangan' => $rrg]);
    }
}
