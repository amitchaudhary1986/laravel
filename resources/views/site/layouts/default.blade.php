<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>@section('title')@show</title>
@section('meta_keywords')
<meta name="keywords" content="your, awesome, keywords, here" />
@show @section('meta_author')
<meta name="author" content="Jon Doe" />
@show @section('meta_description')
<meta name="description"
	content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
@show
<!-- Mobile Specific Metas
		================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
	href="{{asset('assets/site/css/bootstrap.min.css')}}">
<link rel="stylesheet"
	href="{{asset('assets/site/css/bootstrap-theme.min.css')}}">
<link rel="stylesheet"
	href="{{asset('assets/site/css/half-slider.css')}}">
<link rel="stylesheet"
	href="{{asset('assets/site/css/justifiedGallery.min.css')}}" />
<link rel="stylesheet"
	href="{{asset('assets/site/css/lightbox.min.css')}}" />
<!-- Javascripts
		================================================== -->
<script src="{{asset('assets/site/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('assets/site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.justifiedGallery.min.js')}}"></script>
<script src="{{asset('assets/site/js/lightbox.min.js')}}"></script>
<!-- CSS
		================================================== -->

<style>
body {
	padding: 60px 0;
}
@
section
('styles')

		
@
show
</style>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>
	<div id="wrap">
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li {{ (Request::is('/') ? ' class="active"' : '') }}><a
							href="{{{ URL::to('') }}}">{{{ Lang::get('site/site.home') }}}</a></li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						@if (Auth::check()) @if(isset($admin))
						<li><a href="{{{ URL::to('admin/dashboard') }}}">{{{
								Lang::get('site/site.admin_panel') }}}</a></li> @endif
						<li><a href="#">{{{ Lang::get('site/site.login_as') }}} {{{
								Auth::user()->name }}}</a></li>
						<li><a href="{{{ URL::to('auth/logout') }}}">{{{
								Lang::get('site/site.logout') }}}</a></li> @else
						<!--<li {{ (Request::is('auth/login') ? ' class="active"' : '') }}><a
							href="{{{ URL::to('auth/login') }}}">{{{
								Lang::get('site/site.login') }}}</a></li>-->
						<li {{ (Request::is('auth/register') ? ' class="active"' : '') }}><a
							href="{{{ URL::to('auth/register') }}}">{{{
								Lang::get('site/site.sign_up') }}}</a></li> @endif
					</ul>
				</div>
			</div>
		</nav>
		@yield('carousel')
		<div class="container"> @yield('content')
			</div>
		<div id="push"></div>
	</div>
	<div id="footer">
		<div class="container">
			
		</div>
	</div>
	@yield('scripts')
</body>
</html>