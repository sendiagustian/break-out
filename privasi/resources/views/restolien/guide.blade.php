@extends('layouts.home')
@section('content')

<body>
    <div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
<header id="navbar-spy" class="header header-2 header-transparent header-bordered header-fixed">
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
                <a class="logo" href="#">
					<div  class="logo-light">
						<img src="assets-dash/logo/bo-logo.png" width="60px;" class="logo-light" alt="">
                        {{-- <p style="font-size:15px;"><span class="fa fa-4x fa-reddit-alien logo-light" style="color:#fff;"></span></p> --}}
                    </div>
                    <div  class="logo-dark">
						<img src="assets-dash/logo/bo-hitam.png" width="100px;" class="logo-dark" alt="">
                    </div>
				</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav nav-pos-right navbar-left">
                    <!-- Home Menu -->
<li >
    <a href="{{url('/')}}" data-toggle="" class=" menu-item">home</a>
</li>
<li class=" active">
    <a href="#" data-toggle="" class=" menu-item">Guide</a>
</li>
<li>
    <a href="{{url('/about')}}" data-toggle="" class=" menu-item">About</a>
</li>


<li class="has-dropdown">
		<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item"><i class="fa fa-sign-in"></i></a>
		<ul class="dropdown-menu text-center" style="padding:10px; padding-right:50px; padding-top:10px;">
				<form method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
					<li >
						<input style="width:170px;" class="form-control" type="text" name="name" placeholder="Username">
					</li>
					<li>
						<input style="width:170px;" class="form-control" type="password" name="password" placeholder="Password">
					</li>
					<li style="width:50px;">
						<button class="btn btn--default" type="submit" style="width:170px; background-color:#fff; text-align:center">Login</button>
		
					</li>
				</form>
			
		</ul>
	</li>

                </ul>
                <!-- Module Social -->
<div class="module module-social pull-left">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
</div>
<li>
    
</li>
<!-- .module-social end -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>
<!-- Hero Section
====================================== -->
<section id="slider" class="slider slide-overlay-black">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<!-- slide 1 -->
				<li data-transition="fadefromtop"
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/slide-bg/2.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-65" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">Welcome</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="0" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--headline">Guide For New Customer</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="100" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
						data-splitout="none" 
						data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
						data-basealign="slide" 
						data-responsive_offset="on" 
						data-responsive="off">
					</div>
				</li>
				
				
			</ul>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div>
	<!-- END OF SLIDER WRAPPER -->
</section>

<!-- Accordion #1
============================================= -->
<section id="faqs" class="bg-gray pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <div class="accordion accordion-1" id="">
                        <!-- Panel 01 -->
                        <div class="panel">
                            <div class="panel--heading">
                                <a class="" >1. Ask to the waiter for sign-in to your table account</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion-1" id="">
                        <!-- Panel 01 -->
                        <div class="panel">
                            <div class="panel--heading">
                                <a class="" >2. Choose menu that you want to order</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion-1" id="">
                        <!-- Panel 01 -->
                        <div class="panel">
                            <div class="panel--heading">
                                <a class="" >3. See your cart, then click "Order"</a>
                            </div>
                        </div>
                        <div class="accordion accordion-1" id="">
                            <!-- Panel 01 -->
                            <div class="panel">
                                <div class="panel--heading">
                                    <a class="" >4. You can also cancel your order with click "Back"</a>
                                </div>
                            </div>
                    <!-- End .Accordion-->
                </div>
                <!-- .col-md-9 end -->
                <div class="col-xs-12 col-sm-12 col-md-3">
                    
    
    
    
                <!-- .col-md-3 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    
  
@endsection