<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Testi;
use PDF;

class CategoryController extends Controller
{
    public function index()
    {
        $testis = Testi::all();
        $kategoris = Kategori::all();
        return view('category.category1', compact('kategoris','testis'));
    }

    public function store(Request $request)
    {
        Kategori::create([
            'kategori' => $request->kategori,
        ]);

        return redirect('/category');
    }
    public function edit($id)
    {
        $kategoris = Kategori::find($id);
        return view('category.edit',compact('kategoris'));
    }
    public function update(Request $request, $id)
    {
        Kategori::find($id)->update([
            'kategori' => $request->kategori,
            
        ]);

        return redirect('/category');

    }

    public function delete($id)
    {
        Kategori::destroy($id);
        return redirect('/category');
    }

    public function cetak()
    { 
        $kategoris = Kategori::all();
        $pdf = PDF::loadView('category.print', compact('kategoris'));
        $pdf->setPaper('a4','portrait');
        return $pdf->stream();
    }
}
