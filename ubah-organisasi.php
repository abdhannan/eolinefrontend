<?php
include 'header.php';
?>
<div style="height: 100px;"></div>

<section id="new-organisation">
	<div class="container">
			
		<div class="heading-left-wrapper">
			<h2 class="text-left page-title header-text">Ubah Organisasi</h2>
			<div class="underline-header"></div>
			<select class="select-organisasi">
				<option value="hannan.id">Hannan.id</option>
				<option value="eoline.id">Eoline.id</option>
			</select>
		</div>
		
		<div class="cover-new-org">
			

			<div class="col-md-5">
				<div class="img-organisasi">
					<img src="images/logo@2x.png" class="img-responsive">
					<div class="btn-container">
						<button class="btn btn-block button btnaccent">UPLOAD LOGO</button>
					</div>
				</div>
			</div>

			<div class="col-md-19">
				<div class="form-org-wrapper">
					<form>
						<div class="form-group">
							<label for="name">Nama</label><br>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="description">Deskripsi</label><br>
							<textarea name="description" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="category">Kategori</label><br>
							<input type="text" name="category" class="form-control">
						</div>
						<div class="form-group">
							<label for="addres">Alamat</label><br>
							<input type="text" name="addres" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Email</label><br>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="telp">Nomor telepon</label><br>
							<input type="no" name="telp" class="form-control">
						</div>
						<div class="form-group">
						<label for="social">Sosial media</label>
							<ul class="list-inline list-social-square">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
						</div>
						<button class="btn btn-block btnaccent button">SIMPAN</button>
					</form>
				</div>
			</div>


		</div><!-- / new-cover-org -->
		<div class="gap-50"></div>
	</div>
</section>





<?php
include 'footer.php';
?>