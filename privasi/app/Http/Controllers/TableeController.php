<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TableeController extends Controller
{
    public function index()
    {
        return view('register.table');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
            'level' => '5',
        ]);

        return redirect('/cek');

    }

}
