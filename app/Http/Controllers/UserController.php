<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function viewUser()
    {
        $usr = User::paginate(5);
        return view('user.user', ['user' => $usr]);
    }

    public function searchUsr(Request $request) {
        $cari = $request->q;
        $usr = User::
        where('name','like',"%".$cari."%")
        ->paginate();
        return view('user.user',['user' => $usr]);
    }
}
