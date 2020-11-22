    @extends('layouts.home')
    @section('content')
    
    <body>
        <div class="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    
    </header>

    <div class=" text-center" style="margin-top:20px;">
            <h1><i class="fa fa-shopping-bag"></i> Your Order</h1>

    </div>
    <!-- Shop Cart
    ============================================= -->
    <section id="shopcart" class="shop shop-cart bg-gray" >
        <div class="container">
            
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:-50px;">
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="cart-product">
                                    <th class="cart-product-item">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-quantity">Note</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php                             
                                $total = 0;
                                @endphp

                                @foreach (\Cookie::get('pesanan')['quantity'] as $key => $pesanan)
                                    @php
                                        $menu = \App\Menu::find($key);
                                    @endphp
                                <tr class="cart-product">
                                    <td class="cart-product-item">
                                        <div class="cart-product-name">
                                        <h6>{{ $menu->nama }}</h6>
                                        </div>
                                    </td>
                                    <td class="cart-product-price">Rp. {{ number_format($menu->harga,0) }}</td>
                                    <td class="text-center">
                                        {{ $pesanan }}
                                    </td>
                                    <td class="cart-product-item">
                                            <div class="cart-product-name">
                                            <h6>
                                                    {{ \Cookie::get('pesanan')['keterangan'][$key] }}
                                            </h6>
                                            </div>
                                        </td>
                                    <td class="cart-product-total">Rp. {{ number_format($menu->harga * $pesanan,0) }}</td>
                                </tr>
                                @php
                                $total += $menu->harga * $pesanan;
                                @endphp
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- .cart-table end -->
                </div>
                <!-- .col-md-12 end -->
                
                </div> 

            <form action="{{url('/order/finish')}}" method="POST">
                {{ csrf_field() }}
                <div class="col-xs-12 col-sm-12  col-md-12">
                        <div class="cart-total-amount">
                            @if (Auth::user()->level == "5")
                                
                            <h6>Your Table : {{Auth::user()->name}}</h6>
                            
                        <input type="hidden" value="{{ Auth::user()->id }}" name="id_meja">
                            
                            
                            @elseif(Auth::user()->level != "5" )
                            <h6>Choose Table</h6>
        
                            <select name="id_meja" class="form-control">
                                @foreach (\App\User::where('level', 5)->get() as $meja)
                            <option value="{{ $meja->id }}" class="form-control">{{ $meja->name }}</option>
                                @endforeach
                            </select>
                            @endif
                            
                            
                            <ul class="list-unstyled" style="margin-bottom:50px;margin-top:50px;">
                                    <li>Totals Order :<span class="pull-right text-right cart-product-price"><h5>Rp. {{ number_format($total,0) }}</h5></span></li> <br>
                                        <li><span class="pull-right text-right"><button type="submit" class="btn btn-default btn-element">Order</button></span></li>
                                        <li><span class="pull-right text-right"><a class="btn btn-default btn-element" href="{{url('/list-menu')}}">Back</a></span></li>
                                
                
                                    </ul>
                        </div>
                        
                        <!-- .cart-note-amount end -->
                    </div>

                    <!-- .cart-note-amount end -->
                </div>
            </form>
                
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #shopcart end -->

            
        @endsection