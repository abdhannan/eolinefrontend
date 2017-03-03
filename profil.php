<?php
include 'header.php';
?>


<div class="img-dinding" id="imageupd" style="background-image: url('images/hannan.jpg');">
	<!--<img id="imageup" class="img-responsive"> -->
	<p class="change-dd-text"><i class="fa fa-image"></i><input id="fileIDD" type="file" name=""> Ubah latar belakang</p>
</div>

<div class="gap-100"></div>
<div class="gap-100"></div>


<section id="profile-wrapper">
	<div class="container">
		<div class="primary-content">
			<div class="row">
				<div class="col-md-12">
					<div class="bio-wrapper">
						<div class="profile-picture">
							<img src="images/hannan.jpg" class="img-responsive img-thumbnail">
						</div>
						<div class="profile-name">
							<h2 class="text-muted text-base header-text">Abd Hannan</h2>
							<button class="btn button btnaccent">UBAH PROFIL</button>
						</div>
					</div>
				</div><!-- /col-md-12 -->
				<!--<div class="col-md-12">
					<div class="detail-profile-wrapper">
						<div class="profile-org">
							<h3 class="text-muted text-base header-text">Organisasi</h3>
							<p class="count-org text-center">
								3
							</p>
						</div>
						<div class="profile-acara">
							<h3 class="text-muted text-base text-center header-text">Acara</h3>
							<p class="count-org text-center">
								6
							</p>
						</div>
					</div><!-- /.detail-profile-wrapper -->
				<!--</div> -->
				<div class="clearfix gap-100"></div>
				<div class="col-md-24">
					<div class="menu-profile">
						<ul class="list-inline nav-left">
							<li>
								<a class="nyala" href="/Eolineid/profil.php">PROFIL</a>
							</li>
							<li>
								<a href="/Eolineid/acara.php">ACARA <span class="badge">3</span> </a>
							</li>
							
							<li>
								<a href="/Eolineid/manajemen-user.php">ORGANISASI <span class="badge">3</span> </a>
							</li>
						</ul>
					</div><!-- /.menu-profile -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.primary-content -->
	</div>
</section>

<section id="profil-wrapper">
	<div class="container">
		<div class="primary-content">
			<div class="row">
				<div class="col-md-24">
					<header class="manage-org-heading">
						<h2 class="header-text">PROFIL</h2>
					</header>
					<button class="btn btn-add-org btnaccent button">UBAH</button>
				</div><!-- /.col-md-24 -->			
				<div class="col-md-16">
					<div class="profil-details">
						<header class="profil-details-heading">
							<h3>Informasi Personal</h3>
						</header>
						<content>
							<label>Nama:</label>
							<p>Abd Hannan</p>
							<label>Jenis Kelamin</label>
							<p>Laki Laki</p>
							<label>Tempat Lahir</label>
							<p>Sampang</p>
							<label>Tanggal Lahir</label>
							<p>24 - 12 - 1995</p>
							<label>Status</label>
							<p>Lajang</p>
							<label>Agama</label>
							<p>Islam</p>
							<label>Pendidikan</label>
							<p>SMKN 1 Tambelangan</p>
							<label>Pekerjaan</label>
							<p>Web developer</p>
							<label></label>
						</content>
					</div>
				</div><!-- /.col-md-12 -->

				<div class="col-md-7">
					<div class="profil-details">
						<header class="profil-details-heading">
							<h3>Informasi Kontak</h3>
						</header>
						<content>
							<label>Alamat</label>
							<p>Jl. Tambelangan sampang, 36829</p>
							<label>No. Handphone/Telephone</label>
							<p>+6287705694938</p>
							<label>Email</label>
							<p>hannan.ambisius@gmail.com</p>
							<label>Sosial Media</label>
							<ul class="list-inline list-sosial">
								<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
							</ul>
						</content>
					</div>
				</div>
			</div>
		</div><!-- /.primary-content -->
		<div class="gap-100"></div>
	</div>
</section>



<?php
include 'footer.php';
?>