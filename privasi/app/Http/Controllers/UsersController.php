<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Level;
use App\Testi;
use PDF;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with(['level_'])->get();
        $testis = Testi::all();

        return view('users.users4', compact ('users','testis'));
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
    public function edit($id)
    {
        $users = User::find($id);
        return view('users.edit1',compact('users'));
    }
    public function update(Request $request, $id)
    {
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
            'level' => $request->level,
        ]);

        return redirect('/users');

    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect('/users');


    }

    public function cetak()
    {
        $users = User::all();
        $pdf = PDF::loadView('users.print1', compact('users'));
        $pdf->setPaper('a4','portrait');
        return $pdf->stream();
    }
    

}
