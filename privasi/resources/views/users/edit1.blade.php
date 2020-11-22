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
                        
                        <h3 class="no-margin"> 
                            <a href="{{url('/users')}}" class="btn btn-default">X</a>
                            Edit User
                        </h3>
                    </div>
                    <div class="panel-body btc-table padding_30 overflow-table">
                      <form action="{{url('/users/update/'.$users->id)}}" method="post" >
                        <table class="table no-margin">
                          {{ csrf_field() }}       

                            <tr>
                              <td class="text-bold">Name</td>
                              <td><input type="text" name="name" class="form-control" value="{{$users->name}}"></td>
                            </tr>
                            <tr>
                            <tr class="hidden">
                              <td class="text-bold">Password</td>
                              <td><input type="text" name="password" class="form-control" value="{{$users->password}}"></td>
                            </tr>
                            <tr>
                              <td class="text-bold">Level</td>
                              {{-- <td><input type="text" value="{{$users->level_->level}}"></td> --}}
                              <td>
                                  <select name="level" id="level" class="form-control">
                                      <option value="{{$users->level_->id}}">{{$users->level_->level}}</option>

                                      @foreach (\App\Level::all() as $level)
                                      <option value="{{$level->id}}">{{$level->level}}</option>
                                      @endforeach
                                  </select>
                              </td>
                            </tr>
                        </table>
                    <button type="submit" class="btn btn-primary" >UPDATE</button>

                      </form>


                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4">
                  </div>
     
    </div>
    </div>

  @endsection