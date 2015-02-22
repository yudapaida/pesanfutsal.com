<div class="top-content">
	<div class="home-top-content">
		<div class="search-form">
			<form action="#" method="get" id="search-top">
				<!-- <input type="hidden" name="action" value="restoran.list"> -->
					<span class="form-inputs">
						<?php
						$js=''; 
						echo form_dropdown('lokasi',$kota['kota'],'',$js);
						?>
					</span>	
			</form>
		</div>
	</div>
</div>
<p></p>
<div id="primary">
	<content id="site-content">
		<div class="content">
			<div class="page-top">
				<div class="container">
					<div id="breadcrumb">
						<p><a href="<?= base_url();?>">Home</a>
							<i class="fa fa-angle-right"></i>
							<span class="current">TEMPAT FUTSAL</span>
						</p>
					</div>
					<h1>TEMPAT FUTSAL</h1>
				</div>
			</div>
			<div class="page-main">
				<div class="container">
					<div class="entry-content">
						<div class="row">
							<div class="filter">
								<div id="filter-menu">
									<form action="#" method="GET">
										<div class="filter-menu">
											<?php
											$js=''; 
											echo form_dropdown('lokasi',$kota['kota'],'',$js);
											?>
										</div>
										<div class="filter-menu">
											<input type="text" class="form-control" name="keyword" placeholder="Cari Tempat Futsal">
										</div>
										<div class="filter-menu">
											<input type="button" class="form-control btn btn-success" id="cari" value="Search">
										</div>
									</form>
								</div>
							</div>

							<!-- List tempat futsal -->

							<?php 
								$i=0;
								$row='<div class="row">';
								foreach ($futsal as $item) {									

								if($i>=$i+3){echo $row;}else{ }	
							?>	
									<div class="gerai col-md-4 gerai-new masonry-brick" style="position: relative;">
										<div class="gerai-inner">
											<div class="gerai-header clearfix">
												<div class="gerai-info">
													<h2><a href="<?= base_url('page_ctr/tempat_futsal');?>"><?php echo $item['nama_futsal']; ?></a></h2>
												</div>
											</div>
											<div class="gerai-main">
												<div class="gerai-thumb coba">
													<a href="<?= base_url('page_ctr/tempat_futsal');?>">
														<img src="<?php echo base_url('assets/image/'.$item['gambar']);?>">
													</a>
												</div>
												<div class="gerai-action">
													<a href="<?= base_url('futsal/profile');?>?id=<?php echo $item['id_futsal']; ?>" class="btn btn-block btn-success">LIHAT JADWAL</a>
												</div>
											</div>
										</div>
									</div>
								<?php $i++; } ?>



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