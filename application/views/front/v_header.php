<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Website SobatDifabel</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets2/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">


		<nav id="nav" class="navbar fixed-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="<?php echo base_url('home'); ?>">
							<img class="logo" src="<?php echo base_url(); ?>/assets2/img/logosobat.png" alt="logo">
							<img class="logo-alt" src="<?php echo base_url(); ?>/assets2/img/logo-trans.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li class=""><a href="<?php echo base_url('home');?>">Home</a></li>
					<li class="has-dropdown"><a href="#"><b>Sign Up</b></a>
						<ul class="dropdown">
							<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
							<li><a href="<?php echo base_url('login/register'); ?>">Register</a></li>
						</ul>
					</li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav> 

