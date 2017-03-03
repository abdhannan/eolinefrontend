<?php
include 'header.php';
?>


<div class="img-dinding" style="background-image: url('images/hannan.jpg');">
	<p class="change-dd-text"><i class="fa fa-image"></i><input type="file" name=""> Ubah latar belakang</p>
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
								<a href="/Eolineid/profil.php">PROFIL</a>
							</li>
							<li>
								<a href="/Eolineid/acara.php">ACARA <span class="badge">3</span> </a>
							</li>
							
							<li>
								<a class="nyala" href="/Eolineid/manajemen-user.php">ORGANISASI <span class="badge">3</span> </a>
							</li>
						</ul>
					</div><!-- /.menu-profile -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.primary-content -->
	</div>
</section>


<section id="manage-org-wrapper">
	<div class="container">
		<div class="primary-content">
			<div class="row">
				<div class="col-md-24">
					<header class="manage-org-heading">
						<h2 class="header-text">KELOLA ORGANISASI</h2>
					</header>
					<button class="btn btn-add-org btnaccent button">TAMBAH</button>
				</div><!-- /.col-md-24 -->

				<div class="col-md-12">
					<div class="manage-org-wrapper-details">
						<div class="img-org-details">
							<img src="images/hannan.jpg" class="img-responsive">
						</div>
						<div class="content-org-details">
							<h3 class="name-org-details">Hannan.id</h3>
							<p class="tag-org-details">Event, Css, php</p>
							<p class="tag-org-details">Surabaya dev, Eoline.id</p>
							<div class="clearfix"></div>
							<a href="/Eolineid/ubah-organisasi.php" class="btn btnaccent button">KELOLA</a>
							<button type="button" class="button btnhollow dark">UBAH</button>
						</div>
					</div>
				</div><!-- /.col-md-12 -->

				<div class="col-md-12">
					<div class="manage-org-wrapper-details">
						<div class="img-org-details">
							<img src="images/hannan.jpg" class="img-responsive">
						</div>
						<div class="content-org-details">
							<h3 class="name-org-details">Hannan.id</h3>
							<p class="tag-org-details">Event, Css, php</p>
							<p class="tag-org-details">Surabaya dev, Eoline.id</p>
							<div class="clearfix"></div>
							<button class="btn btnaccent button">KELOLA</button>
							<button type="button" class="button btnhollow dark">UBAH</button>
						</div>
					</div>
				</div><!-- /.col-md-12 -->

				<div class="col-md-12">
					<div class="manage-org-wrapper-details">
						<div class="img-org-details">
							<img src="images/hannan.jpg" class="img-responsive">
						</div>
						<div class="content-org-details">
							<h3 class="name-org-details">Hannan.id</h3>
							<p class="tag-org-details">Event, Css, php</p>
							<p class="tag-org-details">Surabaya dev, Eoline.id</p>
							<div class="clearfix"></div>
							<button class="btn btnaccent button">KELOLA</button>
							<button type="button" class="button btnhollow dark">UBAH</button>
						</div>
					</div>
				</div><!-- /.col-md-12 -->
			</div>
		</div><!-- /.primary-content -->
		<div class="gap-100"></div>
	</div>
</section>


<?php
include 'footer.php';
?>
