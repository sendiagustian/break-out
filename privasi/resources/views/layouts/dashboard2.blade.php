<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="UTF-8">
    <meta name="keywords" content="HTML,CSS,JavaScript">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="assets-dash/logo/bo-logo.png" type="image/ico" />
		<title>Break-out - Dashboard </title>
		<!-- CSS -->
		<!-- Bootstrap -->
    <link href="{{url('assets-dash/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets-dash/plugins/dataTables/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{url('assets-dash/fonts/cryptocoins.css')}}" rel="stylesheet">
		<!-- Simple line icons -->
		<link href="{{url('assets-dash/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Font awesome icons -->
    <link href="{{url('assets-dash/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('assets-dash/css/font-awesome-animation.min.css')}}" rel="stylesheet">
		<!-- Custom Style -->
    <link href="{{url('assets-dash/plugins/select2/select2.min.css')}}" rel="stylesheet">
		<link href="{{url('assets-dash/css/custom.css')}}" rel="stylesheet">
    <link id="ui-current-skin" href="{{url('assets-dash/css/skin-colors/skin-yellow.css')}}" rel="stylesheet">
    <link href="{{('assets-dash/css/media.css')}}" rel="stylesheet">
    <!-- Charts -->
    <link href="{{('assets-dash/plugins/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	</head>
  <body class="nav-md preloader-off developer-mode">
      <div class="pace-cover"></div>
      <div id="st-container" class="st-container st-effect">
        <!-- MAIN PAGE CONTAINER -->
        <div class="container body">
          <div class="main_container">
            <!-- LEFT PRIMARY NAVIGATION -->
            <div class="col-md-3 left_col">
              <div class="scroll-view">
                <div class="navbar nav_title">
                  <h1 class="logo_wrapper">
                    <a href="#" class="site_logo">
                      <img class="logo" src="{{url('assets-dash/logo/bo-logo.png')}}" alt="cryptic logo">
                      {{-- <span class="fa fa-4x fa-reddit-alien" style="font-size:45px; padding-top: 10px;"></span> --}}
                      <span class="logo-text">Break-out</span>
                    </a>
                  </h1>
                </div>
                <div class="clearfix"></div>
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                  <div class="menu_section">
                    <div class="clearfix"></div>
                    <ul class="nav side-menu">
                            @yield('menu')
                     </ul>
                  </div>
                  
                 </div>
                <!-- /sidebar menu -->
                <!-- /menu footer buttons -->
              </div>
            </div>
            <!-- TOP SECONDARY NAVIGATION -->
            <div class="top_nav">
              <div class="nav_menu">
                <ul class="nav navbar-nav navbar-left new-navbar-right">
                  <li class="toggle-li">
                    <div class="nav toggle burger-nav">
                      <a id="menu_toggle">
                        <div class="burger">
                          <span></span>
                          <span></span>
                          <span></span>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                  
                </ul> 
                <!-- top menu ul -->
                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span style="font-size:20px;">{{ Auth::user()->name }}  </span>
                        <span style="font-size:40px;" ><i class="fa fa-user"></i> </span>
                      {{-- <img src="assets-dash/images/profile-pic.jpg" alt=""> --}}
                    </a>

                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li>
                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                      </li>
                    </ul>
                  </li>
                  @if (Auth::user()->level=="1")
                  <li role="presentation" class="dropdown">
                      <a href="javascript:;" class="dropdown-toggle info-number faa-horizontal" data-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-envelope faa-horizontal @php
                          if (App\Testi::where('status','dikirim')->count() != 0) {
                            echo "animated";
                          }
                          @endphp"></i>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                          @foreach ($testis->where('status', 'dikirim')->all() as $testi)
                          <form action="{{url('testi/verify/' . $testi->id)}}" method="post">
                            {{ csrf_field() }}
                            <li>
                              <a>
                                <span>
                                  <span>{{$testi->nama}}</span>
                                  <input class="hidden"  type="text" name="nama" value="{{$testi->nama}}">
                                  <span class="time">{{$testi->created_at}}</span>
                                </span>
                                <span class="message">
                                  {{$testi->testi}}
                                </span>
                                  <input class="hidden" type="text" name="testi" value="{{$testi->testi}}">
                                  <span class="footer">
                                  <button type="submit" href="#" class="btn btn--primary">Accept</button>
                                  <button  href="{{url('testi/tolak/' . $testi->id)}}" class="btn btn--primary">X</button>
                                </span>
                              </a>
                            </li>
                          @endforeach
                        </form>
                        </ul>
                      </li>
                        
                    @endif
                    
                  
                </ul>
              </div>
            </div>
    @yield('content')

          <!-- JS SCRIPTS -->
          <script src="assets-dash/js/jquery.min.js"></script>
          <script src="assets-dash/js/jquery.scrollbar.min.js"></script>
          <script src="assets-dash/plugins/modernizr/modernizr.custom.js"></script>
          <script src="assets-dash/plugins/classie/classie.js"></script>  
          <script src="assets-dash/plugins/bootstrap/bootstrap.min.js"></script>
          <script src="assets-dash/plugins/dataTables/jquery.dataTables.min.js"></script>
          <script src="assets-dash/plugins/select2/select2.min.js"></script>
          <script src="assets-dash/plugins/highcharts/highcharts.js"></script>
          <script src="assets-dash/plugins/highcharts/exporting.js"></script>
          <!-- Custom Charts Scripts -->
          <script src="assets-dash/js/charts.js"></script>
          <script src="assets-dash/plugins/amcharts/amcharts.js"></script>
          <script src="assets-dash/plugins/amcharts/depthChart/serial.js"></script>
          <script src="assets-dash/plugins/amcharts/depthChart/export.min.js"></script>
          <script src="assets-dash/plugins/amcharts/depthChart/light.js"></script>
          <script src="assets-dash/js/charts-amcharts.js"></script>
          <script src="assets-dash/plugins/amcharts/amstock.js"></script>
          <!-- Candlestick Charts -->
          <script src="assets-dash/plugins/amcharts/candlestick-charts.js"></script>
          <!-- Custom Theme Scripts -->
          <script src="assets-dash/js/custom.min.js"></script>
          <script src="assets-dash/js/preloader.min.js"></script>
          <script src="assets-dash/plugins/sparkline/jquery.sparkline.min.js"></script>
          <script src="assets-dash/plugins/dataTables/jquery.dataTables.min.js"></script>


          <script src="assets/js/sweetalert.min.js"></script>
          @yield('script')
          <script>
            @if (session('msg'))
            swal('Success', '{{ session('msg') }}', 'success');
            @endif
            
            @if (session('msg2'))
            swal('Failed', '{{ session('msg2') }}', 'danger');
            @endif
          </script>
        </div>

        <script>
          $(document).ready(function(){
            $('input[name="dari"]').change(function(){
              var dari = $(this).val();

              $('input[name="sampai"]').attr('min', dari);
              
            });
          });
        </script>

      </body>
    
    </html>
    