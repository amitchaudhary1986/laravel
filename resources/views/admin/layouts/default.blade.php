<!DOCTYPE html>

<html lang="en" ng-app="kitchensink" class="ng-scope"><head id="Starter-Site">

<meta charset="UTF-8">

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Administration :: @yield('title')</title>

<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="description" content="" />
<meta name="google-site-verification" content="">
<meta name="DC.title" content="Laravel 5 Starter Site">
<meta name="DC.subject" content="">
<meta name="DC.creator" content="">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.css')}}">
	<link
	href="{{asset('assets/admin/font-awesome-4.2.0/css/font-awesome.min.css')}}"
	rel="stylesheet" type="text/css">
<style type="text/css"> input:required:invalid, input:focus:invalid { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC); background-position: right top; background-repeat: no-repeat; -moz-box-shadow: none; } input:required:valid { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=); background-position: right top; background-repeat: no-repeat; } </style>

	 
	
<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
<link rel="shortcut icon"
	href="{{{ asset('assets/admin/ico/favicon.ico') }}}">
	<script src="{{asset('assets/admin/js/prism.js')}}"></script>
    <script src="{{asset('assets/admin/js/fabric.js')}}"></script>
    <script src="{{asset('assets/admin/js/master.js')}}"></script>

    <script src="{{asset('assets/admin/js/angular.min.js')}}"></script>
	
</head>
<body >

	
			<div id="bd-wrapper" ng-controller="CanvasControls" class="ng-scope" >@yield('content')</div>
	
	<footer>
		

	</footer>
	<script src="{{asset('assets/admin/js/jquery.js')}}"></script>
	<script> 
$(document).ready(function(){
    $("#rasterize-jsons").click(function(){
	    $("#rasterize-jsons").hide();
		 $("#panel").slideDown("slow");
	//	$("#rasterize-json").attr("ng-click","rasterizeJSON()");
		
    });
	$('#search_add_intq').keyup(function() {//If user clicks on hyperlink with class name = load_more
var searchval = $(this).val();
//alert(searchval);
var qlistChk1 = 0;
var qlistChk2 = 0;
var i = 0;
$('.searchlist tr').each(function(){
   if($(this).text().toUpperCase().indexOf(searchval.toUpperCase()) != -1){
       $(this).show();
	   
   }
   else
   {
	   $(this).hide();
	
   }
});
var totalQuestions = $('.searchlist tr').length;
$('.searchlist tr').each(function(){
	if($(this).css('display') == 'none')
	{
		qlistChk1 = parseInt(qlistChk1) + 1;
	}
	else
	{
		qlistChk2 = parseInt(qlistChk2) + 1;
	}
});
  if(qlistChk1 == totalQuestions)
  {
	//  enablePostQButton();  // Call this function to enable the button and remove the onclick event
	  
  }
  else
  {
	 // disablePostQButton(); // Call this function to disable the Button and remove the onclick event
  }
});
});
</script>
<script src="{{asset('assets/admin/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/admin/js/paster.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.mousewheel.min.js')}}"></script>
<script>
  var kitchensink = { };
  var canvas = new fabric.Canvas('canvas');
</script>

<script src="{{asset('assets/admin/js/utils.js')}}"></script>
<script src="{{asset('assets/admin/js/app_config.js')}}"></script>
<script src="{{asset('assets/admin/js/controller.js')}}"></script>
	@yield('scripts')
</body>
</html>
