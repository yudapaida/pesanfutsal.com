<style>
     .error{
      color:red;
     }
    </style>
<div id="primary">
	<content id="site-content">
		<div class="content">
			<div class="page-top">
				<div class="container">
					<div id="breadcrumb">
						<p><a href="<?= base_url();?>">Home</a>
							<i class="fa fa-angle-right"></i>
							<span class="current">LOGIN</span>
						</p>
					</div>
				</div>
			</div>
			<div class="page-main">
				<div class="container">
					<div class="entry-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<div class="well" style="backgroud-color: white;">
									<h3 style="margin-top: 0px;">LOGIN</h3>

									<div class="error"><strong><?= $this->session->flashdata('flashSuccess') ?></strong></div>

									<span class="help-block">Login dengan alamat email anda:</span>
									<form action="<?php echo base_url();?>login_ctr/masuk" method="POST">
										<p><input type="email" name="username" placeholder="Email" class="form-control" required></p>
										<p><input type="password" name="password" placeholder="Password" class="form-control" required></p>
										<div class="g-recaptcha" data-sitekey="6LcoQwETAAAAAGZ6IQ7R4Y3yJrQgDPVWFHsDxQpf"></div>
										<p></p>
										<p><input type="submit" class="btn btn-lg btn-primary" value="LOGIN"></p>
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