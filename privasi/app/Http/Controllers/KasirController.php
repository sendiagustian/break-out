<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class KasirController extends Controller
{
    public function index()
    {
        return view('register.kasir');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
            'level' => $request->level,
        ]);

        return redirect('/users');
    }

}
