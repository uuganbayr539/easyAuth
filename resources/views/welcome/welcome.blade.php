{{-- <x-app-layout> --}}
	@extends('layouts.app')
	@section('content')
    <!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
	<link href={{asset("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i")}} rel="stylesheet">

		    <link href="{{ asset('https://fonts.googleapis.com/css?family=Rufina:400,700') }}" rel="stylesheet">

        
        <!-- title of site -->
        <title>CarVilla</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/favicon.png') }}">

       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">


        <!--linear icon css-->
		<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">


        <!--flaticon.css-->
		{{-- <link rel="stylesheet" href={{assets("assets/css/flaticon.css")}}> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">


		<!--animate.css-->
        <link rel="stylesheet" href={{asset("assets/css/animate.css")}}>

        <!--owl.carousel.css-->
        <link rel="stylesheet" href={{asset("assets/css/owl.carousel.min.css")}}>
		<link rel="stylesheet" href={{asset("assets/css/owl.theme.default.min.css")}}>
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href={{asset("assets/css/bootstrap.min.css")}}>
		
		<!-- bootsnav -->
		<link rel="stylesheet" href={{asset("assets/css/bootsnav.css")}} >	
    
        <!--style.css-->
        <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
        
        <!--responsive.css-->
        <link rel="stylesheet" href={{asset("assets/css/responsive.css")}}>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
	
		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <div class="container">

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class="scroll"><a href="#service">Үйлчилгээ</a></li>
				                    <li class="scroll"><a href="#featured-cars">Бараанууд</a></li>
				                    <li class="scroll"><a href="#new-cars">Шинэ машинууд</a></li>
				                    <li class="scroll"><a href="#brand">Гэрээт Байгууллагууд</a></li>
				                    <li class="scroll"><a href="#contact">Холбогдох</a></li>
				                    <li><a href="/posts">Зарууд харах</a></li>              
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

			<div class="container">
				<div class="welcome-hero-txt">
					<h2>Хүссэн зараа үнэ төлбөргүй оруулаарай</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore   magna aliqua. 
					</p>
							@auth
								<button class="welcome-btn" onclick="window.location.href='home'">Зар оруулах</button>
							@else
								<button class="welcome-btn" onclick="window.location.href='login'">Зар оруулах</button>
							@endauth
					 
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="model-search-content">
							<div class="row">
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model-search">
										<h2>select year</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">year</option><!-- /.option-->

											  	<option value="2018">2018</option><!-- /.option-->

											  	<option value="2017">2017</option><!-- /.option-->
											  	<option value="2016">2016</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
									<div class="single-model-search">
										<h2>body style</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">style</option><!-- /.option-->

											  	<option value="sedan">sedan</option><!-- /.option-->

											  	<option value="van">van</option><!-- /.option-->
											  	<option value="roadster">roadster</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
								</div>
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model-search">
										<h2>select make</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">make</option><!-- /.option-->

											  	<option value="toyota">toyota</option><!-- /.option-->

											  	<option value="holden">holden</option><!-- /.option-->
											  	<option value="maecedes-benz">maecedes-benz.</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
									<div class="single-model-search">
										<h2>car condition</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">condition</option><!-- /.option-->

											  	<option value="something">something</option><!-- /.option-->

											  	<option value="something">something</option><!-- /.option-->
											  	<option value="something">something</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
								</div>
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model-search">
										<h2>select model</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">model</option><!-- /.option-->

											  	<option value="kia-rio">kia-rio</option><!-- /.option-->

											  	<option value="mitsubishi">mitsubishi</option><!-- /.option-->
											  	<option value="ford">ford</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
									<div class="single-model-search">
										<h2>select price</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">price</option><!-- /.option-->

											  	<option value="$0.00">$0.00</option><!-- /.option-->

											  	<option value="$0.00">$0.00</option><!-- /.option-->
											  	<option value="$0.00">$0.00</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
								</div>
								<div class="col-md-2 col-sm-12">
									<div class="single-model-search text-center">
										<button class="welcome-btn model-search-btn" onclick="window.location.href='#'">
											search
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--service start -->
		<section id="service" class="service">
			<div class="container">
				<div class="service-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car"></i>
								</div>
								<h2><a href="#">largest dealership <span> of</span> car</a></h2>
								<p>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.  
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-repair"></i>
								</div>
								<h2><a href="#">unlimited repair warrenty</a></h2>
								<p>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.  
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-1"></i>
								</div>
								<h2><a href="#">insurence support</a></h2>
								<p>
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia. 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

		@include('welcome.newcars')

		@include('welcome.cars')

		@include('welcome.admins')

		@include('welcome.brand')
		<!--blog start -->
		<section id="blog" class="blog"></section><!--/.blog-->
		<!--blog end -->

		@include('welcome.contact')


		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>
{{-- </x-app-layout> --}}
	@endsection