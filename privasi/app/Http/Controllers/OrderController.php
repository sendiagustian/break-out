<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\DetailOrder;
use Cookie;
use Auth;
use App\Transaksi;
use App\Testi;
use PDF;

class OrderController extends Controller
{
    public function index()
    {
        $testis = Testi::all();

        return view('order.order1',compact('testis'));
    }
    public function order($id)
    {
        $order = \App\Order::where('id', $id)->with(['detail_order'=>function($detail_order){
            $detail_order->with(['menu'])->get();
        }])->first(); 

        return view('order.statusss', ['order'=>$order]);
    }

    public function finish(Request $request)
    {
        $order = Order::create([
            'id_user' => Auth::user()->id,
            'id_meja' => $request->id_meja,
            'keterangan' => null,
            'status' => 'dipesan',
            'tanggal' => date('Y-m-d')
        ]);

        $menu = \App\Menu::all();

        foreach (Cookie::get('pesanan')['quantity'] as $i => $pesanan) {
            $menu = \App\Menu::find($i);
            $detail_order = DetailOrder::create([
                'id_order' => $order->id,
                'id_menu' => $menu->id,
                'jumlah_menu' =>$pesanan,
                'keterangan' => Cookie::get('pesanan')['keterangan'][$i]
            ]);
        }

        return redirect('/order/status/'.$order->id);
    }

    public function verify($id)
    {
        Order::find($id)->update([
            'status' => 'belum dibayar'
        ]);

        return redirect()->back()->with('msg', 'Order is ready to serve');
    }

    public function bayar(Request $request, $id)
    {
        $order = Order::where('id', $id)->with(['detail_order'=>function($detail_order){
            $detail_order->with(['menu'])->get();
        }])->first();
        

        $total = 0;

        foreach ($order->detail_order as $detail_order) {
            $total += $detail_order->menu->harga * $detail_order->jumlah_menu;
        }

        if ($request->money < $total) {
            return redirect()->back()->with('msgError', 'Money is not enough');
        }
        
        $order->update([
            'status' => 'dibayar'
        ]);

        Transaksi::create([
            'id_order' => $order->id,
            'id_user' => Auth::user()->id,
            'tanggal' => date('Y-m-d'),
            'total_bayar' => $total
        ]);

        return redirect()->back()->with('msg', '. Kembalian '.($request->money - $total));
    }

    
    public function invoice($id)
    {
        $order = Order::with(['meja', 'detail_order'=>function($detail_order){
            $detail_order->with(['menu'])->get();
        }])->where('id', $id)->first();

        $pdf = PDF::loadView('order.invoice', compact('order'));
        $pdf->setPaper('a4','portrait');
        return $pdf->stream();
    }
}
