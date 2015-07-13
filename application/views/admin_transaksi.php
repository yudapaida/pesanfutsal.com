 <div class="page-top">
	<div class="container">
		<div class="row">
			<div class="member-header">
				<!-- <h2>Selamat datang <?php echo $this->session->userdata('akun');?></h2> -->
			</div>
			<div class="member-nav">
				<ul>					
					<li><a href="<?= base_url('admin/transaksi');?>">Transaksi</a></li>
					<li><a href="<?= base_url('admin');?>">konfirmasi</a></li>					
					<li><a href="<?= base_url('admin/lapangan');?>">Lapangan</a></li>
					<li><a href="<?= base_url('admin/profile');?>">Edit Data Futsal</a></li>
					<li><a href="<?= base_url('admin/laporan');?>">Laporan</a></li>
					<li><a href="<?= base_url('admin/password');?>">Change Password</a></li>
					<!-- <li><a href="<?= base_url('login_ctr/logout');?>">Logout</a></li> -->
				</ul>
			</div>
			<div id="gerai-menu main" class="col-md-15" style="margin-left: 0px">
				<div class="gerai-detail">
					<div class="menu-list">
						<div class="section-title">
							<h2>
								<span>TRANSAKSI</span>
							</h2>
						</div>
						<div id="transaksi">
							<table>
								<thead>
									<tr>
										<th>NAMA MEMBER</th>
										<th>NAMA TEAM</th>
										<th>LAPANGAN</th>
										<th>TGL</th>
										<th>WAKTU BOOKING</th>
										<th>JAM</th>
										<th>HARGA</th>
										<th>STATUS</th>										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $row) {
									?>
									<tr>
										<td><?= $row['first_name'];?> <?= $row['last_name'];?></td>
										<td><?= $row['nama_team'];?></td>
										<td><?= $row['nama_lap']; ?></td>
										<td><?= $row['tgl_booking']; ?></td>
										<td><?= $row['waktu_booking']; ?></td>
										<td><?= $row['jam'];?></td>
										<td><?= $row['harga'];?></td>
										<td><?= $row['status']?></td>
										<td>
										<?php if($row['status']=='waiting'){ ?>											
											<a href="<?= base_url('admin/hapus_transaksi');?>?no=<?= $row['id_transaksi'];?>" class="btn btn-success">Delete</a>
									    	<?php }else{ }?> 

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