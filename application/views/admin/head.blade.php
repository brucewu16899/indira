<!DOCTYPE HTML>
<!--
____________________________________________________________________________
_________////////////////////////////////////////////////////|_____________
________////////////////////////////////////////////////////||____________
_______//|                Indira CMS               |///////|||////////////\
______///|       WE'RE PROWIDE HIGH-QUALITY        |//////||||///////////_\\
_____////|_AND_NON-COMMERCIAL_SERVICES_FOR_PEOPLE__|/////|||||//////////_\\\\
____/////|     CONTACT AUTHOR: INFOatVELIOV.COM;   |////||||||/////////_\\\\\\
___//////|        SaaS APPS AND DEVELOPMENT.       |///|||||||////////_\\\\\\\\
__///////|           (c) VeliovGroup.com           |//||||||||///////_\\\\\\\\\\
_////////////////////////////////////////////////////|||||||||//////_\\\\\\\\\\\\
////////////////////////////////////////////////////||||||||||/////_\\\\\\\\\\\\\\
_________|||||||||||||||||||||||||||||||||||||||||||||||||||||////_\\\\\\\\\\\\\\\\
_________|||||||||||||||||||||||||||||||||||||||||||||||||||||///_\\\\\\\\\\\\\\\\\\
_________|||||||||||||||||||||||||||||||||||||||||||||||||||||//_\\\\\\\\\\\\\\\\\\\\
______________________________________________________________________________________
-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html itemscope itemtype="http://schema.org/WebPage" xmlns:og="http://ogp.me/ns#" style="padding:0px; margin:0px;" class="no-js" lang="{{ Session::get('lang'); }}"> <!--<![endif]-->
	<head>
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js') }}
		{{ HTML::script('js/modernizr-2.5.3.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{-- HTML::script('js/indira.min.js') --}}
		<script type="text/javascript">
function shower(p, load_el, out_el, append, restore){
	
	if(append || restore)
	{
		var prev_load_el = $('#super_logo').html();
	}
	
	$.ajax({
	  type: "GET",
	  url: p
	}).done(function( html ) {
		if(append)
		{
			$('#super_logo').html(prev_load_el);
			$('#'+out_el).append(html);
		}
		else if(restore)
		{
			$('#super_logo').html(prev_load_el);
			$('#'+out_el).html(html);
		}
		else
		{
			$('#'+out_el).html(html);
		}
		$('#super_logo').html('<i class="icon-lemon icon-2x"></i>');
	});
	
	
	$('#super_logo').html('<i class="icon-cog icon-2x icon-spin"></i>');
}

function showerp(q, p, load_el, out_el, append, restore){
	
	q = q.replace(/\n/g, '<br>');
	
	if(append || restore)
	{
		var prev_load_el = $('#super_logo').html();
	}
	
	$.ajax({
	  type: "POST",
	  url: p,
	  data: 'data='+encodeURIComponent(q),
	}).done(function( html ) {
		if(append)
		{
			$('#super_logo').html(prev_load_el);
			$('#'+out_el).append(html);
		}
		else if(restore)
		{
			$('#super_logo').html(prev_load_el);
			$('#'+out_el).html(html);
		}
		else
		{
			$('#'+out_el).html(html);
		}
		$('#super_logo').html('<i class="icon-lemon icon-2x"></i>');
	});

	$('#super_logo').html('<i class="icon-cog icon-2x icon-spin"></i>');
}

function showerp_alert(q, p, load_el, out_el, message, append, restore){
	var message = confirm(message);
	if (message==true)
	{
		q = q.replace(/\n/g, '<br>');
		
		if(append || restore)
		{
			var prev_load_el = $('#super_logo').html();
		}
		
		$.ajax({
		  type: "POST",
		  url: p,
		  data: 'data='+encodeURIComponent(q),
		}).done(function( html ) {
			if(append)
			{
				$('#super_logo').html(prev_load_el);
				$('#'+out_el).append(html);
			}
			else if(restore)
			{
				$('#super_logo').html(prev_load_el);
				$('#'+out_el).html(html);
			}
			else
			{
				$('#'+out_el).html(html);
			}
			$('#super_logo').html('<i class="icon-lemon icon-2x"></i>');
		});
	
		$('#super_logo').html('<i class="icon-cog icon-2x icon-spin"></i>');
	}
}
		</script>

		<script>
			$(document).ready(
				function(){
					$('#admin_nav').find('li').click(function(){
						$('#admin_nav').find('li').removeClass('active');
						$(this).addClass('active');
					});
				}
			);
		</script>
		
		<meta charset="UTF-8" />
		
		<!-- META TAGS -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="generator" content="Indira CMS-Toolkit">
		
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" href="img/icon.png">
		
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/styles.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
		{{ HTML::style('js/css/redactor.css') }}
		{{ HTML::script('js/redactor.js') }}
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
		<![endif]-->
		{{ HTML::style('js/google-code-prettify/prettify.css') }}

		<title>Indira CMS · Admin</title>

</head>