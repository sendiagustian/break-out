<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class WaiterrController extends Controller
{
    public function index()
    {
        return view('register.waiter');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
            'level' => '4',
        ]);

        return redirect('/cek');
    }
}
