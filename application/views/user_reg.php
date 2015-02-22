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
									<form action="<?= base_url().'register/member'; ?>" method="POST">
										<p>
											<label>First Name<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="first_name" placeholder="First Name" class="form-control">
										</p>
										<p>
											<label>Last Name<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="last_name" placeholder="Last Name" class="form-control">
										</p>
										<p>
											<label>ID Card<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="id_card" placeholder="First Name" class="form-control">
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
											<label>Date of Birth<span class="text-danger">*</span></label>
											<br>
											<input type="text" id="tanggal" name="ttl" placeholder="yyyy-mm-dd" class="form-control">
										</p>
										<p>
											<label>Team Name<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="team_name" placeholder="Team Name" class="form-control">
										</p>
										<p>
											<label>Address<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="address" placeholder="Address" class="form-control">
										</p>
										<p>
											<label>Mobile Phone<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="phone" placeholder="Mobile Phone" class="form-control">
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