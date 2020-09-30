<div id="login" class="section md-padding">

	<div class="container">

		<div class="row">

			<!-- Section header -->
			<div class="section-header text-center">
				<h2 class="title">Login</h2>
				<span><?php echo $this->session->flashdata('message'); ?></span>
				<span><?php echo $this->session->flashdata('aktivasi_dulu'); ?></span>
				
			</div>
			<!-- /Section header -->
			<div class=" col-md-3" >

			</div>

			<div class=" col-md-6">
			<form style="border: solid 1px; padding: 50px;  border-radius: 5px;" action="<?php echo base_url('login/login_aksi'); ?>"  method="post">
				<fieldset class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
				</fieldset>
				<fieldset class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
				</fieldset>
		
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
			</div>
		</div>
	</div>
</div>

