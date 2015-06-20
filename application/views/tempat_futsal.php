<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/development-bundle/themes/base/ui.all.css');?>" />
    <script src="<?php echo base_url('assets/development-bundle/jquery-1.8.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/ui.core.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/ui.datepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/i18n/ui.datepicker-id.js');?>"></script>
    <!-- marai error datepicker -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

	<script type="text/javascript">
	    $(function(){
	            $("#tglbooking").datepicker({
	                dateFormat : "yy-mm-dd",
	                changeMonth : true,
	                changeYear : true,
	                yearRange : '-50:+50'
	            });
	        });

	</script>
	<script type="text/javascript">
	//perhatikan, kuncinya adalah disini
        function fungsiambiljad(){
        	var tgl=$("#tglbooking").datepicker({ dateFormat: 'yy-mm-dd' }).val();
            var id_lap=$("#nama_lap option:selected").val();

            // alert(data);
           $.ajax({
                type: "POST",
                url: "<?php echo site_url('jadwal/lihat_jadwal');?>",
                data:{tgl:tgl,
                      id:id_lap},
                datatype:'json',
                success: function(data){
                    $("#jadwal").html(data);
                },
 
                error:function(XMLHttpRequest){
                    alert(XMLHttpRequest.responseText);
                }
            })
 
        };
	</script>



<?php 
foreach ($futsal as $item ){
	
?>

<div class="top-content">
	<div class="page-title">
		<h1><?php echo strtoupper($item['nama_futsal']); ?></h1>
	</div>
</div>
<br><br>
<div id="primary">
	<content id="site-content">
		<div class="content">
			<div class="page-top">
				<div class="container">
					<div id="breadcrumb">
						<p>
							<a href="<?= base_url();?>">HOME</a>
							<i class="fa fa-angle-right"></i>
							<a href="<?= base_url('futsal/listfutsal');?>">LIST FUTSAL</a>
							<i class="fa fa-angle-right"></i>
							<span class="current"><?php echo strtoupper($item['nama_futsal']); ?></span>
						</p>
					</div>
				</div>
			</div>
			<div class="page-main">
				<div class="container">
					<div class="entry-content">
						<div class="gerai-detail">
							<div class="gerai-main">
								<div class="row">
									<div class="col-md-7">
										<div class="gerai-header clearfix">
											<div class="gerai-logo">
												<img src="<?= base_url('assets/image/futsal/'.$item['gambar']);?>">
											</div>
											<div class="gerai-info">
												<h2 class="gerai-name">
													<?php echo strtoupper($item['nama_futsal']); ?>
												</h2>
												<ul>
													<li><strong>Kota Futsal</strong></li>
													<li><strong>Alamat :</strong><?php echo strtoupper($item['alamat']); ?></li>
													<li><strong>Phone :</strong><?= strtoupper($item['phone']);?> </li>
													<li><strong>No Rekening :</strong><?= strtoupper($item['no_rek']);?></li>
												</ul>
											</div>
										</div>
										<div class="gerai-images">
											

											<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 400px; margin: 0">
											  <!-- Indicators -->
											  <ol class="carousel-indicators">
											  	<?php for($i=0; $i<count($datalap);$i++) {
											  	 ?>
											    <li data-target="#carousel-example-generic" data-slide-to="<?= $i?>" class="active"></li>
											
											  	<?php } ?>
											  </ol>
											 
											  <!-- Wrapper for slides -->
											  <div class="carousel-inner">
											  	<?php for($i=0; $i<count($datalap);$i++) {
											  		if($i==0){
											  			echo '<div class="item active">';}
											  		else{echo '<div class="item">';}
											  	?>		
													    
													      <img src="<?= base_url('assets/image/futsal/'.$datalap[$i]['gambar']);?>" alt="...">
													      <div class="carousel-caption">
													          <h3>Caption Text</h3>
													      </div>
													    </div>
													
											    <?php } ?>
											    
											  </div>
											 
											  <!-- Controls -->
											  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
											    <span class="glyphicon glyphicon-chevron-left"></span>
											  </a>
											  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
											    <span class="glyphicon glyphicon-chevron-right"></span>
											  </a>
											</div> <!-- Carousel -->


											
										</div>
									</div>

									<!-- map lokasi futsal -->
									<div class="col-md-5">
										<div class="gerai-location">
											<div class="map">
												<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
												<div id="map" style="width: 500px; height: 300px;"></div> 
										        <script type="text/javascript">
										              
										//              menentukan koordinat titik tengah peta
										              var myLatlng = new google.maps.LatLng(<?php echo $item['latitude']; ?>, <?php echo $item['longitude']; ?>);
										 
										//              pengaturan zoom dan titik tengah peta
										              var myOptions = {
										                  zoom: 15,
										                  center: myLatlng
										              };
										              
										//              menampilkan output pada element
										              var map = new google.maps.Map(document.getElementById("map"), myOptions);
										              
										//              menambahkan marker
										              var marker = new google.maps.Marker({
										                   position: myLatlng,
										                   map: map,
										                   title:"Monas"
										              });
										        </script>         
								        	</div>
										</div>
									</div>

									
								</div>
							</div>
<?php } ?>
							<!-- Jadwal Block -->
							<div class="gerai-menu" id="menu">
								<div class="row">
									<div id="gerai-menu-main" class="col-md-15" style="margin-left: 0px;">
										<div class="menu-list">
											<div class="section-title">
												<h2><span>JADWAL</span></h2>
											</div>
											<!-- Date Picker -->
											<div class="col-xs-6 col-md-3 ">
												<p>
												<form action="#">

													<?php
													$data = array(
														'id' => 'tglbooking',
														'name' => 'tgl_booking',
														'placeholder' => 'Pilih Tanggal',
														'class' => 'form-control'
														
														);

													echo form_input($data);													
													?>
												</form>
												</p>
											</div>
											<div class="col-xs-6 col-md-3 ">
												<p>
												<form action="#">
													<?php
													$js = 'id="nama_lap" class="form-control" onChange=""';
													echo form_dropdown('nama_lap', $lapangan['lapangan'],'',$js);
													?>
												</form>
												</p>
											</div>
											<div class="col-xs-6 col-md-3 ">
												<p>
													<form>
														<input type="button" class="form-control btn-success" value="Show" onClick="fungsiambiljad()" align="center"/>
													</form>
												</p>
											</div>
											
											<p></p>
											<p></p>
											<br>

											<div id="jadwal">
												
											</div>

										</div>
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
