@extends('layouts.app')

@section('content')
<div id="container">
  <div id="row">
          <!-- PAGE CONTENT -->
          <div id="dashboard-v1" class="right_col" role="main">
            <div class="spacer_30"></div>
            <div class="clearfix"></div>
            <div class="row">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-lg-4">
                
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-4">
                  <div class="panel panel-default element-box-shadow buy-bitcoin">
                    <div class="panel-heading padding_30" style="background-color:#ffe139;">
                      <p>
                        <h3 class="no-margin"> 
                            <a href="{{url('/category')}}" class="btn btn-default">X</a>
                            Edit Category
                        </h3>
                      </p>
                    </div>
                    <div class="panel-body btc-table padding_30 overflow-table">
                      <form action="{{url('/category/update/'.$kategoris->id)}}" method="post" enctype="multipart/form-data">
                        <table class="table no-margin">
                          {{ csrf_field() }}       

                            <tr>
                              <td class="text-bold">Category Name</td>
                              <td><input type="text" name="kategori" class="form-control"value="{{$kategoris->kategori}}"></td>
                            </tr>
                        </table>
                    <button type="submit" class="btn btn-primary" >UPDATE</button>
                      </form>
<br>

                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4">
                  </div>
              
     
    </div>
    </div>
  @endsection