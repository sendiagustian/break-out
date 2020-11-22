<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testi;

class TestiController extends Controller
{
    public function index()
    {
        $testis = Testi::all();
        return view('testimony.testimony', compact('testis'));
    }

    public function store(Request $request)
    {
        Testi::create([
            'nama' => $request->nama,
            'testi' => $request->testi,
            'status' => 'dikirim',
        ]);

        return redirect('/cek');

    }

    public function delete($id)
    {
        Testi::destroy($id);
        return redirect('/testimony');
    }

    public function verify($id)
    {
        Testi::find($id)->update([
            'status' => 'ditampilkan'
        ]);

        return redirect()->back()->with('msg', 'Testimony has been showing in welcome home');
    }
    
    public function tolak($id)
    {
        Testi::find($id)->update([
            'status' => 'tolak'
        ]);

        return redirect()->back()->with('msg2', 'Testimony has been unacceptable');
    }

}
