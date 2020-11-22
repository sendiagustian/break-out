<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<!-- Mirrored from demo.zytheme.com/granny/page-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 22:08:01 GMT -->
<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Elegant Restaurant & Cafe Html5 Template">
    {{-- <link href="assets/images/favicon/favicon.png" rel="icon"> --}}
    <link rel="icon" href="{{url('assets-dash/logo/bo-logo.png')}}" type="image/ico" />


    <!-- Fonts
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Great+Vibes%7CKaushan+Script%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" type="text/css">

    <!-- Stylesheets
    ============================================= -->
    <link href="{{url('assets/css/external.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Break-out</title>
</head>

<body>
    <div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
    
</header>
<!--404
=============================================-->
<section class="page-404 text-center bg-overlay bg-overlay-gradient fullscreen pb-0 mtop-100">
    <div class="bg-section">
        <img src="http://data.smartfren.com/prepaid_notification.php" alt="Background" />
    </div>
    <div class="container" style="color:white;">
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h4 style="color: white; font-size:120px;">Wait..</h4>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3" style="font-size:20px;">
                        <div class="clearfix"></div>
                        <p class="mb-30 text-white">Your order :</p>
                        <ul>
                            @foreach($order->detail_order as $i => $detail_order)
                        <li>{{ $i + 1  }}. {{ $detail_order->menu->nama }} ({{ $detail_order->jumlah_menu }}x)</li>
                            @endforeach
                        <li> <br>
                            Total Payment:
                            <?php
                                $total = 0;
                            foreach ($order->detail_order as $detail_order) {
                                $total += $detail_order->menu->harga * $detail_order->jumlah_menu;
                        }
                        ?>
                            Rp. {{ number_format($total, 0) }} .-
                        </li>
                        </ul>
                        @if (Auth::user()->level == "5")
                            
                        <a class="btn btn--bordered btn--primary" href="#" type="button" data-toggle="modal" data-target="#testiModal">Testimony</a> 
                        @endif
                        <a class="btn btn--bordered btn--primary" href="{{url('/list-menu')}}">Order Again</a>
                    </div>
                </div>
        <!-- .row end -->
    </div>
    <!-- .cotainer end -->
</section>
<!-- .page-404 end -->

</div>



<div class="mT-30">

        <div class="modal fade" id="testiModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header" >
                <h2 class="modal-title text-center" id="addModalLabel" style="font-size:30px;">Your Testimony</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="padding:20px;">
                <form action="{{url('/testi/store')}}" method="post">
                  {{ csrf_field() }}
                  <input name="nama" type="text" class="form-control" placeholder="Type your name.." required>
                  <textarea name="testi" type="text" class="form-control" placeholder="Type your testimony" required></textarea>
    
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn--bordered btn--primary">SAVE</button>
              </div>
            </form>
    
            </div>
          </div>
    
          
        </div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{url('assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{url('assets/js/plugins.js')}}"></script>
<script src="{{url('assets/js/functions.js')}}"></script>
</body>


<!-- Mirrored from demo.zytheme.com/granny/page-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 22:08:02 GMT -->
</html>
