<div id="primary">
	<content id="site-content">		
		<div class="page-main">
			<div class="container">
				<div id="breadcrumb">
					<p><a href="<?= base_url();?>">Home</a>
						<i class="fa fa-angle-right"></i>
						<a href="<?= base_url('member');?>">Member Area</a>
						<i class="fa fa-angle-right"></i>
						<span class="current">Konfirmasi Pembayaran</span>
					</p>
				</div>
				<div class="entry-content">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="well" style="backgroud-color: white;">
								<h3 style="margin-top: 0px;">KONFIRMASI PEMBAYARAN</h3>
								<form action="<?= base_url('transaksi/insert_konfirmasi');?>" method="POST" enctype="multipart/form-data">
									<?php foreach ($transaksi as $row) { ?>
									<input type="hidden" name="id_transaksi" value="<?= $row['id_transaksi'];?>" visibility="hidden">
									<p>
										<label>Nama<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="nama_user" value="<?= $row['first']; ?> <?= $row['last']; ?>" class="form-control" readonly>
									</p>
									<p>
										<label>Nama Team<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="nama_team" value="<?= $row['team']; ?>" class="form-control" readonly>
									</p>
									<p>
										<label>Lokasi Futsal<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="lokasi" value="<?= $row['futsal']; ?>" class="form-control" readonly>
									</p>
									<p>
										<label>Nama Lapangan<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="lapangan" value="<?= $row['lapangan']; ?>" class="form-control" readonly>
									</p>
									<p>
										<label>Tanggal Booking<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="tgl_booking" value="<?= $row['tgl']; ?>" class="form-control" readonly>
									</p>
									<p>
										<label>Jam Mulai<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="jam_mulai" value="<?= $row['jam']; ?>" class="form-control" readonly>
									</p>
									<p>
										<label>Biaya<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="harga" value="<?= $row['harga'];?>" class="form-control" readonly>
									</p>
									<?php } ?>
									<p>
										<label>Bukti Pembayaran<span class="text-danger">*</span></label>
										<input type="file" name="userfile">
									</p>
									<p><input type="submit" class="btn btn-lg btn-primary" value="CONFIRM"></p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>