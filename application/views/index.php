<?php
	// foreach ($data as $key => $value) {

		// print_r($data[1]['gambar']);
		// die();
	// }

?>


<html>
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

	</head>
	<body>
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
								<a href="<?= base_url('member');?>">Member Area</a>
								/
								<a href="<?= base_url('login_ctr/logout');?>">Logout</a>
							</div>
							<?php } else { ?>
							<div class="menu-member">
								<a href="<?= base_url('futsal/login');?>">LOGIN</a>
								<a href="<?= base_url('futsal/register');?>">REGISTER</a>
							</div>
							<?php } ?>
						</div>
					</header>
				</div>
				<div class="top-content">
					<div class="home-top-content">
						<h1>Futsal ? Pesan aja di PESANFUTSAL.com</h1>
						<p></p>
						<p>Pesan futsal jadi gampang berkat ada pesanfutsal.com</p>
						<p>Lihat jadwal -> Booking -> Konfirmasi -> Main </p>
						<div class="buttons">
							<a href="<?php echo base_url('futsal/listfutsal');?>"  class="btn btn-lg btn-primary">
							<i class="glyphicon glyphicon-list-alt"></i>
							Daftar Tempat Futsal
							</a>
						
						</div>
					</div>
				</div>
			</div>
			<div id="primary">
				<content id="site-content">
					<div class="content">
						<div class="section section-primary">
							<div class="container">
								<div class="row section-title">
									<h2><span>Mau Booking ?</span></h2>
								</div>
								<div class="row icon-boxes">
									<div class="icon-box col-sm-4">
									<div class="icon">
										<i class="fa fa-search-plus"></i>
									</div>
									<div class="info">
										<h3>SEARCH</h3>
										<p class="p1">Pilih lokasi futsal dan tempat futsal favorit kamu</p>
									</div>
									</div>
				
									<div class="icon-box col-sm-4">
									<div class="icon">
										<i class="fa fa-book"></i>
									</div>
									<div class="info">
										<h3>BOOKING</h3>
										<p class="p1">Lihat jadwal dan pesan sesuai waktu yang kamu inginkan, pastikan jadwal free</p>
									</div>
									</div>
								
									<div class="icon-box col-sm-4">
									<div class="icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="info">
										<h3>CONFIRM</h3>
										<p class="p1">Lakukan pembayaran uang muka dan kirim bukti pembayaran di menu transaksi untuk mengkonfirmasi pemesanan</p>
									</div>
									</div>
								</div>
								<p>&nbsp;</p>
							</div>
						</div>
						<div class="section">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="sub-section">
											<div class="section-title">
												<h2><span>NEWCOMER</span></h2>
											</div>
																														
											<div class="row futsal-baru">
												<div class="rounded">									
													<a href="<?php echo base_url('futsal/profile?id='.$data[0]['id_futsal']); ?>" title="Akasha">
														<img src="<?php echo base_url('assets/image/futsal/'.$data[0]['gambar']);?>">
													</a>
													
												</div>
												<div class="rounded">									
													<a href="<?php echo base_url('futsal/profile?id='.$data[1]['id_futsal']); ?>" title="Akasha">
														<img src="<?php echo base_url('assets/image/futsal/'.$data[1]['gambar']);?>">
													</a>
													
												</div>
												<div class="rounded">									
													<a href="<?php echo base_url('futsal/profile?id='.$data[2]['id_futsal']); ?>" title="Akasha">
														<img src="<?php echo base_url('assets/image/futsal/'.$data[2]['gambar']);?>">
													</a>
													
												</div>
												<div class="rounded">									
													<a href="<?php echo base_url('futsal/profile?id='.$data[3]['id_futsal']); ?>" title="Akasha">
														<img src="<?php echo base_url('assets/image/futsal/'.$data[3]['gambar']);?>">
													</a>
													
												</div>
								
											</div>
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="sub-section">
											<div class="section-title">
												<h2><span>MOST POPULAR</span></h2>
											</div>
											<div class="row futsal-baru">
												<div class="rounded">
													<a href="#" title="Akasha">
														<img src="<?php echo base_url('assets/image/futsal/jakal7.jpg');?>">
													</a>
												</div>
												<div class="rounded">
													<a href="#" title="Abaddon">
														<img src="<?php echo base_url('assets/image/Abaddon.jpg');?>">
													</a>
												</div>
												<div class="rounded">
													<a href="#" title="Alchemist">
														<img src="<?php echo base_url('assets/image/Abaddon.jpg');?>">
													</a>
												</div>
												<div class="rounded">
													<a href="#" title="Alleria">
														<img src="<?php echo base_url('assets/image/Abaddon.jpg');?>">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</content>
			</div>
			<div class="bottom">
				<div id="bottom-nav">
					<div class="container">
						<div class="main-nav">
							<div class="row">
								<div class="site-menu">
									<ul class="clearfix">
										<li><a href="<?= base_url();?>">HOME</a></li>
										<li><a href="#">CARA PESAN</a></li>
										<li><a href="#">ABOUT US</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- 	<div id="bottom-contact">
					<div class="container">
						<div class="row">
							<div class="contact-facebook col-sm-6">
								<a href="http://facebook.com">
									<i class="fa fa-facebook"></i>
									facebook
								</a>
							</div>
							<div class="contact-twitter col-sm-6">
								<a href="http://twitter.com">
									<i class="fa fa-twitter"></i>
									twitter
								</a>
							</div>
						</div>
					</div>
				</div -->>
			</div>
		</div>
	</body>
</html