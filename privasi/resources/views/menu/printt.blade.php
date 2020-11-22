@extends('layouts.app')
@section('content')
<div id="container">
  <div id="row" class="text-center">
    <h1>Menu</h1>
      
<div class="panel-body dash-table-markets no-padding overflow-table">
    <table class="table table-hover table-stripped table-bordered ">
      <thead style="background-color:#ffe139;"> 
         <tr>
                <th class="text-center">No</i></th>
                <th class="text-center">Image</i></th>
                <th class="text-center">Name</i></th>
                <th class="text-center">Price </i></th>
                <th class="text-center">Category </i></th>
         </tr>
      </thead>
       <tbody>
            @foreach ($menus as $i => $menu)
                
             <tr>
                 <td class="text-center"><p class="no-margin">{{++$i}}</p></td>
                 <td class="text-center">
                   
                 <img src="{{ asset('/photo/'. $menu->photo)}}" alt="" width="200px"></td>
                 
                 </td>
                 <td><p class="no-margin">{{$menu->nama}}</p></td>
                 <td><p class="no-margin">{{$menu->harga}}</p></td>
                 <td class="text-center no-wrap">{{$menu->kategori_->kategori}}</td>
                 
              
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

  </div>
</div>
@endsection


<script>
window.print();
</script>