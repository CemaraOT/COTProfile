<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
		<meta name="description" content="Layanan pembuatan aplikasi terbaik dengan biaya rendah" />
		<meta name="keywords" content="cemaraontech,co-tech,cot-tech,web developer,web konsultan,web consultant,website,webmaster,deveping website,jasa pembuatan website" />
		<meta name="author" content="cemaraontech">
		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="3 month">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css"/>
		<!--  UNlocal -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">

		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"  integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  		crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- END -->

		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/ico_COT.png"/>
	</head>
	<style type="text/css">
		li.active a
		{
			color:#A1C42A;
		}
	</style>
	<body>
		<nav class="navbar" id="main_head">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="<?php echo site_url();?>Main" >
                        <img src="<?php echo base_url();?>assets/img/logo_COT.png" title="Yagu Indonesia"/>
                    </a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li <?php if($this->uri->segment(1) == 'main' || $this->uri->segment(1) == '') { echo 'class="active"'; } ?>><a href="<?php echo site_url();?>main"> Beranda </a></li>
                        <li <?php if($this->uri->segment(1) == 'tentang_kami') { echo 'class="active"'; } ?>><a href="<?php echo site_url();?>tentang_kami"> Tentang Kami </a></li>
                        <li <?php if($this->uri->segment(1) == 'hubungi_kami') { echo 'class="active"'; } ?>><a href="<?php echo site_url();?>hubungi_kami"> Hubungi Kami </a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</nav>