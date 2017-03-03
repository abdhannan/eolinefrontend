<?php
include 'header.php';
?>


<section class="dashboard-wrapper">
	<div class="dashboard-img-banner">
		<img src="images/jumbo2@2x.png" class="img-responsive">
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


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Mendaftar', 'Akan hadir'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
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


		<div class="primary-content">
			<div class="row">
				<div class="col-md-18">
					<!--Div that will hold the pie chart-->
    				<div id="chart_div" style="width:100%; height:300"></div>
					<div id="piechart_3d" style="width:100%; height:300"></div>
				</div>
				<div class="col-md-6">
					<p>disini sebelahnya</p>
				</div>
			</div>
		</div>

	</div><!-- /.container -->
</section><!-- /.dashboard wrapper -->





<?php
include 'footer.php';
?>