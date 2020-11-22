@extends('layouts.app2')
@section('content')
<div class="row" >
    <br>
    <br>
        <div class="col-md-4">
        </div>
    <div class="col-md-4" style=" padding:20px;">
        <div class="panel panel-cryptic">
            <div class="panel-heading padding_30">
                <h3 class="text-center">
                <img src="assets-dash/logo/bo-hitam.png" width="150px;" alt="">
            </h3>
                <h3 class="text-center no-margin"><strong>Invoice </strong></h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="input-table table">
                        <thead>
                            <tr>
                                <td class="text-bold"><strong>Menu</strong></td>
                                <td class="text-bold text-right"><strong>Price</strong></td>
                                <td class="text-right text-bold"><strong>Quantity</strong></td>
                                <td class="text-right text-bold"><strong>Total</strong></td>
                            </tr>
                            @php
                                $subtotal = 0;
                                $total = 0;


                            @endphp
                            @foreach ($order->detail_order as $detail_order)

                            @php
                                $total = $detail_order->menu->harga * $detail_order->jumlah_menu;
                                
                            @endphp
                                <tr>
                                    <td>{{ $detail_order->menu->nama }}</td>
                                    <td class="text-right">Rp. {{ $detail_order->menu->harga }}</td>
                                    <td class="text-right">{{ $detail_order->jumlah_menu }}</td> 
                                    <td class="text-right">Rp. {{ $total }}</td> 
                                </tr>
                                @php
                                    $subtotal += $detail_order->menu->harga * $detail_order->jumlah_menu;
                                @endphp
                            @endforeach
                        </thead>
                        
                            <tr>
                                <td class="highrow"></td>
                                <td class="highrow"></td>
                                <td class="highrow text-right"><strong>Subtotal</strong></td>
                                <td class="highrow text-right">Rp. {{ $subtotal }}</td>
                            </tr>
                            <tr>
                                <td class="emptyrow"></td>
                                <td class="emptyrow"></td>
                                <td class="emptyrow text-right"><strong>Date</strong></td>
                                <td class="emptyrow text-right">{{ $order->created_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4">
    </div>
</div>
@endsection