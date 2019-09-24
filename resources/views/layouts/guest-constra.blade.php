@extends('layouts.master')

@section('custom_css')
<style type="text/css">
.header-one{
	background-color: rgb(235,235,235);
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
						<div class="logo col-xs-12 col-md-3">
							<a href="index.html">
								<img src="{{ asset('images/logo.png')}}" alt="">
							</a>
						</div><!-- logo end -->

						<div class="col-xs-12 col-md-9 header-right">
							<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Call Us</p>
											<p class="info-box-subtitle">(+0) 123-456-7890</p>
										</div>
									</div>
								</li>
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Email Us</p>
											<p class="info-box-subtitle">office@mbs.com</p>
										</div>
									</div>
								</li>
								<li class="last">
									<div class="info-box last">
										<div class="info-box-content">
											<p class="info-box-title">Global Certificate</p>
											<p class="info-box-subtitle">ISO 9001:2017</p>
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


		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="copyright-info">
							<span>Copyright © 2019 MBSAgency Prudential</a></span>
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