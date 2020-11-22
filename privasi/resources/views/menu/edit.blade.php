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
                            <a href="{{url('/menu')}}" class="btn btn-default">X</a>
                            Edit Menu
                        </h3>
                      </p>
                    </div>
                    <div class="panel-body btc-table padding_30 overflow-table">
                      <form action="{{url('/menu/update/'.$menus->id)}}" method="post" enctype="multipart/form-data">
                        <table class="table no-margin">
                          {{ csrf_field() }}       

                            <tr>
                              <td class="text-bold">Name</td>
                              <td><input type="text" name="nama" class="form-control"value="{{$menus->nama}}"></td>
                            </tr>
                            <tr>
                              <td class="text-bold">Price</td>
                              <td><input type="number" name="harga" class="form-control" value="{{$menus->harga}}"></td>
                            </tr>
                            <tr>
                              <td class="text-bold">Category</td>
                              <td>
                                  <select name="kategori" id="kategori" class="form-control">
                                      <option value="{{$menus->kategori_->id}}">{{$menus->kategori_->kategori}}</option>

                                      @foreach (\App\kategori::all() as $kategori)
                                      <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                                      @endforeach
                                  </select>
                              </td>
                            </tr>
                            <tr>
                                <td class="text-bold">Status</td>
                                <td>
                                    <select name="status" id="status" class="form-control">
                                        <option value="{{$menus->status}}">{{$menus->status}}</option>
                                        <option value="ready">Ready</option>
                                        <option value="sold out">Sold Out</option>
                                    </select>
                                </td>
                              </tr>
                            <tr>
                              
                                <td class="text-bold">Image</td>
                                <td>
                                  <input class="form-control" type="file" name="photo" value="{{ asset('/photo/'. $menus->photo)}}"> <br>
                                  <img src="{{ asset('/photo/'. $menus->photo)}}" width="200px;">
                                </td> 
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