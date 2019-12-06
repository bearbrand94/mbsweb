@extends('layouts.master')

@section('custom_css')

    @yield('css')
@endsection

@section('constra_body')
<body>
	<div class="body-inner">
		<header id="header" class="header-one">
			<div class="container">
				<div class="row hidden-xs">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-sm-2 col-md-3">
							<a href="{{route('home')}}">
								<img src="{{ asset('images/logocompact.png')}}" alt="" height="50px">
							</a>
						</div><!-- logo end -->

						<div class="col-xs-12 col-sm-10 col-md-9">
							<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Mobile</p>
											<p class="info-box-subtitle">{{session('auth_data')->no_hp}}</p>
										</div>
									</div>
								</li>
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Email</p>
											<p class="info-box-subtitle">{{session('auth_data')->email_agen}}</p>
										</div>
									</div>
								</li>
								<li class="last">
									<div class="info-box last">
										<div class="info-box-content">
											<p class="info-box-title">Title</p>
											<p class="info-box-subtitle">Financial Consultant</p>
										</div>
									</div>
								</li>
								<li class="header-get-a-quote">
									<a class="btn btn-constra btn-secondary" href="{{route('logout')}}">Log Out</a>
								</li>
							</ul><!-- Ul end -->
						</div><!-- header right end -->
					</div><!-- logo area end -->

				</div><!-- Row end -->
			</div><!-- Container end -->

			<nav class="site-navigation navigation navdown nav">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="site-nav-inner pull-left ">
								<button type="button" class="navbar-toggle pull-left" onclick="window.history.back();"style="background-color: rgba(0, 0, 0, 0); color: white; padding: 0px; margin: 0px; padding-top: 10px; font-size: 2.5rem;">
									<span class="sr-only">Back</span>
									<span class="fa fa-arrow-left"></span>
								</button>
								<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<div class="collapse navbar-collapse navbar-responsive-collapse" style="padding-right: 0px;">
									<ul class="nav navbar-nav text-center" style="margin: 0px;">
										<li class="navbar-logo hidden-sm hidden-md hidden-lg hidden-xl">
											<a href="{{route('home')}}">
												<img src="{{ asset('images/logocompact.png')}}" alt="" style="height: 50px;"></img>
											</a>
										</li>
										
										<li><a href="{{route('home')}}">Home</a></li>
										<li><a href="{{route('leadsgen')}}">Leads Gen</a></li>
										<li><a href="{{route('branding')}}">Branding</a></li>
										<li><a href="{{route('tips')}}">Tips</a></li>
										<li><a href="{{route('recruiting')}}">Recruiting</a></li>
									</ul>
									<!--/ Nav ul end -->
								</div>
								<!--/ Collapse end -->

							</div><!-- Site Navbar inner end -->

						</div>
						<!--/ Col end -->
					</div>
					<!--/ Row end -->

					<div class="nav-search">
						<!-- <span id="search"><i class="fa fa-search"></i></span> -->
					</div><!-- Search end -->

					<div class="search-block" style="display: none;">
						<input type="text" class="form-control" placeholder="Type what you want and enter">
						<span class="search-close">&times;</span>
					</div><!-- Site search end -->
				</div>
				<!--/ Container end -->

			</nav>
			<!--/ Navigation end -->
		</header>
		<!--/ Header end -->
		@hasSection('banner')
	    <div id="banner-area" class="banner-area" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url({{ asset('images/banner/banner4.png') }})">
	      	<div class="banner-text">
	         <div class="container">
	            <div class="row">
	               <div class="col-xs-12">
	                  <div class="banner-heading">
	                  	@yield('banner')
	                     <!-- <h1 class="banner-title">News</h1>
	                     <ol class="breadcrumb">
	                        <li>Home</li>
	                        <li>News</li>
	                        <li><a href="#">News Left Sidebar</a></li>
	                     </ol> -->
	                  </div>
	               </div><!-- Col end -->
	            </div><!-- Row end -->
	         </div><!-- Container end -->
      		</div><!-- Banner text end -->
    	</div><!-- Banner area end --> 
		@endif
	</div>
	

	<section id="main-container" class="main-container">
		@yield('body')
	</section><!-- Main container end -->
	

	<footer id="footer" class="footer bg-overlay">
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 footer-widget footer-about">
						<h3 class="widget-title">About Us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
							labore et dolore magna aliqua.</p>
						<div class="footer-social">
							<ul>
								<li><a href="https://facebook.com/themefisher"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/themefisher"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://instagram.com/themefisher"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://github.com/themefisher"><i class="fa fa-whatsapp "></i></a></li>
							</ul>
						</div><!-- Footer social end -->
					</div><!-- Col end -->

					<div class="col-md-4 col-sm-12 footer-widget">
						<h3 class="widget-title">Working Hours</h3>
						<div class="working-hours">
							We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
							Hotline and Contact form.
							<br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
							<br> Saturday: <span class="text-right">12:00 - 15:00</span>
							<br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
						</div>
					</div><!-- Col end -->

					<div class="col-md-4 col-sm-12 footer-widget">
						<h3 class="widget-title">Leads</h3>
						<ul class="list-arrow">
							<li><a href="service-single.html">Pre-Construction</a></li>
							<li><a href="service-single.html">General Contracting</a></li>
							<li><a href="service-single.html">Construction Management</a></li>
							<li><a href="service-single.html">Design and Build</a></li>
							<li><a href="service-single.html">Self-Perform Construction</a></li>
						</ul>
					</div><!-- Col end -->


				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer main end -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="copyright-info">
							<span>Copyright © 2019 
							Asset Management Indonesia</a></span>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="footer-menu">
							<ul class="nav unstyled">
								<li><a href="about.html">Version 1.0.0</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Row end -->

				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-double-up"></i>
					</button>
				</div>

			</div><!-- Container end -->
		</div><!-- Copyright end -->

	</footer><!-- Footer end -->
</body>
@endsection

@section('custom_js')
    @yield('js')
@endsection