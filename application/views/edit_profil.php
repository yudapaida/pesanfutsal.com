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
		<div class="page-main">
			<div class="container">
				<div id="breadcrumb">
					<p><a href="<?= base_url();?>">Home</a>
						<i class="fa fa-angle-right"></i>
						<a href="<?= base_url('member');?>">Member Area</a>
						<i class="fa fa-angle-right"></i>
						<span class="current">Edit Profile</span>
					</p>
				</div>
				<div class="col-md-3 col-md-offset-2">
					<a href="<?= base_url('member/password'); ?>" class="btn btn-success btn-lg">CHANGE PASSWORD</a>
					<br><br>
				</div>
				
				<div class="entry-content">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="well" style="backgroud-color: white;">
								<h3 style="margin-top: 0px;">EDIT PROFILE</h3>
								<form action="<?= base_url('member/update_profile');?>" method="POST">
									<?php foreach ($profile as $row) { ?>
									<p>
										<label>First Name<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="first_name" placeholder="First Name" value="<?= $row['first']; ?>" class="form-control">
									</p>
									<p>
										<label>Last Name<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="last_name" placeholder="Last Name" value="<?= $row['last']; ?>" class="form-control">
									</p>
									<p>
										<label>ID Card<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="id_card" placeholder="First Name" value="<?= $row['card']; ?>" class="form-control">
									</p>
									<p>
										<label>Date of Birth<span class="text-danger">*</span></label>
										<br>
										<input type="text" id="tanggal" name="ttl" placeholder="yyyy-mm-dd" value="<?= $row['ttl']; ?>" class="form-control">
									</p>
									<p>
										<label>Team Name<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="team_name" placeholder="Team Name" value="<?= $row['team'];?>" class="form-control">
									</p>
									<p>
										<label>Address<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="address" placeholder="Address" value="<?= $row['address']; ?>" class="form-control">
									</p>
									<p>
										<label>Mobile Phone<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="phone" placeholder="Mobile Phone" value="<?= $row['phone']; ?>" class="form-control">
									</p>
									<?php } ?>
									<p><input type="submit" class="btn btn-lg btn-primary" value="SAVE"></p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>