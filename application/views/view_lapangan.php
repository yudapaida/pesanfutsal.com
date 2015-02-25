 <div class="page-top">
	<div class="container">
		<div class="row">
			<div class="member-header">
				<h2>Selamat datang <?php echo $this->session->userdata('akun');?></h2>
			</div>
			<div class="member-nav">
				<ul>
					<!-- <li><a href="<?= base_url();?>">Home</a></li> -->
					<li><a href="<?= base_url('admin');?>">Transaksi</a></li>
					<li><a href="#" style="color: #008000;">Lapangan</a></li>
					<li><a href="<?= base_url('admin/profile');?>">Edit Data Futsal</a></li>
					<li><a href="<?= base_url('admin/laporan');?>">Laporan</a></li>
					<li><a href="<?= base_url('member/password');?>">Change Password</a></li>
					<li><a href="<?= base_url('login_ctr/logout');?>">Logout</a></li>
				</ul>
			</div>
			<div id="gerai-menu main" class="col-md-15" style="margin-left: 0px">
					
				<div class="gerai-detail">
					<div class="menu-list">
						<div class="section-title">
							<h2>
								<span>LAPANGAN</span>
							</h2>
						</div>
						<a href="<?= base_url('admin/tambah_lap');?>" class="btn btn-info" style="margin-bottom: 15px;">+ TAMBAH LAPANGAN</a>
						<div id="transaksi">
							<table>
								<thead>
									<tr>
										<th>NAMA LAPANGAN</th>
										<th>DESKRIPSI</th>
										<th>TARIF PAGI</th>
										<th>TARIF SIANG</th>
										<th>TARIF MALAM</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $row) {
									?>
									<tr>
										<td><?= $row['nama_lap'];?></td>
										<td><?= $row['deskripsi'];?></td>
										<td><?= $row['pagi']; ?></td>
										<td><?= $row['siang']; ?></td>
										<td><?= $row['malam'];?></td>
										<td>
											<a href="<?= base_url('admin/edit_lap');?>?no=<?= $row['id_lap'];?>" class="btn btn-warning btn-lg" style="width: 70px;">EDIT</a>
											<a href="<?= base_url('admin/delete_lap');?>?no=<?= $row['id_lap'];?>" class="btn btn-danger btn-lg" style="width: 70px;">DELETE</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>