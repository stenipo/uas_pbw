<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konten;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function viewAbout()
    {
        $ktn = Konten::all();
        return view('about', ['konten' => $ktn]);
    }

    public function editAbout($id) {
        $ktn = Konten::find($id);
        return view('editAbout', ['konten' => $ktn]);
    }

    public function updatedAbout($id, Request $request) {
        $ktn = Konten::find($id);
        $ktn->about = $request->about;
        $ktn->save();
        return redirect("/about")->with('success_update','Data sudah diperbarui!');
    }

    public function viewContact()
    {
        $ktn = Konten::all();
        return view('contact', ['konten' => $ktn]);
    }

    public function editContact($id) {
        $ktn = Konten::find($id);
        return view('editContact', ['konten' => $ktn]);
    }

    public function updatedContact($id, Request $request) {
        $ktn = Konten::find($id);
        $ktn->email = $request->email;
        $ktn->telepon = $request->telepon;
        $ktn->fax = $request->fax;
        $ktn->alamat = $request->alamat;
        $ktn->save();
        return redirect("/contact")->with('success_update','Data sudah diperbarui!');
    }

    public function viewProfile()
    {
        return view('profile');
    }
}
