<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Illuminate\Support\Facades\Input;
use App\Order;
use App\Testi;
use PDF;

class ReportsController extends Controller
{
    public function index()
    { 
        $dari = date_create(Input::get('dari'));
        $sampai = date_create(Input::get('sampai'));
        
        $diff = date_diff($dari, $sampai);
        
        $results = [];
        foreach (range(1, $diff->d + 1) as $i) 
        {
            $tanggal = date('Y-m-d', strtotime('+'.($i-1).' days', strtotime(Input::get('dari'))));
            
            $penghasilan = 0;
            
            $orders = Order::where('tanggal', $tanggal)->with(['detail_order'=>function($detail_order){
                $detail_order->with(['menu'])->get();
            }])->get();

            foreach ($orders as $order) {
                $penghasilan_perorder = 0;

                foreach ($order->detail_order as $do) {
                    $penghasilan_perorder += $do->menu->harga * $do->jumlah_menu;
                }

                $penghasilan += $penghasilan_perorder;
            }
            
            if ($orders->count() > 0) { 
                $results[] = [
                    'tanggal' => $tanggal,
                    'total' => $penghasilan,
                    'jumlah_order' => $orders->count()
                ];
            }
        }
        $testis = Testi::all();

        return view('reports.reports1', compact('results','testis'));
    }
    public function cetak()
    {
        $dari = date_create(Input::get('dari'));
        $sampai = date_create(Input::get('sampai'));
        
        $diff = date_diff($dari, $sampai);
        
        $results = [];
        foreach (range(1, $diff->d + 1) as $i) 
        {
            $tanggal = date('Y-m-d', strtotime('+'.($i-1).' days', strtotime(Input::get('dari'))));
            
            $penghasilan = 0;
            
            $orders = Order::where('tanggal', $tanggal)->with(['detail_order'=>function($detail_order){
                $detail_order->with(['menu'])->get();
            }])->get();

            foreach ($orders as $order) {
                $penghasilan_perorder = 0;

                foreach ($order->detail_order as $do) {
                    $penghasilan_perorder += $do->menu->harga * $do->jumlah_menu;
                }

                $penghasilan += $penghasilan_perorder;
            }
            
            if ($orders->count() > 0) { 
                $results[] = [
                    'tanggal' => $tanggal,
                    'total' => $penghasilan,
                    'jumlah_order' => $orders->count()
                ];
            }
        }  
        $pdf = PDF::loadView('reports.print1', compact('results'));
        $pdf->setPaper('a4','portrait');
        return $pdf->stream();

        // return view('reports.print1', compact('results'));

    }
}
