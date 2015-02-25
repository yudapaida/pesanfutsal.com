<div class="page-top">
	<div class="container">
		<div class="row">
			<div class="member-header">
				<h2>Selamat datang <?php echo $this->session->userdata('akun');?></h2>
			</div>
			<div class="member-nav">
				<ul>
					<!-- <li><a href="<?= base_url('futsal/admin');?>">Home</a></li> -->
					<li><a href="<?= base_url();?>">Transaksi</a></li>
					<li><a href="<?= base_url('admin/lapangan');?>">Lapangan</a></li>
					<li><a href="<?= base_url('admin/profile');?>">Edit Data Futsal</a></li>
					<li><a href="#" style="color: #008000;">Laporan</a></li>
					<li><a href="<?= base_url('admin/password');?>">Change Password</a></li>
					<li><a href="<?= base_url('login_ctr/logout');?>">Logout</a></li>
				</ul>
			</div>
			<div id="gerai-menu main" class="col-md-15" style="margin-left: 0px">
				<div class="gerai-detail">
					<div class="menu-list">
						<div class="section-title">
							<h2>
								<span>LAPORAN</span>
							</h2>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>