@extends('layouts.app')
@section('content')
<div id="container">
  <div id="row" class="text-center">
    <h1>Data Users</h1>
      
<div class="panel-body dash-table-markets no-padding overflow-table">
    <table class="table table-hover table-stripped table-bordered ">
      <thead style="background-color:#ffe139;"> 
         <tr>
                <th class="text-center">No</i></th>
                <th class="text-center">Name</i></th>
                {{-- <th class="text-center">Email </i></th> --}}
                <th class="text-center">Password </i></th>
                <th class="text-center">Level </i></th>
         </tr>
      </thead>
       <tbody>
         @foreach ($users as $i => $user)
             
          <tr>
              <td class="text-center"><p class="no-margin">{{++$i}}</p></td>
              <td ><p class="no-margin">{{$user->name}}</p></td>
              {{-- <td ><p class="no-margin">{{$user->email}}</p></td> --}}
              <td class="text-center"><p class="no-margin">Secret</p></td>
              <td class="text-center" class="no-wrap">{{$user->level_->level}}</td>
           
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