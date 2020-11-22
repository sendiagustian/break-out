@extends('layouts.dashboard2') 
@section('menu')  

  <li>                           
    <a href="{{url('/users')}}" ><i class="fa fa-users"></i> <span>Users</span></a>
  </li>
  <li><a><i class="fa fa-home"></i> <span>Menu </span><span class="fa fa-angle-down"></span></a>
    <ul class="nav child_menu">
      <li><a href="{{url('/menu')}}" ><span>Food & Drink</span></a></li>
      <li><a href="{{url('/category')}}"  ><span>Category</span></a></li>
    </ul>
  </li>
  <li><a href="{{url('/list-menu')}}" ><i class="fa fa-shopping-cart"></i> <span>Add Order</span></a>
  </li>

  <li><a href="{{url('/order')}}" ><i class="fa fa-shopping-bag"></i> <span>Order</span></a>
  </li>
  
  <li><a href="{{url('/transaction')}}" ><i class="fa fa-dollar"></i> <span>Transactions</span></a>
  </li>
  
    <li><a href="{{url('/reports')}}" ><i class="fa fa-file"></i> <span>Reports</span></a>
    </li>
    
    <li class="active"><a href="#" ><i class="fa fa-star"></i> <span>Testimony</span></a>
    </li>
@endsection 

@section('content')
 
<div id="dashboard-v1" class="right_col" role="main">
            <div class="spacer_30"></div>
            <div class="clearfix"></div>
            <div class="row">
              
            <div class="panel panel-default element-box-shadow">
              <div class="panel-heading padding_30">
                <h3 class="no-margin"><i class="fa fa-star"></i> Testimony</h3> <br>

                    
                  </div>
                  <div class="panel-body dash-table-markets no-padding overflow-table">
                    <table id="trade-history" class="table table-cryptic dataTable no-footer" data-page-length="10" >
                       <thead>
                         <tr>
                           <th class="text-center">No</i></th>
                            <th class="text-center">Name</i></th>
                            <th class="text-center">Testimony</i></th>
                            <th class="text-center">Option</th>
                     </tr>
                  </thead>
                   <tbody>
                     @foreach ($testis as $i => $testi)
            
                      <tr>
                      <td class="text-center"><p class="no-margin">{{++$i}}</p></td>
                          <td><p class="no-margin">{{$testi->nama}}</p></td>
                          <td class="text-center" ><p class="no-margin">{{$testi->testi}}</p></td>
                          <td class="text-center">  
                                <button type="button" class="btn btn-danger delete"><i class="fa fa-2x fa-trash"></i></button>
                      
                                <form action="{{url('/testi/delete/'.$testi->id)}}" method="post">
                                      {{ csrf_field() }}
                                      {{method_field('DELETE')}} 
                                  </form>
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