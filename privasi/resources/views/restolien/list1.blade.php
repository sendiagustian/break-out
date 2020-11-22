<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<!-- Mirrored from demo.zytheme.com/granny/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 22:00:52 GMT -->
<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Elegant Restaurant & Cafe Html5 Template">
    <link href="assets-dash/logo/bo-logo.png" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Great+Vibes%7CKaushan+Script%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" type="text/css">

    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">

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


    
    <!-- Menu Gallery
    ============================================= -->
    <section id="menuGallery" class="tabs bg-white">
        <div class="container">
            

            @if (Auth::user()->level != "5")
                <div class="float-left">
                    <a href="{{url('/cek')}}" class="btn btn-default">
                            <i class="fa fa-arrow-left"></i> Dashboard
                    </a>
                </div>
            @endif
            @if (Auth::user()->level == "5")
                <div class="float-left">
                    <p class="btn btn-default">
                        {{Auth::user()->name}}
                    </p>
                </div>
                <div class="float-left"> 
                    <form id="flogout" action="{{ route('logout') }}" method="POST">
                        <button type="submit" class="btn btn--primary">
                                Logout <i class="fa fa-sign-out"></i>
                        </button>
                        {{ csrf_field() }}
                    </form>
                </div>
            @endif

    <form action="{{ url('/proses_pesanan') }}" method="POST">
        {{ csrf_field() }}    
        <div class="text-center" style="margin-top:50px;">
                    <h1 class="heading">Menu</h1>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#lunch" data-toggle="tab">Food</a></li>
                        <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="lunch">
                            <!-- Menu #2
    ============================================= -->
    <div id="menugallery5" class="menu menu-2">
        <div class="row">
            <!-- .col-md-4 end -->
            <!-- LUNCH -->




            @foreach ($menus as $i => $menu)
                @if ($menu->kategori_->kategori == 'Food') 
                {{-- 1 --}}
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="dish-panel">
                        <div class="dish--img">
                            <style>
                            </style>
                            <img src="{{ asset('/photo/'. $menu->photo)}}" alt="Dish Image" style="width:100%; ">
                            <div class="dish--overlay">
                            </div>
                        </div>
                        <div class="dish--content">
                            
                            <h3 class="dish--title">{{$menu->nama}}</h3>
                            <span class="dish--price">Rp. {{number_format($menu->harga, 0)}}</span>
                            <p class="dish--desc">{{$menu->kategori_->kategori}}</p>
                            <p class="dish--desc label label-@php
                              if ($menu->status == "ready") {
                                  echo 'success';
                              }
                              elseif ($menu->status == "sold out") {
                                  echo 'danger';
                              }
                              @endphp "> {{$menu->status}}
                             
                            </p>
                            <p>
                                @if($menu->status == "ready")

                                <input type="number" min="1" style="background-color: #dedede;" name="quantity[{{ $menu->id }}]" class="form-control" placeholder="Quantity" style="border-radius:20px;color:saddlebrown">
                                <textarea name="keterangan[{{ $menu->id }}]" style="background-color: #dedede;" class="form-control" placeholder="Add Note ( Optional )" style="border-radius:20px;color:saddlebrown"></textarea>
                                @endif
                            </p>
                        </div>
                    </div>
                    <!-- .dish end -->
                </div>
                <!-- .col-md-12 end -->
                @endif
            @endforeach 



        </div>
        <!-- .row end -->
    </div>
    <!-- #menu2 end -->










    
                        </div>
                        <!-- .tab-pane end -->
                                          <div class="tab-pane fade" id="drinks">
                            <!-- Menu #2
    ============================================= -->
    <div id="menugallery4" class="menu menu-2">
        <div class="row">
            <!-- .col-md-4 end -->
            <!-- Dish #3 -->
            @foreach ($menus as $i => $menu) 
            @if ($menu->kategori_->kategori == 'Drink') 
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="dish-panel">
                        <div class="dish--img">
                            <img src="{{ asset('/photo/'. $menu->photo)}}" alt="Dish Image" style="width:100%;">
                            <div class="dish--overlay">
                            </div>
                        </div>
                        <div class="dish--content">
                            <h3 class="dish--title">{{$menu->nama}}</h3>
                            <span class="dish--price">Rp. {{$menu->harga}}</span>
                            <p class="dish--desc">{{$menu->kategori_->kategori}}</p>
                            <p class="dish--desc label label-@php
                              if ($menu->status == "ready") {
                                  echo 'success';
                              }
                              elseif ($menu->status == "sold out") {
                                  echo 'danger';
                              }
                              @endphp "> {{$menu->status}}
                             
                            </p>
                            <p>
                                @if($menu->status == "ready")

                                <input type="number" min="1" style="background-color: #dedede;" name="quantity[{{ $menu->id }}]" class="form-control" placeholder="Quantity" style="border-radius:20px;color:saddlebrown">
                                <textarea name="keterangan[{{ $menu->id }}]" class="form-control" placeholder="Tambah Keterangan" style="border-radius:20px;color:saddlebrown"></textarea> 
                                @endif
                            </p>
                        </div>
                    </div>
                    <!-- .dish end -->
                </div>
                <!-- .col-md-12 end -->
            @endif
            @endforeach 
            <!-- .col-md-4 end -->
            
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- #menu2 end -->
                        </div>
                        <!-- .tab-pane end -->
                    </div>
                    <!-- .tabs-content end -->
                </div>
                <!-- .col-md-12 end -->
            </div>

            <!-- .row end -->
            <div class="row text-center mt-20">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button class="btn btn--secondary  btn--lg" href="#" type="submit">Order</button>
                </div>
            </div>
            <!-- .row end --> 
        </div>
        <!-- .container end -->
    </section>
    <!-- #menuGallery end -->

</form>
    <!-- Copyrights
	============================================= -->
    <div class="footer--copyright text-center">
        <div class="divider--shape-dark"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <span>&copy; 2019, With <i class="fa fa-heart"></i> by Alya Zenita </span>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-copyright end -->
</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="assets-dash/js/jquery.min.js"></script>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>

</body>


<!-- Mirrored from demo.zytheme.com/granny/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 22:08:34 GMT -->
</html>

