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
                <th class="text-center">Category</i></th>
         </tr>
      </thead>
       <tbody>
            @foreach ($kategoris as $i => $kategori)
                
             <tr>
                 <td class="text-center"><p class="no-margin">{{++$i}}</p></td>
                 <td><p class="no-margin">{{$kategori->kategori}}</p></td>
                 
              
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