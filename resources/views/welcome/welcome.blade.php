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

        <title>Eazy Rent</title>
		<link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/icon.png') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

		<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

        <link rel="stylesheet" href={{asset("assets/css/animate.css")}}>

        <link rel="stylesheet" href={{asset("assets/css/owl.carousel.min.css")}}>
		<link rel="stylesheet" href={{asset("assets/css/owl.theme.default.min.css")}}>
		
        <link rel="stylesheet" href={{asset("assets/css/bootstrap.min.css")}}>
		
		<link rel="stylesheet" href={{asset("assets/css/bootsnav.css")}} >	
        <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
        <link rel="stylesheet" href={{asset("assets/css/responsive.css")}}>

    </head>
	
	<body>
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
				                    <li class="scroll"><a href="#featured-cars">Оцлох машинууд</a></li>
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
						Гэрээний нөхцөлэй танилцсан байх! 
					</p>
							@auth
								<button class="welcome-btn" onclick="window.location.href='home'">Зар оруулах</button>
							@else
								<button class="welcome-btn" onclick="window.location.href='login'">Зар оруулах</button>
							@endauth
					 
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
								<h2><a href="#">Бараа бүтээгдхүүн</a></h2>
								<p>
									Хамгийн хялбар хамгийн шуурхай үйлчилгээг үзүүлэх нь бидний давуу тал болно
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-repair"></i>
								</div>
								<h2><a href="#">Засвар үйлчилгээ</a></h2>
								<p>
									Хамгийн хялбар хамгийн шуурхай үйлчилгээг үзүүлэх нь бидний давуу тал болно
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-1"></i>
								</div>
								<h2><a href="#">Зээлийн нөхцөл</a></h2>
								<p>
									Хамгийн хялбар хамгийн шуурхай үйлчилгээг үзүүлэх нь бидний давуу тал болно
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
		<section id="blog" class="blog"></section>
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