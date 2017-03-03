<?php
include 'header.php';
?>
<div class="gap-100"></div>

<section id="new-organisation">
	<div class="container">
		
		
		<div class="cover-new-org">
			<h2 class="text-left page-title header-text">Ubah Profil</h2>

			<div class="col-md-5">
				<div class="img-organisasi">
					<!--<img src="images/logo@2x.png" class="img-responsive"> -->
					<img id="imageup" class="img-responsive">
					<div class="btn-container">
					<a href="#" class="btn btn-block button btnaccent" type="button" onclick="document.getElementById('fileID').click(); return false;">UBAH GAMBAR</a> <input id="fileID" type="file" style="visibility: hidden; display: none;" />
						
					</div>
				</div>
				<!--<div id="image-holder">
					<img id="imageup">
				</div> -->
			</div>

			<div class="col-md-19">
				<div class="form-org-wrapper">
					<form>
						<div class="form-group">
							<label for="name">Nama</label><br>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="description">Jenis kelamin</label><br>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="category">Tempat lahir</label><br>
							<input type="text" name="category" class="form-control">
						</div>
						<div class="form-group">
							<label for="category">Tanggal lahir</label><br>
							<input type="date" name="tgl-lahir" class="form-control">
						</div>
						<div class="form-group">
							<label for="addres">Alamat</label><br>
							<input type="text" name="addres" class="form-control">
						</div>
						<div class="form-group">
							<label for="addres">Pekerjaan</label><br>
							<input type="text" name="addres" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Email</label><br>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="telp">Nomor telepon</label><br>
							<input type="no" name="telp" class="form-control">
						</div>
						<div class="form-group">
							<label for="new-pass">Kata sandi baru <i class="text-muted">* kosongkan jika tidak ingin diubah</i> </label><br>
							<input type="password" name="pass" class="form-control">
							<label for="new-pass-again">Ulangi kata sandi</label>
							<input type="password" name="pass" class="form-control">
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