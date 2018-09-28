
<!DOCTYPE html>
<html>
<head>
	<title> @yield ('title')</title>
	<meta charset="utf-8" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/headerStyle.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="{{ asset('js/validation.js')}}"></script>
</head>
<body>
		<header class="wrapper">
		<div class="container-fluid bg-white">
			<div class="col-md-5">
				<img src="{{asset('images/logo.png')}}" class="img-responsive left">
			</div>
			<div class="col-md-7">
				<div class="row marginTop">
					<div class="col-md-7 align-middle">
						<p class="text">Call Us Today(02)9017 8143</p>
					</div>
					<div class="col-md-5 form-group">
						<input type="text" class="form-control search" placeholder="Type desired Job Location">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<nav>
							
							<a href="#" class="active">HOME</a>
							<a href="#">DATING BLOG</a>
							<a href="#">WHO WE HELP</a>
							<a href="#">WHY VITTAL</a>
							<a href="#">REVIEWS</a>
							<a href="#">CONTACT US</a>
					<!-- 	</nav>
					</div> -->
					<div class="dropdown" style="display: inline-block;">
							<button  class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
							 <ul class="dropdown-menu dropMenu">
      							<li><a href="/category">All Categories</a></li>
    							  <!-- <li><a href="manageCategory.php">Manage Category</a></li> -->
    							  <li><a href="/product">All Products</a></li>
    							 <!--  <li><a href="manageProduct.php">ManageProduct</a></li> -->
    						</ul>
    					</div>
    				</nav>
    				</div>
				</div>
			</div>
		</div>
	</header>
<div class="container-fluid name text-center">  
<span class="text12">@yield("headTitle") </span>
</div>
<div id="flash">
<!--     @include('category.categoryFlashMessage'); -->
  </div>
	@section ('body')
	@show
	<div class="container-fluid divBack5">
	<div class="row wrapper marginTopBottom">
		<div class="c0l-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<img src="{{asset('images/foot_logo.png')}}" class="img-responsive">
					</div>
					<div class="row">
						<p class="text1">Call Us Today(02)9017 8143</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row center">
						<p><h4>Shortcut your search to happiness right now.</h4></p>
						<p><h4>Live life without regrets and take action today!</h4></p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-md button2">Book an appointment <i class="fa fa-file"></i></button>
						</div>
						<div class="col-md-6">
							<button class="btn btn-md button2">Contact a consultant <i class="fa fa-user"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<h2>Contact Us</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<address class="gray">
								<p><h4 class="textWhite">E-4/16, Prashant Sagar Society</h4></p>
								<p><h4>Jaideep Nagar, Nahur</h4></p>
								<p><h4>Bhandup East</h4></p>
							</address>
							<address class="gray">
								<p><h4 class="textWhite">E-4/16, Prashant Sagar Society</h4></p>
								<p><h4>Jaideep Nagar, Nahur</h4></p>
								<p><h4>Bhandup East</h4></p>
							</address>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<h2>Recent Posts</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="postUl">
								<li><a href="#">How to recover after bad date?</a></li>
								<li><a href="#">Review | Vittal Partners Review</a></li>
								<li><a href="#">Review | Vittal Partners Review</a></li>
								<li><a href="#">Review | Vittal Partners Review</a></li>
								<li><a href="#">7 Rules for happy relationship</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<h2>Recent Twits</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="twitsUl">
								<li>									
									<p>Are you being vulnerable to find love?
										via offline dating agency Sydeny Canberra</p>
									<div class="row">
										<div class="col-md-6 left">
											<a href="www.twitter.com">htttps://twitter.com</a>
										</div>
										<div class="col-md-6 right">
											<p>3 days ago</p>
										</div>
									</div>
								</li>
								<li>									
									<p>Are you being vulnerable to find love?
										via offline dating agency Sydeny Canberra</p>
									<div class="row">
										<div class="col-md-6 left">
											<a href="www.twitter.com">htttps://twitter.com</a>
										</div>
										<div class="col-md-6 right">
											<p>3 days ago</p>
										</div>
									</div>
								</li>									
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid text-center divBack6 ">
	<div class="row wrapper marginTopBottom1">
		<div class="col-md-3">
			<p class="gray">&coppyVittalPartners</p>
		</div>
		<div class="col-md-5">
			<ul class="footerUl">
				<li><a href="#">contact</a></li>
				<li><a href="#">terms of use</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Disclaimer</a></li>
			</ul>
		</div>
		<div class="col-md-4">
			<ul class="footerUl2">
				<li class="gray">Follow us</li>
				<li><a href="#"><img src="{{asset('images/icon10.png')}}"></a></li>
				<li><a href="#"><img src="{{asset('images/icon11.png')}}"></a></li>
				<li><a href="#"><img src="{{asset('images/icon12.png')}}"></a></li>
				<li><a href="#"><img src="{{asset('images/icon13.png')}}"></a></li>
				<li><a href="#"><img src="{{asset('images/icon14.png')}}"></a></li>
			</ul>	
		</div>
	</div>
</div>
</body>
</html>