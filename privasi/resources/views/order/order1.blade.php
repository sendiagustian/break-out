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

  <li class="active"><a href="#" ><i class="fa fa-shopping-bag"></i> <span>Order</span></a>
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

@else
<li ><a href="#" type="button" data-toggle="modal" data-target="#addModal"><i class="fa fa-table"></i> <span>Add Table</span></a> </li>
<li ><a href="{{url('/list-menu')}}"><i class="fa fa-shopping-cart"></i> <span>Add Order</span></a> </li>
<li class="active"><a href="#"><i class="fa fa-shopping-bag"></i> <span>Order</span></a></li>
<li ><a href="{{url('/history')}}"><i class="fa fa-dollar"></i> <span>History</span></a>
  <li ><a href="{{url('/reports')}}"><i class="fa fa-file"></i> <span>Reports</span></a>
</li> 
@endif

@endsection 

@section('content')
               
          <!-- PAGE CONTENT -->
          <div id="dashboard-v1" class="right_col" role="main">
            <div class="spacer_30"></div>
            <div class="clearfix"></div>
            <div class="row">
            <div class="clearfix"></div>
            <div class="row">
              
            
              @foreach (\App\Order::with(['meja', 'detail_order'=>function($detail_order){
                $detail_order->with(['menu'])->get();
              }])->where('status', 'dipesan')->get() as $order)
            
            <form action="{{ url('order/verify/' . $order->id) }}" method="POST">
              {{ csrf_field() }}
              <div class="col-xs-12 col-sm-6 col-lg-4">
                  <div class="panel panel-default element-box-shadow buy-bitcoin">
                    <div class="panel-heading padding_30">
                        <h3 class="no-margin ">{{ $order->meja->name }}</h3>
                    </div>
                    <div class="panel-body btc-table padding_30 overflow-table">
                      <table class="table no-margin">
                        <thead >
                          <tr>
                            <td>Menu</td>
                            <td>Quantity</td>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($order->detail_order as $detail_order)
                            <tr>
                              <td class="text-bold">{{ $detail_order->menu->nama }}</td>
                              <td><p class="text-bold no-margin">{{ $detail_order->jumlah_menu }}</p></td>
                            </tr>
                          @endforeach 
                        </tbody>
                      </table>
                      <button type="submit" class="btn btn-default btn-element">FINISH</button>
  
                    </div>
                  </div>
                </div>
            </form>

              @endforeach 

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

  @endsection


  @section('script')
    <script>
      @if (session('msg'))
      swal('Success', '{{ session('msg') }}', 'success');
      @endif
    </script>
  @endsection