 <div class="page-top">
	<div class="container">
		<div class="row">
			<div class="member-header">
				<h2>Selamat datang <?php echo $this->session->userdata('akun');?></h2>
			</div>
			<div class="member-nav">
				<ul>
					<!-- <li><a href="<?= base_url('futsal/admin');?>">Home</a></li>
					<li><a href="#">Transaksi</a></li>
					<li><a href="<?= base_url('admin/lapangan');?>">Lapangan</a></li>
					<li><a href="<?= base_url('admin/profile');?>">Edit Data Futsal</a></li>
					<li><a href="<?= base_url('member/password');?>">Change Password</a></li> -->
					<li><a href="<?= base_url('superadmin');?>">Operator Futsal</a></li>
					<li><a href="<?= base_url('superadmin/member');?>">Member Futsal</a></li>
					<li><a href="<?= base_url('login_ctr/logout');?>">Logout</a></li>
				</ul>
			</div>
			<div id="gerai-menu main" class="col-md-15" style="margin-left: 0px">
				<div class="gerai-detail">
					<div class="menu-list">
						<div class="section-title">
							<h2>
								<span>DATA OPERATOR FUTSAL</span>
							</h2>
						</div>
						<div id="transaksi">
							<table>
								<thead>
									<tr>
										<th>NAMA FUTSAL</th>
										<th>ALAMAT</th>
										<th>KOTA</th>
										<th>NO REK</th>
										<th>PHONE</th>
										<th>DESKRIPSI</th>
										<th>KONFIRMASI</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $row) {
									?>
									<tr>
										<td><?= $row['nama_futsal'];?></td>
										<td><?= $row['alamat'];?></td>
										<td><?= $row['id_kota']; ?></td>
										<td><?= $row['no_rek']; ?></td>
										<td><?= $row['phone'];?></td>
										<td><?= $row['deskripsi'];?></td>
										<td>
										<?php if($row['status']=='confirmed') { ?>
              								<a href="#" class="btn btn-success" disabled="disabled">Confirmed</a>
             							<?php }
              							else { ?>
              								<a href="<?php echo base_url('/superadmin/konfirmasi')?>?no=<?php echo $row['id_futsal']; ?>" class="btn btn-success">Confirm</a>
              							<?php } ?>
              							<a href="<?php echo base_url('/superadmin/hapus')?>?no=<?php echo $row['id_user']; ?>"  class="btn btn-danger">Delete</a></td>
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