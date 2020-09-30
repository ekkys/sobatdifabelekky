<div id="login" class="section md-padding">

	<div class="container">

		<div class="row">

			<!-- Section header -->
			<div class="section-header text-center">
				<h2 class="title">Registrasi</h2>
			</div>
			<!-- /Section header -->
			<div class=" col-md-3" >
			</div>

			<div class=" col-md-6">
				<form style="border: solid 1px; padding: 50px;  border-radius: 5px;" method="post" action="<?php echo base_url('login/register_aksi'); ?>">

					<fieldset class="form-group">
						<label for="exampleInputEmail1">Nama lengkap sesuai KTP</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" name="nama_lengkap">
					</fieldset>
					
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Alamat Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
						<small class="text-muted">Kami idak akan pernah membagikan email Anda dengan orang lain.</small>
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Ulangi Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="ulangi_password">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleSelect1">Jenis Kelamin</label>
						<select class="form-control" id="exampleSelect11" name="jk">
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</optio>
							</select>
						</fieldset>					
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleSelect1">Difabel/Non</label>
						<select class="form-control" id="exampleSelect11" name="difabelornot">
							<option value="difabel">Difabel</option>
							<option value="non-difabel">Non-Difabel</option>
						</select>
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleSelect1">Kategori Difabel</label>
						<select class="form-control" id="exampleSelect11" name="kategori_difabel">
							<option value="non-difabel">Non Difabel</option>
							<option value="daksa">Tuna Daksa</option>
							<option value="netra">Tuna Netra</option>
							<option value="rungu">Tuna Rungu</option>
							<option value="wicara">Tuna wicara</option>
							<option value="grahita">Tuna grahita</option>
						</select>
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleSelect1">Daftar sebagai </label>
						<select class="form-control" id="exampleSelect11" name="sebagai">
							<option value="pengguna_layanan">Pengguna Layanan</option>
							<option value="relawan">Relawan</option>
						</select>
					</fieldset>
					<button type="submit" class="btn-lg btn-primary" name="daftar">Daftar</button>
				</form>
			</div>

		</div>
	</div>
</div>

