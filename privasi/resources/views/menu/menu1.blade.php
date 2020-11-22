@extends('layouts.dashboard2')

@section('menu')  

  <li>                           
    <a href="{{url('/users')}}"><i class="fa fa-users"></i> <span>Users</span></a>
  </li>
  <li class="active"><a><i class="fa fa-home"></i> <span>Menu </span><span class="fa fa-angle-down"></span></a>
    <ul class="nav child_menu">
      <li><a href="#"><span>Food & Drink</span></a></li>
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
    
     
<div id="dashboard-v1" class="right_col" role="main">
    <div class="spacer_30"></div>
    <div class="clearfix"></div>
    <div class="row">
      
    <div class="panel panel-default element-box-shadow">
      <div class="panel-heading padding_30">
        <h3 class="no-margin"><i class="fa fa-users"></i> Menu</h3> <br>

        
        <div class="mT-30">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i class="fa fa-2x fa-plus"></i></button>
          <a class="btn btn-info" href="{{url('/menu/print')}}"><i class="fa fa-print fa-2x "></i></a>

          <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#ffe139;">
                  <h2 class="modal-title text-center" id="addModalLabel"><i class="fa fa-plus"></i> Add Menu</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{url('/menu/store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input name="nama" type="text" class="form-control" placeholder="Menu"> <br>
                    <input name="harga" type="number" class="form-control" placeholder="Price">
                    <label for="kategori">Category</label>
                    <select name="kategori" id="kategori" class="form-control">
                        @foreach (\App\Kategori::all() as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                        @endforeach
                    </select>
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                      <option value="ready">Ready</option>
                      <option value="sold out">Sold Out</option>
                    </select>
                    <label for="photo">Image</label>         
                    <input class="form-control" type="file" name="photo">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-arrow-left fa-1x"></i></button> 
                  <button type="submit" class="btn btn-success" style="background-color:#ffe139; color:#000;">SAVE</button>
                </div>
              </form>

              </div>
            </div>

           
          </div>
        </div>
      </div>
    </div>

      </div>
      <div class="panel-body dash-table-markets no-padding overflow-table">
        <table id="trade-history" class="table table-stripped table-hover dataTable no-footer" data-page-length="10">
          <thead>
             <tr>
                    <th class="text-center">No</i></th>
                    <th class="text-center">Image</i></th>
                    <th class="text-center">Name</i></th>
                    <th class="text-center">Price </i></th>
                    <th class="text-center">Category </i></th>
                    <th class="text-center">Status </i></th>
                    <th class="text-center" style="width:100px;">Option</th>
             </tr>
          </thead>
           <tbody>
             @foreach ($menus as $i => $menu)
                 
              <tr>
                  <td class="text-center"><p class="no-margin">{{++$i}}</p></td>
                  <td>
                    
                  <img src="{{ asset('/photo/'. $menu->photo)}}" alt="" width="200px"></td>
                  
                  </td>
                  <td><p class="no-margin">{{$menu->nama}}</p></td>
                  <td><p class="no-margin">Rp. {{ number_format($menu->harga, 0)}}</p></td>

                <td class="text-center no-wrap">
                    <span class="label label-@php 
                if ($menu->kategori_->kategori == "Food"){
                    echo 'info';
                }
                elseif($menu->kategori_->kategori == "Drink" ){
                    echo 'success';
                }
                else {
                    echo 'danger';
                }
                @endphp">{{$menu->kategori_->kategori}}</span></td>
                <td>{{$menu->status}}</td>
                  <td class="text-center"><a href="{{url('/menu/edit/'.$menu->id)}}">
                    <button  class="btn btn-info" ><i class="fa fa-edit fa-2x"></i></button>
                  </a>
                    <button type="button" class="btn btn-danger delete"><i class="fa fa-2x fa-trash"></i></button>
                      
                    <form action="{{url('/menu/delete/'.$menu->id)}}" method="post">
                          {{ csrf_field() }}
                          {{method_field('DELETE')}} 
                      </form>
                  </td>
               
             @endforeach
            </tbody>
          </table>
        </div>
      </div>
  
@endsection

@section('script')
<script>
  $('.delete').click(function () {
    var that = $(this);
    swal({
        title: 'Do you want to delete this data ?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
      }).then((result) => {
        if (result) {
          that.siblings('form').submit();
        }
      })
  });
</script>
@endsection