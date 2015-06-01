<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/development-bundle/themes/ui-lightness/ui.all.css');?>" />
    <script src="<?php echo base_url('assets/development-bundle/jquery-1.8.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/ui.core.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/ui.datepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/development-bundle/ui/i18n/ui.datepicker-id.js');?>"></script>
    <script type="text/javascript">
		//perhatikan, kuncinya adalah disini
        function fungsifilter(bln){
        	
           $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/filter_bln');?>",
                data:"id_bln="+bln,
                success: function(data){
                    $("#laporan").html(data); 
                    // alert('sukses vroh');    

                },
 
                error:function(XMLHttpRequest){
                    // alert(XMLHttpRequest.responseText);
                    alert('gagal');
                }
            })
 
        };
	</script>



<div class="page-top">
	<div class="container">
		<div class="row">
			<div class="member-header">
				<h2>Selamat datang <?php echo $this->session->userdata('akun');?></h2>
			</div>
			<div class="member-nav">
				<ul>
					<!-- <li><a href="<?= base_url('futsal/admin');?>">Home</a></li> -->
					<li><a href="<?= base_url('admin');?>">Transaksi</a></li>
					<li><a href="<?= base_url('admin/lapangan');?>">Lapangan</a></li>
					<li><a href="<?= base_url('admin/profile');?>">Edit Data Futsal</a></li>
					<li><a href="#" style="color: #008000;">Laporan</a></li>
					<li><a href="<?= base_url('admin/password');?>">Change Password</a></li>
					<li><a href="<?= base_url('login_ctr/logout');?>">Logout</a></li>
				</ul>
			</div>
			<div id="gerai-menu main" class="col-md-15" style="margin-left: 0px">
				<div class="gerai-detail">
					<div class="menu-list">
						<div class="section-title">
							<h2>
								<span>LAPORAN</span>
							</h2>
							<br>
							<div class="row">
								<div class="filter-menu">
									<?php
										$bln=array(0=>"Semua","Januari","Februari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
										$js='onChange="fungsifilter(this.value);"'; 
										echo form_dropdown('bulan',$bln,'',$js);
									?>
								</div>
								<br>
								<br>
								<p> </p>
									<div id="laporan">

									</div>
							</div>						
						</div>			
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
<div id="primary">
	<content id="site-content">
		<div class="content">
			<div class="page-main">
				<div class="page-main">
					<div class="entry-content">
						<div class="row">							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</content> 
</div>