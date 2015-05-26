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
					<!-- <li><a href="<?= base_url('login_ctr/logout');?>">Logout</a></li> -->
				</ul>
			</div>
			<div id="gerai-menu main" class="col-md-15" style="margin-left: 0px">
				<div class="gerai-detail">
					<div class="menu-list">
						<div class="section-title">
							<h2>
								<span>DATA MEMBER FUTSAL</span>
							</h2>
						</div>
						<div id="transaksi">
							<table>
								<thead>
									<tr>
										<th>NAMA Member</th>
										<th>ID CARD</th>
										<th>TTL</th>
										<th>NAMA TIM</th>
										<th>ALAMAT</th>
										<th>TELP</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $row) {
									?>
									<tr>
										<td><?= $row['first_name'];?></td>
										<td><?= $row['id_card'];?></td>
										<td><?= $row['ttl']; ?></td>
										<td><?= $row['team_name']; ?></td>
										<td><?= $row['address'];?></td>
										<td><?= $row['phone'];?></td>
										<td>										
	              							<a href="<?php echo base_url('/superadmin/edit_member')?>?no=<?php echo $row['id_member']; ?>" class="btn btn-success">Edit</a>    
	              							<a href="<?php echo base_url('/superadmin/hapus_member')?>?no=<?php echo $row['id_user']; ?>"  class="btn btn-danger">Delete</a>
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