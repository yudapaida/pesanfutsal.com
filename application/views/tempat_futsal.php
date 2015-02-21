<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/development-bundle/themes/ui-lightness/ui.all.css');?>" />
    <script src="<?php echo base_url('assets/development-bundle/jquery-1.8.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/ui.core.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/ui.datepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/i18n/ui.datepicker-id.js');?>"></script>
	<script type="text/javascript">
	    $(function(){
	            $("#tglbooking").datepicker({
	                dateFormat : "yy-mm-dd",
	                changeMonth : true,
	                changeYear : true,
	                yearRange : '-50:+50',
	                onSelect : function(dateText){
	             		var tgl=dateText;
	             		var id="<?php echo $futsal[0]['id_futsal'];?>";
	                	$.ajax({
	                		type: "POST",
	                		url:"<?php echo site_url('jadwal/lihat_jadwal');?>",
	                		data:{id:id, tgl:tgl},
	                		success: function(data){
	                			$("#jadwal").html(data);
	                		},

	                		error:function(XMLHttpRequest){
                    		alert(XMLHttpRequest.responseText);
                			}
	                	})
	                
	                }
	            });
	        });

	</script>
	<script type="text/javascript">
//perhatikan, kuncinya adalah disini
        function fungsiambiljad(){
        	var tgl=$("#tglbooking").datepicker({ dateFormat: 'yy-mm-dd' }).val();
        	var id_futsal =<?php echo $futsal[0]['id_futsal']; ?>;
        	alert(tgl " dan " id_futsal);


           // $.ajax({
           //      type: "POST",
           //      url: "<?php echo site_url('jadwal/lihat_jadwal');?>",
           //      data:{id:id_futsal, tgl:},
           //      success: function(data){
           //          $("#kab").html(data);
           //      },
 
           //      error:function(XMLHttpRequest){
           //          alert(XMLHttpRequest.responseText);
           //      }
 
           //  })
 
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
												<img src="<?= base_url('assets/image/'.$item['gambar']);?>">
											</div>
											<div class="gerai-info">
												<h2 class="gerai-name">
													<?php echo strtoupper($item['nama_futsal']); ?>
												</h2>
												<ul>
													<li><strong>Kota Futsal</strong></li>
													<li><strong><?php echo strtoupper($item['alamat']); ?></strong></li>
													<li><strong>Phone</strong></li>
													<li><strong>No Rekening</strong></li>
												</ul>
											</div>
										</div>
										<div class="gerai-images">
											<div class="gambar">
												<img src="<?= base_url('assets/image/a.jpg');?>">
											</div>
											
										</div>
									</div>
									<div class="col-md-5">
										<div class="gerai-location">
											<div class="map">
												<div id="gerai-map" style="width: 100%; height: 280px; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);">
													<div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
														<div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;">
															<div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 276px 145px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
																<div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
																	<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
																		<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
																			<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 99px; top: -72px;">
																			</div>
																			<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 99px; top: 184px;">
																			</div>
																			<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -157px; top: -72px;">
																			</div>
																			<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -157px; top: 184px;">
																			</div>
																			<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 355px; top: -72px;">
																			</div>
																			<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 355px; top: 184px;">
																			</div>
																		</div>
																	</div>
																</div>
																<div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
																</div>
																<div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
																</div>
																<div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
																	<div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
																		<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
																			<div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 99px; top: -72px;">
																				<canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
																			</div>
																			<div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 99px; top: 184px;">
																			</div>
																			<div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -157px; top: -72px;">
																			</div>
																			<div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -157px; top: 184px;">
																			</div>
																			<div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 355px; top: -72px;">
																			</div>
																			<div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 355px; top: 184px;">
																			</div>
																		</div>
																	</div>
																</div>
																<div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
																	<div style="overflow: hidden; width: 458px; height: 280px;">
																		<img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i845469&amp;2i546888&amp;2e1&amp;3u12&amp;4m2&amp;1u458&amp;2u280&amp;5m5&amp;1e0&amp;5sid-ID&amp;6sus&amp;10b1&amp;12b1&amp;token=22559" style="width: 458px; height: 280px;">
																	</div>
																</div>
																<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
																	<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
																		<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 99px; top: -72px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;">
																			<img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i12!2i3303!3i2136!2m3!1e0!2sm!3i292143592!3m9!2sid-ID!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px);">
																		</div>
																		<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 99px; top: 184px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;">
																			<img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i12!2i3303!3i2137!2m3!1e0!2sm!3i292143592!3m9!2sid-ID!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px);">
																		</div>
																		<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -157px; top: -72px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;">
																			<img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i12!2i3302!3i2136!2m3!1e0!2sm!3i292143592!3m9!2sid-ID!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px);">
																		</div>
																		<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -157px; top: 184px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;">
																			<img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i12!2i3302!3i2137!2m3!1e0!2sm!3i292143592!3m9!2sid-ID!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px);">
																		</div>
																		<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 355px; top: -72px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;">
																			<img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i12!2i3304!3i2136!2m3!1e0!2sm!3i292143592!3m9!2sid-ID!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px);">
																		</div>
																		<div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 355px; top: 184px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;">
																			<img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i12!2i3304!3i2137!2m3!1e0!2sm!3i292143592!3m9!2sid-ID!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px) translateZ(0px);">
																		</div>
																	</div>
																</div>
															</div>
															<div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;">
															</div>
															<div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 276px 145px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
															</div>
															<div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
															</div>
															<div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
															<div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
														</div>
													</div>
													<div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
														<a target="_blank" href="http://maps.google.com/maps?ll=-7.783042,110.347279&amp;z=12&amp;t=m&amp;hl=id-ID&amp;gl=US&amp;mapclient=apiv3" title="Klik untuk melihat area ini di Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
															<div style="width: 62px; height: 26px; cursor: pointer;">
																<img src="http://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
															</div>
														</a>
													</div>
													<div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 223px; bottom: 0px; width: 122px;">
														<div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;">
															<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
																<div style="width: 1px;"></div>
																<div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
															</div>
															<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;">
																<a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Data Peta</a>
																<span style="">Data peta ©2015 Google</span>
															</div>
														</div>
													</div>
													<div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 79px; top: 50px; background-color: white;">
														<div style="padding: 0px 0px 10px; font-size: 16px;">Data Peta</div>
														<div style="font-size: 13px;">Data peta ©2015 Google</div>
														<div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
															<img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
														</div>
													</div>
													<div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
														<div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Data peta ©2015 Google</div>
													</div>
													<div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; position: absolute; -webkit-user-select: none; right: 124px; bottom: 0px;">
														<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
															<div style="width: 1px;"></div>
															<div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
														</div>
														<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;">
															<a href="http://www.google.com/intl/id-ID_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Syarat Penggunaan</a>
														</div>
													</div>
													<div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 0px; bottom: 0px;">
														<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
															<div style="width: 1px;"></div>
															<div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
														</div>
														<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;">
															<a target="_new" title="Laporkan kesalahan dalam peta jalan atau citra ke Google" href="https://www.google.com/maps/@-7.783042,110.3472788,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Laporkan kesalahan peta</a>
														</div>
													</div>
													<div class="gmnoprint" draggable="false" controlwidth="32" controlheight="84" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;">
														<div controlwidth="32" controlheight="40" style="cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; position: absolute; left: 0px; top: 0px;">
															<div aria-label="Street View Pegman Control" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
																<img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
															</div>
															<div aria-label="Pegman is disabled" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
																<img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
															</div>
															<div aria-label="Pegman is on top of the Map" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
																<img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
															</div>
															<div aria-label="Street View Pegman Control" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
																<img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
															</div>
														</div>
														<div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;">
															<div title="Putar peta 90 derajat" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;">
																<img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
															</div>
														</div>
														<div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 6px; top: 45px;">
															<div style="width: 20px; height: 39px; overflow: hidden; position: absolute;">
																<img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
															</div>
															<div title="Perbesar" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div>
															<div title="Perkecil" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div>
														</div>
													</div>
													<div class="gmnoprint" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; right: 0px; top: 0px;">
														<div class="gm-style-mtc" style="float: left;">
															<div draggable="false" title="Tunjukkan peta jalan" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 1px 6px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 24px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Peta</div>
															<div style="z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 19px; text-align: left; display: none; background-color: white; background-clip: padding-box;">
																<div draggable="false" title="Tunjukkan peta jalan dengan medan" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);">
																	<span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);">
																		<div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;">
																			<img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;">
																		</div>
																	</span>
																	<label style="vertical-align: middle; cursor: pointer;">Medan</label>
																</div>
															</div>
														</div>
														<div class="gm-style-mtc" style="float: left;">
															<div draggable="false" title="Tunjukkan citra satelit" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 1px 6px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; border-width: 1px 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-color: rgba(0, 0, 0, 0.14902); border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 30px; background-color: rgb(255, 255, 255); background-clip: padding-box;">Satelit</div>
															<div style="z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 19px; text-align: left; display: none; background-color: white; background-clip: padding-box;">
																<div draggable="false" title="Perbesar untuk melihat tampilan 45 derajat" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none; background-color: rgb(255, 255, 255);">
																	<span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(241, 241, 241); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);">
																		<div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;">
																			<img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;">
																		</div>
																	</span>
																	<label style="vertical-align: middle; cursor: pointer;">45°</label>
																</div>
																<div draggable="false" title="Tunjukkan citra dengan nama jalan" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);">
																	<span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);">
																		<div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;">
																			<img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;">
																		</div>
																	</span>
																	<label style="vertical-align: middle; cursor: pointer;">Label</label>
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
											
											<p></p>
											<p></p>

											<div id="jadwal">
												<table>
													<thead>
														<tr>
															<th>NO</th>
															<th>JAM</th>
															<th>STATUS</th>
															<th>BOOKING</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>07.00</td>
															<td>Booked by KOMSI</td>
															<td>BOOKING</td>
														</tr>
													</tbody>
												</table>
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
