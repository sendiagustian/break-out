@extends('layouts.register')

@section('content')
<div id="container" style="margin:50px;">
  <div id="row">
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
                        
                        <h3 class="no-margin"> 
                            <a href="{{url('/login')}}" class="btn btn-default">X</a>
                            Add Table
                        </h3>
                    </div>
                    <div class="panel-body btc-table padding_30 overflow-table">
                      <form action="{{url('/kasir/store')}}" method="post" >
                        <table class="table no-margin">
                          {{ csrf_field() }}       

                            <tr>
                              <td class="text-bold">No Meja</td>
                              <td><input type="text" name="name" class="form-control"placeholder="Contoh : Meja1"></td>
                            </tr>
                            <tr>
                              <td class="text-bold">Email</td>
                              <td><input type="email" name="email" class="form-control" value=""></td>
                            </tr>
                            <tr>
                              <td class="text-bold">Password</td>
                              <td><input type="password" name="password" class="form-control" value=""></td>
                            </tr>
                        </table>
                    <button type="submit" class="btn btn-primary" >Tambah</button>

                      </form>

                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4">
                  </div>
              
     
    </div>
    </div>
  @endsection