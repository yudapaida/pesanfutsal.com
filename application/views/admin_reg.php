	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/development-bundle/themes/ui-lightness/ui.all.css');?>" />
    <script src="<?php echo base_url('assets/development-bundle/jquery-1.8.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/ui.core.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/ui.datepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/i18n/ui.datepicker-id.js');?>"></script>
    <script type="text/javascript">
        $(function(){
            $("#tanggal").datepicker({
                dateFormat : "yy-mm-dd",
                changeMonth : true,
                changeYear : true,
                yearRange : '-66:+60'
            });
        });
    </script>
<div id="primary">
	<content id="site-content">
		<div class="content">
			<div class="page-top">
				<div class="container">
					<div id="breadcrumb">
						<p><a href="<?= base_url();?>">Home</a>
							<i class="fa fa-angle-right"></i>
							<span class="current">REGISTER</span>
						</p>
					</div>
				</div>
			</div>
			<div class="page-main">
				<div class="container">
					<div class="entry-content">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="well" style="backgroud-color: white;">
									<h3 style="margin-top: 0px;">REGISTER</h3>
									<form action="<?= base_url('register/adminfutsal');?>" method="POST" enctype="multipart/form-data">
										<p>
											<label>Nama Futsal<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="nama_futsal" placeholder="Nama Futsal" class="form-control">
										</p>
										<p>
											<label>Email<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="username" placeholder="Email" class="form-control">
										</p>
										<p>
											<label>Password<span class="text-danger">*</span></label>
											<br>
											<input type="password" name="password" placeholder="Password" class="form-control">
										</p>
										<p>
											<label>Alamat<span class="text-danger">*</span></label>
											<br>
											<!-- <input type="text" name="username" placeholder="Email" class="form-control"> -->
											<textarea input="text" name="alamat" rows="3" class="form-control" placeholder="Alamat"></textarea>
										</p>
										<p>
											
											<label for="selectkota">Pilih Kota : </label>
											<!-- br> -->
											<!-- <input type="text" name="id_kota" placeholder="Password" class="form-control"> -->
											<select name="id_kota" id="selectkota"placeholder="Pilih Kota">
												<option value="" selected>Pilih Kota</option>
												<?php foreach ($data as $row) {?>
												<option value="<?= $row['id_lokasi'];?>"><?= $row['nama_lokasi'];?></option>
												<?php } ?>
											</select>
										</p>
										<p>
											<label>Masukkan Koordinat <span class="text-danger">*</span></label>
													<div class="map">
														<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
														<div id="map" style="width: 500px; height: 300px;"></div> 
												        <script type="text/javascript">
															    //* Fungsi untuk mendapatkan nilai latitude longitude
															function updateMarkerPosition(latLng) {
															  document.getElementById('latitude').value = [latLng.lat()]
															    document.getElementById('longitude').value = [latLng.lng()]
															}
															       
															var map = new google.maps.Map(document.getElementById('map'), {
															zoom: 12,
															center: new google.maps.LatLng(-7.781921,110.364678),
															 mapTypeId: google.maps.MapTypeId.ROADMAP
															  });
															//posisi awal marker   
															var latLng = new google.maps.LatLng(-7.781921,110.364678);
															 
															/* buat marker yang bisa di drag lalu 
															  panggil fungsi updateMarkerPosition(latLng)
															 dan letakan posisi terakhir di id=latitude dan id=longitude
															 */
															var marker = new google.maps.Marker({
															    position : latLng,
															    title : 'lokasi',
															    map : map,
															    draggable : true
															  });
															   
															updateMarkerPosition(latLng);
															google.maps.event.addListener(marker, 'drag', function() {
															 // ketika marker di drag, otomatis nilai latitude dan longitude
															 //menyesuaikan dengan posisi marker 
															    updateMarkerPosition(marker.getPosition());
															  });
														</script>
										        	</div>												
											<br>
											<label>Latitude : </label><input type="text" name='latitude' id='latitude'>
										</p>
										<p>
											<label>Nomor Rekening<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="no_rek" placeholder="Nomor Rekening" class="form-control">
										</p>
										<p>
											<label>Nomor Telepon<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="phone" placeholder="Nomor Telepon" class="form-control">
										</p>
										<p>
											<label>Deskripsi<span class="text-danger">*</span></label>
											<br>
											<!-- <input type="text" name="username" placeholder="Email" class="form-control"> -->
											<textarea input="text" name="deskripsi" rows="3" class="form-control" placeholder="Deskripsi"></textarea>
										</p>
										<p>
											<label>Logo<span class="text-danger">*</span></label>
											<input type="file" name="userfile">
										</p>
										<p><input type="submit" class="btn btn-lg btn-primary" value="REGISTER"></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>