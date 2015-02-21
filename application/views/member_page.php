 <div class="page-top">
	<div class="container">
		<div class="row">
			<div class="member-header">
				<h2>Selamat datang <?php echo $this->session->userdata('akun');?></h2>
			</div>
			<div class="member-nav">
				<ul>
					<li<a href="<?= base_url();?>">Home</a></li>
					<li><a href="#">Transaksi</a></li>
					<li><a href="#">Edit Profil</a></li>
					<li><a href="<?= base_url('login_ctr/logout');?>">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>