<div id="primary">
	<content id="site-content">		
		<div class="page-main">
			<div class="container">
				<div id="breadcrumb">
					<p><a href="<?= base_url();?>">Home</a>
						<i class="fa fa-angle-right"></i>
						<a href="<?= base_url('member');?>">Member Area</a>
						<i class="fa fa-angle-right"></i>
						<a href="<?= base_url('member/profile');?>">Profile</a>
						<i class="fa fa-angle-right"></i>
						<span class="current">Change Password</span>
					</p>
				</div>
							<?php if (isset($alert)) {
				?>
				<div class="alert-container">
					<div id="alert" class="alert alert-danger" class="col-md-3">
						<button type="button" class="close" data-dismiss="alert">X
							<h4><p><?= $alert?></p></h4>
						</button>
					</div>
				</div>
				<?php } ?>
				<!-- <div class="alert-container">
					<div id="alert" class="alert alert-danger" class="col-md-3">
						<button type="button" class="close" data-dismiss="alert">X
							<h4><p>Coba</p></h4>
						</button>
					</div>
				</div> -->
				<div class="entry-content">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="well" style="backgroud-color: white;">
								<h3 style="margin-top: 0px;">CHANGE PASSWORD</h3>
								<form action="<?= base_url('member/update_password');?>" method="POST">
									<?php foreach ($user as $row) { ?>
									<p>
										<label>Username<span class="text-danger">*</span></label>
										<br>
										<input type="text" name="username" placeholder="First Name" value="<?= $row['username']; ?>" class="form-control" readonly>
									</p>
									<p>
										<label>Current Password<span class="text-danger">*</span></label>
										<br>
										<input type="password" name="pass_lama" placeholder="Password Lama" class="form-control">
									</p>
									<p>
										<label>New Password<span class="text-danger">*</span></label>
										<br>
										<input type="password" name="pass_baru" placeholder="Password Baru" class="form-control">
									</p>
									<p>
										<label>Re-Type New Password<span class="text-danger">*</span></label>
										<br>
										<input type="password" name="pass_baru2" placeholder="Password Baru" class="form-control">
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