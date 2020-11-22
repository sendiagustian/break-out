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
<li><a><i class="fa fa-dollar"></i> <span>Transaction </span><span class="fa fa-angle-down"></span></a>
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
<li ><a href="{{url('/history')}}"><i class="fa fa-dollar"></i> <span>History</span></a>


<li ><a href="{{url('/reports')}}"><i class="fa fa-file"></i> <span>Reports</span></a>
</li> 
@elseif (Auth::user()->level=="2")

<li ><a href="{{url('/history')}}"><i class="fa fa-dollar"></i> <span>History</span></a>
</li>
<li class="active"><a href="#"><i class="fa fa-file"></i> <span>Reports</span></a>
</li> 
@endif
@endsection 

@section('content')
               
          <!-- PAGE CONTENT -->
          <div id="dashboard-v1" class="right_col" role="main">
            <div class="spacer_30"></div>
            <div class="clearfix"></div>
            <div class="row">
              
            <div class="panel panel-default element-box-shadow">
              <div class="panel-heading padding_30">
                <h3 class="no-margin"> <i class="fa fa-file"></i> Reports</h3> <br>
                
                <form action="{{ url('reports/print') }}" method="GET" class="form-horizontal">
                  <div class="form-group">
                    <label for="">From</label>
                    <input type="date" value="" name="dari" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Until</label>
                    <input type="date" name="sampai"  class="form-control">
                  </div>  
                  <button type="submit" style="font-size:15px;" class="btn btn-info"><i class="fa fa-print fa-2x "></i></button>
                </form>
              </div>
              @if (\Illuminate\Support\Facades\Input::get('dari') != false && \Illuminate\Support\Facades\Input::get('sampai') != false )
              <div class="panel-body dash-table-markets no-padding overflow-table">
                <table id="trade-history" class="table table-cryptic dataTable no-footer" data-page-length="10">
                  <thead>
                     <tr>
                            <th>No <i class="fa fa-sort"></i></th>
                            <th>Date <i class="fa fa-sort"></i></th>
                            <th>Jumlah Order  <i class="fa fa-sort"></i></th>
                            <th>Total  <i class="fa fa-sort"></i></th>
                     </tr>
                  </thead>
                   <tbody>
                      @php
                          $total = 0;
                          $jumlah_order = 0;
                      @endphp
                      @foreach ($results as $i => $res)
                          
                        <tr>
                            <td class="text-center"><p class="no-margin">{{++$i}}</p></td>
                            <td><p class="no-margin">{{$res['tanggal']}}</p></td>
                            <td><p class="no-margin">{{$res['jumlah_order']}}</p></td> 
                            <td><p class="no-margin">{{$res['total']}}</p></td>
                            
                        </tr>
                        @php
                            $total += $res['total'];
                            $jumlah_order += $res['jumlah_order'];
                        @endphp
                        @endforeach
                        <tr>
                            <td colspan="2" class="text-right">Jumlah</td>
                            <td>{{ $jumlah_order }}</td>
                            <td>{{ $total }}</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                @endif
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
