	<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>PESANFUTSAL.com | Jasa Pemesanan Futsal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Google Font -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oleo+Script|Oregano|Open+Sans:400italic,700italic,400,700">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style2.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style3.css');?>">
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<style type="text/css">
		.coba img {
			height: 250px;
			width: 250px;
			position: relative;
			margin-left: 45px;
		}

		.gambar-user img {
			height: 250px;
			width: 300px;
		}
		</style>
	</head>
	<div id="root">
			<div id="top">
				<div class="container">
					<header id="site-header">
						<div id="site-title" class="col-md-4">
							<div class="top-info phone">
							<!-- <a href="<?= base_url();?>"><h3>FUTSALONLINE.com</h3></a> -->
							</div>
						</div>
						<div class="top-info col-md-8">
						
							<div class="contact-info">
								<h2>ORDER ONLINE NOW</h2>
								<div class="phone">
									<strong>PESANFUTSAL.com</strong>
								</div>
							</div>
							<?php if($this->session->userdata('akun')){ ?>
								<div class="menu-member">
								<a href="<?= base_url('futsal/memberarea');?>">Member Area</a>
								/
								<a href="<?= base_url('login_ctr/logout');?>">Logout</a>
							</div>
							<?php } else { ?>
							<div class="menu-member">
								<a href="<?= base_url('futsal/login');?>">Login</a>
								/
								<a href="<?= base_url('futsal/register');?>">Register</a>
							</div>
							<?php } ?>
						</div>
					</header>
				</div>
			</div>
		</div>