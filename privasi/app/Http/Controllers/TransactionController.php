<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Testi;

class TransactionController extends Controller
{
    public function index()
    {
        $testis = Testi::all();
        $transactions = Transaksi::all();
        return view('transaction.payment', compact('transactions','testis'));
    }
    
    public function cetak()
    {
        $transactions = Transaksi::all();
        return view('transaction.print', compact('transactions'));

    }
    public function history()
    {
        $testis = Testi::all();
        $transactions = Transaksi::where('status','dibayar');
        return view('transaction.history', compact('transactions','testis'));
    }
}
