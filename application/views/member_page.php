 <div class="page-top">
	<div class="container">
		<div class="row">
			<div class="member-header">
				<h2>Selamat datang <?php echo $this->session->userdata('akun');?></h2>
			</div>
			<div class="member-nav">
				<ul>
					<li><a href="<?= base_url();?>">Home</a></li>
					<li><a href="<?= base_url('futsal/listfutsal');?>">Booking</a></li>
					<li><a href="#">Transaksi</a></li>
					<li><a href="<?= base_url('member/profile');?>">Edit Profil</a></li>
					<li><a href="<?= base_url('login_ctr/logout');?>">Logout</a></li>
				</ul>
			</div>
			<div id="gerai-menu main" class="col-md-15" style="margin-left: 0px">
				<div class="gerai-detail">
					<div class="menu-list">
						<div class="section-title">
							<h2>
								<span>RIWAYAT TRANSAKSI</span>
							</h2>
						</div>
						<div id="transaksi">
							<table>
								<thead>
									<tr>
										<th>NAMA</th>
										<th>LOKASI FUTSAL</th>
										<th>LAPANGAN</th>
										<th>TGL</th>
										<th>JAM</th>
										<th>HARGA</th>
										<th>KONFIRMASI</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $row) {
									?>
									<tr>
										<td><?= $row['first'];?> <?= $row['last'];?></td>
										<td><?= $row['futsal']; ?></td>
										<td><?= $row['lapangan']; ?></td>
										<td><?= $row['tgl']; ?></td>
										<td><?= $row['jam'];?></td>
										<td><?= $row['harga'];?></td>
										<?php if($row['status'] !="booked"): ?>
										<td><a href="<?= base_url('member/konfirmasi');?>?no=<?= $row['id_transaksi'];?>" class="btn btn-success">Konfirmasi</a></td>
										<?php else : ?>
										<td>Sudah Dikonfirmasi</td>
										<?php endif; ?>
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