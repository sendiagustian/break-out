<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Kategori;
use App\Testi;
use Cookie;

class RestolienController extends Controller
{
    public function index()
    {
        $menus = Menu::with(['kategori_'])->get();
        return view('restolien.restolien1', compact('menus'));
    }

    public function guide()
    {
        return view('restolien.guide');
    }
    public function about()
    {
        $testis = Testi::all();
        return view('restolien.about', compact('testis'));
    }
    public function listmenu()
    {   
        $menus = Menu::with(['kategori_'])->get();
        return view('restolien.list1', compact('menus'));
    }

    public function cart(Request $request)
    {
        $menus = Menu::with(['kategori_'])->get();
        return view('restolien.cart3', compact('request','menus'));
    }

    public function proses(Request $request)
    {

        return redirect('/cart');
    }

    public function proses_pesanan(Request $request)
    {
        $quantity = [];
        $keterangan = [];

        foreach ($request->quantity as $i => $q) {
            if ($q != null) {
                $quantity[$i] = $q;
                $keterangan[$i] = $request->keterangan[$i];
            }
        } 

        Cookie::queue('pesanan', ['quantity' => $quantity, 'keterangan' => $keterangan], 50000);  

        return redirect('/cart');
    }

}
