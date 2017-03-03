<?php
include 'header.php';
?>


<section class="dashboard-wrapper">
	<div class="dashboard-img-banner">
		<img src="images/banner.jpg" class="img-responsive">
		<!--<div class="button-wrapper">
			<input type="file" class="button btnaccent" name="banner-image">
		</div>-->
	</div><!-- / dashboard-img-banner -->

	<div class="container">
		<div class="primary-content">
			<div class="row">
				<div class="col-md-24">
					<div class="heading-dashboard">
						<h1>SEMINAR NASIONAL</h1>
						<p>Lorem ipsum dolor sit amite sit amite dolor sit sitan, Lorem ipsum dolor sit amite sit amite dolor sit sitan</p>
					</div>
				</div><!-- / col 24 -->
				<div class="col-md-24">
					<div class="menu-profile">
						<ul class="list-inline nav-left">
							<li>
								<a class="nyala" href="/Eolineid/dashboard.php">DASHBOARD</a>
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
			</div>
		</div><!-- /primary-content -->
		<div class="gap-30"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Mendaftar', 'Akan hadir'],
          ['Jan',  1000,      400],
          ['Feb',  1170,      460],
          ['Mar',  660,       1120],
          ['Appr',  1030,      540]
        ]);

        var options = {
          title: 'Peserta yang mendaftar',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>


<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
</script>

<script type="text/javascript">
	google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMultSeries);

function drawMultSeries() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Motivation Level');
      data.addColumn('number', 'Energy Level');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1, .25],
        [{v: [9, 0, 0], f: '9 am'}, 2, .5],
        [{v: [10, 0, 0], f:'10 am'}, 3, 1],
        [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
        [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
        [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
        [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
        [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
        [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
        [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
      ]);

      var options = {
        title: 'Statistik',
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('bar_chart'));

      chart.draw(data, options);
    }
</script>

		<div class="primary-content">
			<div class="row">
				<div class="bg-row">
					<div class="col-md-18">
						<!--Div that will hold the pie chart-->
	    				<div id="chart_div" style="width:100%; height:300"></div>
						<div id="piechart_3d" style="width:100%; height:300"></div>
					</div>
					<div class="col-md-6">
						<div class="right-number-dashboard">
							<h1>473</h1>
							<span>
								Peserta yang terdaftar
							</span>
						</div>

						<div class="right-number-dashboard">
							<h1>273</h1>
							<span>
								Peserta yang akan hadir
							</span>
						</div>

						<div class="right-number-dashboard">
							<h1>9988</h1>
							<span>
								Pengguna berkunjung ke halaman acara
							</span>
						</div>

						<div class="right-number-dashboard">
							<h1>373</h1>
							<span>
								Peserta membagikan ke sosial media
							</span>
						</div>

						<div class="">
							<div id="bar_chart" style="width: 100%; height: 150px; margin-top: 10px;"></div>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.primary content -->

		<div class="gap-50"></div>
		<div class="gap100"></div>
		<div class="primary-content">
			<div class="row">
				<div class="bg-row">
					<div class="col-md-18">
						<div class="white-bg">
							<main class="deskripsi-dashboard">
								<h2>Deskripsi</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
							</main>
						</div>
					</div><!-- /.col-md-18 -->

					<div class="col-md-6">
						<div class="right-deskripsi waktu-pl">
							<main class="icon">
								<i class="fa fa-ticket"></i>
							</main>
							<main class="icon-desk">
								<span>Waktu pelaksanaan</span>
								<p>05 Januari 2017, 08:00</p>
								<p>06 Januari 2017, 16:00</p>
							</main>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- /.container -->
</section><!-- /.dashboard wrapper -->





<?php
include 'footer.php';
?>