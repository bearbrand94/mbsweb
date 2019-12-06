@extends('layouts.master')

@section('custom_css')
<style type="text/css">
.header-one{
	background-color: #f2f2f2
}	
</style>
@yield('css')
@endsection

@section('constra_body')
<body>
	<div class="body-inner">
		<!-- Header start -->
		<header id="header" class="header-one">
			<div class="container">
				<div class="row hidden-xs">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-sm-2 col-md-3">
							<a href="#">
								<img src="{{ asset('images/logocompact.png')}}" alt="" height="50px">
							</a>
						</div><!-- logo end -->

						<div class="col-xs-12 col-sm-10 col-md-9">
							<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Mobile</p>
											<p class="info-box-subtitle">{{$agen->no_hp}}</p>
										</div>
									</div>
								</li>
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Email</p>
											<p class="info-box-subtitle">{{$agen->email_agen}}</p>
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
							</ul><!-- Ul end -->
						</div><!-- header right end -->
					</div><!-- logo area end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
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
	                  </div>
	               </div><!-- Col end -->
	            </div><!-- Row end -->
	         </div><!-- Container end -->
      		</div><!-- Banner text end -->
    	</div><!-- Banner area end --> 
		@endif
	</div>
	

	<section id="main-container" class="main-container" style="padding-top: 20px;">
		<div class="row hidden-sm hiddem-md hidden-lg hidden-xl text-center">
			<img src="{{ asset('images/logocompact.png')}}" alt="" height="120px">
			<hr>
		</div>
		@yield('body')
	</section><!-- Main container end -->
	

	<footer id="footer" class="footer bg-overlay">
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 footer-widget footer-about">
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

					<div class="col-md-6 col-sm-12 footer-widget">
						<h3 class="widget-title">Working Hours</h3>
						<div class="working-hours">
							We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
							Hotline and Contact form.
							<br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
							<br> Saturday: <span class="text-right">12:00 - 15:00</span>
							<br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
						</div>
					</div><!-- Col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer main end -->
	</footer>

	<footer id="footer" class="footer bg-overlay">
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="copyright-info">
							<span>Copyright © 2019 Asset Management Indonesia</a></span>
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