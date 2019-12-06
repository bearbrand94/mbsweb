@extends('layouts.master')

@section('custom_css')
<style type="text/css">
.header-one{
	background-color: white;
	margin-top: 10px;
}	
hr{
	margin-top: 10px;
	margin-bottom: 0px;
}
</style>
@yield('css')
@endsection

@section('constra_body')
<body>
	<header id="header" class="header-one">
		<div class="text-center">
			<img src="{{ asset('images/logocompact.png')}}" alt="" height="80px">
			<hr>
		</div>
	</header>
	<section id="main-container" class="main-container" style="padding-top: 0px;">

		@yield('body')
	</section><!-- Main container end -->
	

	<footer id="footer" class="footer bg-overlay">
		<div class="copyright"  style="background-color: black; color: white;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="copyright-info">
							<span>Copyright © 2019 Asset Management Indonesia</a></span>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 text-right">
						<div class="footer-menu">
							<ul class="nav unstyled">
								<li><a href="about.html" style="color: white;">Version 1.0.0</a></li>
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