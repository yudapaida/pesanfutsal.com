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
						<p><a href="<?= base_url('superadmin');?>">Home</a>
						<i class="fa fa-angle-right"></i>
						<span class="current">Edit Data Futsal</span>
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
									<h3 style="margin-top: 0px;">Edit Data Member</h3>
									<form action="<?= base_url('superadmin/update_member'); ?>" method="POST" enctype="multipart/form-data">
										<?php foreach ($data as $row) { ?>
										<p>
											<label>Id<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="id_member" placeholder="" class="form-control" value="<?= $row['id_member'];?>" readonly>
										</p>
										<p>
											<label>First Name<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?= $row['first_name'];?>">
										</p>
										<p>
											<label>Last Name<span class="text-danger">*</span></label>
											<br>											
											<input input="text" name="last_name" rows="3" class="form-control" placeholder="Alamat" value="<?= $row['last_name'];?>">
										</p>										
										<p>
											<label>Id Card<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="id_card" placeholder="Id Card" class="form-control" value="<?= $row['id_card'];?>">
										</p>
										<p>
											<label>Date of Birth<span class="text-danger">*</span></label>
											<br>
											<input type="text" id="tanggal" name="ttl" placeholder="yyyy-mm-dd" class="form-control" required value="<?= $row['ttl']; ?>">
										</p>
										<p>
											<label>Team Name<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="team_name" placeholder="Team Name" class="form-control" value="<?= $row['team_name']; ?>">
										</p>
										<p>
											<label>Address<span class="text-danger">*</span></label>
											<br>
											<!-- <input type="text" name="username" placeholder="Email" class="form-control"> -->
											<textarea input="text" name="address" rows="3" class="form-control" placeholder="Address"><?= $row['address']; ?></textarea>
										</p>
										<p>
											<label>Phone<span class="text-danger">*</span></label>
											<br>
											<input type="number" name="phone" placeholder="Phone" class="form-control" value="<?= $row['phone']; ?>">
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
		</div>
	</content>
</div>