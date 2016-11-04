<?php
	include('scripts/statsUqAuth.php');
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Posture Experts</title>
		<?php include('partials/header.php');?>
		<script src="libraries/Chart.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src='images/logo.png' /></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="nav-links scrolly" href="index.php">Home</a></li>
						<li><a class="nav-links" href="statistics.php">Statistics</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>	
		<div class="container push-up">
			<div class="row">
				<div class="col-md-12 center">
					<h2>Posture Experts Web Statistics</h2>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					
				</div>
			</div>
		</div>
		
		<div class="container push-up">
			<div class="row light-grey">
				<div class="col-md-6 col-sm-6">
					<canvas id="pie_social"></canvas>
				</div>
				<div class="col-md-6 col-sm-6">
					<canvas id="bar_visits"></canvas>
				</div>
			</div>
		</div>
		
		<div class="container push-up">	
			<div class="row light-grey">
				<div class="col-md-6 col-sm-6">
					<canvas id="pie_browser"></canvas>
				</div>
				<div class="col-md-6 col-sm-6">
					<canvas id="pie_mobile"></canvas>
				</div>
			</div>
		</div>
		
		<div class="container push-up">
			<div class="row light-grey">
				<div class="col-md-6 col-sm-6">
					<canvas id="bar_comments_emails"></canvas>
				</div>
				<div class="col-md-6 col-sm-6">
					<canvas id="pie_platform"></canvas>
				</div>
			</div>
		</div>
			
		<div class="container push-up">	
			<div class="row light-grey">
				<div class="col-md-12 col-sm-12 text-center">
					<canvas id="bar_hits_by_hour"></canvas>
				</div>
			</div>
		</div>
			
		<div class="container push-up">	
			<div class="row light-grey">
				<div class="col-md-12 col-sm-12 text-center">
					<canvas id="bar_comments_by_hour"></canvas>
				</div>
			</div>
		</div>	
			
		<div class="container push-up">	
			<div class="row light-grey">
				<div class="col-md-12 col-sm-12 text-center">
					<canvas id="bar_signups_by_hour"></canvas>
				</div>
			</div>
		</div>
		
		<div class="container push-up">	
			<div class="row light-grey">
				<div class="col-md-12 col-sm-12 text-center">
					<h4>Hits by IP Address</h4>
					<p></p>            
					<table class="table">
						<thead>
						  <tr>
							<th>IP Address</th>
							<th>Hits</th>
						  </tr>
						</thead>
						<tbody id="data-rows">
						</tbody>
				  </table>
				</div>
			</div>
		</div>
		
		<div class="container-fluid blue-padding">
		</div>
		
		<div class="container-fluid dark-blue"> <!-- footer -->
			<div class="row expand">
				<div class="container">
					<div class="row">
						<div class="col-md-4 left footer-social">
							<h4>1 Posture Way</h4>
							<h4>Brisbane, QLD 4000</h4>
							<h4>&#169;2016 Posture Experts</h4>
							<h4>E: info@postureexperts.com</h4>
							<h4>P: +61 7 1234 5678</h4>
							<h4>&#169;2016 Posture Experts</h4>
						</div>
						<div class="col-md-4 center">
						</div>
						<div class="col-md-4 footer-right footer-social">
							<h4>Connect with Us</h4>
							<a href="https://www.facebook.com/Posture-Experts-Informative-Product-Website-1691403827844547/"><i class="fa fa-facebook icon-social" aria-hidden="true"></i></a>
							<a href="https://twitter.com/postureexperts"><i class="fa fa-twitter icon-social" aria-hidden="true"></i></a>
							<a href="https://instagram.com/postureexperts1"><i class="fa fa-instagram icon-social" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/statistics.js"></script>
	</body>
</html>
