@extends('layouts.dashboard2')
@section('menu')  

@if (Auth::user()->level=="1")
<li >                           
    <a href="{{url('/users')}}"><i class="fa fa-users"></i> <span>Users</span></a>
  </li>
  <li><a><i class="fa fa-home"></i> <span>Menu </span><span class="fa fa-angle-down"></span></a>
    <ul class="nav child_menu">
      <li><a href="{{url('/menu')}}"><span>Food & Drink</span></a></li>
      <li><a href="{{url('/category')}}"><span>Category</span></a></li>
    </ul>
  </li>

  <li><a href="{{url('/list-menu')}}" ><i class="fa fa-shopping-cart"></i> <span>Add Order</span></a>
  </li>

  <li><a href="{{url('/order')}}" ><i class="fa fa-shopping-bag"></i> <span>Order</span></a>
  </li>
  
  <li><a><i class="fa fa-dollar"></i> <span>Transaction </span><span class="fa fa-angle-down"></span></a>
    <ul class="nav child_menu">
      <li><a href="{{url('/payment')}}"><span>Payment</span></a></li>
      <li><a href="{{url('/history')}}"><span>History</span></a></li>
    </ul>
  </li>

    <li><a href="{{url('/reports')}}" ><i class="fa fa-file"></i> <span>Reports</span></a>
    </li>  
    <li><a href="{{url('/testimony')}}" ><i class="fa fa-star"></i> <span>Testimony</span></a>


</li> 
@elseif (Auth::user()->level=="3")
<li ><a href="#" type="button" data-toggle="modal" data-target="#addWaiter"><i class="fa fa-user"></i> <span>Add Waiter</span></a> </li>
<li class="active"><a><i class="fa fa-dollar"></i> <span>Transaction </span><span class="fa fa-angle-down"></span></a>
  <ul class="nav child_menu">
    <li><a href="{{url('/payment')}}"><span>Payment</span></a></li>
    <li><a href="{{url('/history')}}"><span>History</span></a></li>
  </ul>
</li>

<li ><a href="{{url('/reports')}}"><i class="fa fa-file"></i> <span>Reports</span></a>
</li>


</li> 
@elseif (Auth::user()->level=="4")
<li ><a href="#" type="button" data-toggle="modal" data-target="#addModal"><i class="fa fa-table"></i> <span>Add Table</span></a> </li>
<li ><a href="{{url('/list-menu')}}"><i class="fa fa-shopping-cart"></i> <span>Add Order</span></a> </li>
<li  ><a href="{{url('/order')}}"><i class="fa fa-shopping-bag"></i> <span>Order</span></a></li>
<li class="active"><a href="#"><i class="fa fa-dollar"></i> <span>History</span></a>



<li ><a href="{{url('/reports')}}"><i class="fa fa-file"></i> <span>Reports</span></a>
</li> 
@elseif (Auth::user()->level=="2")

<li class="active"><a href="#"><i class="fa fa-dollar"></i> <span>History</span></a>
</li>
<li ><a href="{{url('/reports')}}"><i class="fa fa-file"></i> <span>Reports</span></a>
</li> 
@endif
@endsection 

@section('content')
          <div id="dashboard-v1" class="right_col" role="main">
            <div class="spacer_30"></div>
            <div class="clearfix"></div>
            <div class="row">
              
            <div class="panel panel-default element-box-shadow">
              <div class="panel-heading padding_30">
                <h3 class="no-margin"> <i class="fa fa-list"></i> History</h3> <br>

              
                {{-- <a class="btn btn-info" href="{{url('/transaction/print')}}"><i class="fa fa-print fa-2x "></i></a> --}}
              </div>
              <div class="panel-body dash-table-markets no-padding overflow-table">
                <table id="trade-history" class="table table-cryptic dataTable no-footer table-responsive" data-page-length="10">
                  <thead>
                     <tr>
                       @if (Auth::user()->level == "1")
                        <th>No <i class="fa fa-sort"></i></th>
                        <th>Date  <i class="fa fa-sort"></i></th>
                        <th>User <i class="fa fa-sort"></i></th>
                        <th>Order <i class="fa fa-sort"></i></th>
                        <th>Totals  <i class="fa fa-sort"></i></th>
                        {{-- <th>Option  <i class="fa fa-sort"></i></th> --}}
                        @endif
                        @if (Auth::user()->level == "2")
                        <th>No <i class="fa fa-sort"></i></th>
                        <th>Date  <i class="fa fa-sort"></i></th>
                        <th>User <i class="fa fa-sort"></i></th>
                        <th>Order <i class="fa fa-sort"></i></th>
                        <th>Totals  <i class="fa fa-sort"></i></th>
                        @endif
                        @if (Auth::user()->level == "3")
                        <th>No <i class="fa fa-sort"></i></th>
                        <th>Date  <i class="fa fa-sort"></i></th>
                        <th>User <i class="fa fa-sort"></i></th>
                        <th>Order <i class="fa fa-sort"></i></th>
                        <th>Totals  <i class="fa fa-sort"></i></th>
                        <th>Option</th>
                        @endif
                        @if (Auth::user()->level == "4")
                        <th>No <i class="fa fa-sort"></i></th>
                        <th>Date  <i class="fa fa-sort"></i></th>
                        <th>User <i class="fa fa-sort"></i></th>
                        <th>Order <i class="fa fa-sort"></i></th>
                        <th>Totals  <i class="fa fa-sort"></i></th>
                        <th>Note</th>
                        @endif


                 </tr>
                  </thead>
                   <tbody>
                     @foreach (\App\Order::with(['transaksi', 'meja', 'detail_order'=>function($detail_order){
                        $detail_order->with(['menu'])->get();
                      }])->orderBy('id','desc')->Where('status', 'dibayar')->get() as $i => $order)
                         
                      <tr>
                          <td><p class="no-margin">{{++$i}}</p></td>
                          <td><p class="no-margin"> {{$order->created_at}} </p></td>
                          <td><p class="no-margin"> {{$order->meja->name}} </p></td>
                          <td><p class="no-margin"> 
                            <table>
                                <tr>
                                    <th>Menu</th>
                                    <th>Quantity</th>    
                                </tr>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($order->detail_order as $detail_order)
                                    <tr>
                                        <td>{{ $detail_order->menu->nama }}</td>
                                        <td>{{ $detail_order->jumlah_menu }}</td>    
                                    </tr>
                                    @php
                                        $total += $detail_order->jumlah_menu * $detail_order->menu->harga;
                                    @endphp
                                @endforeach    
                            </table>      
                            </p></td>
                          <td class="no-wrap"><span class="label label-success">Rp. {{ number_format($total,0) }}</span></td>
                          @if (Auth::user()->level == "4")
                                @if ($order->transaksi != null) 
                                <td><label for="" class="label label-success">Paid</label></td>
                                @endif
                                @if ($order->transaksi == null) 
                                <td><label for="" class="label label-success">Not Yet Paid</label></td>
                                @endif
                          @endif
                          <td>  
                              @if (Auth::user()->level =="3")
                                @if ($order->transaksi != null) 
                                {{-- <label for="" class="label label-success">Dibayar</label> --}}
                                @if (Auth::user()->level != "2")                                    
                                <a href="{{ url('/order/invoice/' . $order->id) }}" class="btn btn-sm btn-success">Print Invoice</a>
                                @endif
                                @else 
                                <a href="{{ url('order/bayar/' . $order->id) }}"><p class="no-margin"> <i class="fa fa-money"></i> </p></a>
                                @endif
                              @endif
                              
                        </td>
                         </tr>
                         
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              
                   
            </div>
          </div>
        </div>
      </div>

      <div class="mT-30">

          <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#ffe139;">
                  <h2 class="modal-title text-center" id="addModalLabel"><i class="fa fa-plus"></i> Add Table</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{url('/table/store')}}" method="post">
                    {{ csrf_field() }}
                    <label for="name">No Table</label>
                    <input name="name" type="text" class="form-control" placeholder="Example : Table1">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-arrow-left fa-1x"></i></button> 
                  <button type="submit" class="btn btn-success" style="background-color:#ffe139; color:#000;">SAVE</button>
                </div>
              </form>

              </div>
            </div>

            
          </div>

          <div class="mT-30">

              <div class="modal fade" id="addWaiter" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:#ffe139;">
                      <h2 class="modal-title text-center" id="addModalLabel"><i class="fa fa-plus"></i> Add Waiter</h2>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{url('/waiter/store')}}" method="post">
                        {{ csrf_field() }}
                        <label for="name">Waiter Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Example : Waiter1">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control">
    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-arrow-left fa-1x"></i></button> 
                      <button type="submit" class="btn btn-success" style="background-color:#ffe139; color:#000;">SAVE</button>
                    </div>
                  </form>
    
                  </div>
                </div>
    
                
              </div>
    
    
@endsection

@section('script')
<script>
    @if (session('msg'))
    swal('Sukses', '{{ session('msg') }}', 'success');
    @endif
</script>
@endsection