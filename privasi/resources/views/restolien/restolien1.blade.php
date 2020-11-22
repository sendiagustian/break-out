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
<li class=" active">
    <a href="#" data-toggle="" class=" menu-item">home</a>
</li>
<li>
    <a href="{{url('/guide')}}" data-toggle="" class=" menu-item">Guide</a>
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
						<input style="width:170px; color:white" class="form-control" type="text" name="name" placeholder="Username" required>
					</li>
					<li>
						<input style="width:170px; color:white" class="form-control" type="password" name="password" placeholder="Password" required>
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
    <a href="#"><i class="fa fa-1x fa-facebook"></i></a>
    <a href="#"><i class="fa fa-1x fa-twitter"></i></a>
    <a href="#"><i class="fa fa-1x fa-instagram"></i></a>
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
                
					<div class="slide--subheadline"><img src="assets-dash/logo/bo-putih.png" width="150px;" alt=""></div>
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
				
				<!-- slide 2 -->
				<li data-transition="slideremovedown"
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
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">Open</div>
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
						<div class="slide--headline">5am - 11am</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="100" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
						data-splitout="none" 
						data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
						data-basealign="slide" 
						data-responsive_offset="on" 
						data-responsive="off">
						<div class="slide--subheadline">We serve you everyday</div>

					</div>
				</li>
				
				<!-- slide 3 -->
				<li data-transition="slideoverhorizontal"
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/slide-bg/3.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-130" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">Made With Love</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-65" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--headline">Delicious Food</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="20" 
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--bio text-center">&copy;Break-out is a restaurant, bar and coffee roastery located on Bandung</div>
					</div>
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="100" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":2250,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
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
<!-- banner#5
============================================= -->
<section id="banner5" class="banner banner-2 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading heading-1 text--center mb-40">
                    <p class="heading--subtitle">Hello dear</p>
                    <h2 class="heading--title">Welcome To &copy;Break-out</h2>
                    <div class="divider--shape-4"></div>
                </div>
                <!-- .heading end -->
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="banner--desc">
                    &copy;Break-out was the first retaurant to open in Bandung, the resturant was designed with the history in mind we have created a soft industrial dining room, combined with an open kitchen, coffee take out bar and coffee roastery.
                </div>
            </div>
        </div>
        <!-- .row end -->
           </div>
    <!-- .container end -->
</section>
<!-- #banner5 end -->

<!-- Divider #1
============================================= -->
<section id="divider2" class="section-divider3 bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="assets/images/background/16.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Taste the best</p>
                    <h2 class="heading--title mb-0 text-white">Discover Our Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

<!-- Blog Carousel
============================================= -->
<section id="blog" class="blog blog-carousel pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                    
                    @foreach ($menus as $i => $menu)
                        
                    <!-- Blog Entry # -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
								<img src="{{ asset('/photo/'. $menu->photo)}}" alt="entry image"/>
							</a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span><a href="#">Rp. {{$menu->harga}}</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">{{$menu->nama}}</a></h4>
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->
                    
                    @endforeach

                </div>
                <!-- .carousel end -->
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->
   
@endsection