<?php 
if(empty($img)){ $img = "http://mostlybrilliant.co/img/square-logo.png"; }
if(empty($title)){ $title = "Mostly Brilliant &mdash; The Full-Service Product & UX Solution You've Been Looking For"; }
if(empty($desc)){ $desc = "Welcome to Mostly Brilliant, an independent consultancy from Jenn Vargas. I bring tech startup product development and design practices to small and early stage businesses to implement data-driven, customer-focused improvements that move your business forward."; }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jenn Vargas">
    <link rel="icon" href="favicon.ico">

    <meta property="og:url" content="http://mostlybrilliant.co<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $desc; ?>" />
    <meta property="og:image" content="<?php echo $img; ?>" />

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@mstlybrilliant">
	<meta name="twitter:creator" content="@jennjenn">
	<meta name="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="<?php echo $desc; ?>">
	<meta name="twitter:image" content="<?php echo $img; ?>">

	<title><?php echo $title; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="/mostlybrilliant.css">
        
	<script src="//load.sumome.com/" data-sumo-site-id="ffe6b3682a8c324cf9337e2b604738516d180c4b91909a873914449d5b56835c" async="async"></script>

  </head>

  <body>
	<nav class="navbar navbar-default navbar-sticky">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/"><img src="/img/logo-white.png" alt="Mostly Brilliant" /></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="/services">Services</a></li>
	        <li><a href="/live-ux-audit">UX Audit Series</a></li>
	        <li><a href="/about">About</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>