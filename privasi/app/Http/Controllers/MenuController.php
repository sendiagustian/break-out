<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Kategori;
use App\Testi;
use PDF;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with(['kategori_'])->get();
        $testis = Testi::all();
        return view('menu.menu1', compact ('menus','testis'));
    }

    public function store(Request $request)
    {
        $file = $request->file('photo');
        $file->move('photo/',$file->getClientOriginalName());

        Menu::create([
            'nama' => $request->nama,
            'harga' => $request->harga,            
            'kategori' => $request->kategori,
            'status' => $request->status,
            'photo' => $file->getClientOriginalName(),

        ]);

        return redirect('/menu');
    }
    public function edit($id)
    {
        $menus = Menu::find($id);
        return view('menu.edit',compact('menus'));
    }
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);

        $file = $request->file('photo');

        if ($file) { 
            $file->move('photo/',$file->getClientOriginalName()); 
            $photo = $file->getClientOriginalName();
        } else {
            $photo = $menu->photo;
        }
        
        $menu->update([
            'nama' => $request->nama,
            'harga' => $request->harga,            
            'kategori' => $request->kategori,
            'status' => $request->status,
            'photo' => $photo

        ]);

        return redirect('/menu');

    }

    public function delete($id)
    {
        Menu::destroy($id);
        return redirect('/menu');
    }

    public function cetak()
    {
        $menus = Menu::all();
        $pdf = PDF::loadView('menu.printt', compact('menus'));
        $pdf->setPaper('a4','portrait');
        return $pdf->stream();
    }
    

}
