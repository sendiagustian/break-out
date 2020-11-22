<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Menu;
use App\Transaksi;
use App\Testi;

class DashboardController extends Controller
{
    public function index()
    {
        $testis = Testi::all();
        $totalTesti = Testi::all()->count();
        $totalUser = User::all()->count();
        $totalMenu = Menu::all()->count();
        $totalTransaksi = Transaksi::all()->count();
        return view('dashboard1', compact('totalUser','totalMenu','totalTransaksi','totalTesti', 'testis'));
    }
}
