@extends('layouts.dashboard2')

@section('menu')  

  <li>                           
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

@endsection 

@section('content')
    
          <div class="right_col right_col_exchange" role="main">
            <div class="clearfix"></div>
            <div class="spacer_30"></div>
            <div class="margin_left_right_30">
              <div class="row">
                
                <div class="col-sm-6 col-lg-4">
                  <div class="panel panel-default exchange">
                    <div class="panel-body">
                      <a href="{{url('/users')}}" class="dropdown-toggle info-number faa-horizontal" aria-expanded="false">
                        <h3> <span class="badge " style="font-size:30px;">{{ $totalUser}}</span>  <i class="fa fa-users" title="Users"></i> Users</h3>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="panel panel-default exchange">
                    <div class="panel-body">
                      <a href="{{url('/menu')}}" class="dropdown-toggle info-number faa-horizontal" aria-expanded="false">
                        <h3> <span class="badge "style="font-size:30px;">{{ $totalMenu}}</span>  <i class="fa fa-glass" title="Food"></i> Food & Drink</h3>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="panel panel-default exchange">
                    <div class="panel-body">
                      <a href="{{url('/payment')}}" class="dropdown-toggle info-number faa-horizontal" aria-expanded="false">
                        <h3> <span class="badge "style="font-size:30px;">{{ $totalTransaksi}}</span>  <i class="fa fa-dollar" title="Transactions"></i> Payment</h3>
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-default exchange">
                      <div class="panel-body">
                        <a href="{{url('/testimony ')}}" class="dropdown-toggle info-number faa-horizontal" aria-expanded="false">
                          <h3> <span class="badge "style="font-size:30px;">{{ $totalTesti}}</span>  <i class="fa fa-star" title="Testimony"></i> Testimony</h3>
                        </a>
                      </div>
                    </div>
                  </div>
          <a href="#" class="scrollToTop"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></a>
        </div>
        
    
@endsection     