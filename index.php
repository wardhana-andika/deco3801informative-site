<?php
include('scripts/visitor.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Posture Experts</title>
	<?php include('partials/header.php');?>
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
					<li><a class="nav-links scrolly" href="#why">Why</a></li>
					<li><a class="nav-links scrolly" href="#overview">Overview</a></li>
					<li><a class="nav-links scrolly" href="#services">Services</a></li>
					<li><a class="nav-links scrolly" href="#signup">Signup</a></li>
					<li><a class="nav-links" href="statistics.php">Statistics</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>Posture Experts</h1> 
			<p>Workstation Setup Services</p>
			<p>Person Focused Assessment</p> 
		</div>
	</div>
	<div class="container expand" id="why">
		<div class="row">
			<div class="col-md-5">
				<h2 class="smaller-h2">The Objective</h2>
				<p class="plain-explain">The product is an online solution, that will greatly improve any current system of slides and assessment provided by Occupational Health and Safety departments around the world.</p>
				<p class="plain-explain">This product is suited for any organisation that requires additional workstation setup guidance for their staff.</p>
				<p class="plain-explain">The product will add value by providing a whole new design of the existing module done via a web application which will greatly improve interactivity with the users.</p>
			</div>
			<div class="col-md-7">
				<!-- image bg from http://www.pixeden.com/psd-mock-up-templates/cinema-display-psd-mockup -->
				<img class="promo-image" src="images/macattack.png">
			</div>
		</div>
	</div>
	<div class="container-fluid hero-video-row fix-margins" id="overview">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="center">Product Overview</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/9Nfb8Fxle-Y" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6">
						<p class="white-explain">Based on the previous report provided and prototype and from the initial contact that was made with the client a series of requirements were elicited for further consideration.</p>
						<p class="white-explain">The application makes use of data storage and cloud based technologies to deliver relevant workstation content to your users instantly.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="services">
		<div class="row">
			<div class="col-md-12">
				<h2>Our Services</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<p class="plain-explain">The web application needs to make use of single sign-on offered by an institution, for example the University of Queensland single sign-on.</p>
				<p class="plain-explain">This allows an easy relation between results and staff undertaking assessments and for key analytical data to be gathered about users.</p> 
				<ul class="fancy-list">
					<li class="fancy-list-option">Workstation Adjustment Checklist</li>
					<li class="fancy-list-option">Symptom Checker</li>
					<li class="fancy-list-option">Exercises and Stretches</li>
				</ul>
			</div>
			<div class="col-md-6">
				<!-- image bg from http://www.pixeden.com/psd-mock-up-templates/cinema-display-psd-mockup -->
				<img class="promo-image" src="images/bigmac.png">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="row push-in">
					<a href="images/work.png" data-lightbox="image-1" data-title="My caption"><img class="main-image" src="images/work.png" /></a>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p  class="desc-text" class="desc-text">We offer the simplest assessment guides for getting staff trained.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="row push-in">
					<a href="images/symptom.png" data-lightbox="image-1" data-title="My caption"><img class="main-image" src="images/symptom.png" /></a>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p class="desc-text">Symptoms at a glance for those experiences issues or pain related symptoms.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="row push-in">
					<a href="images/exer.png" data-lightbox="image-1" data-title="My caption"><img class="main-image" src="images/exer.png" /></a>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p class="desc-text">Let your staff find the right exercises in the quickest way possible.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid hero-video-row" id="signup">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3>We'd love to keep in touch</h3>
				<p class="email-note">Sign up to our e-mail newsletter and stay updated</p>
				<form action="#" method="POST" id="signUpForm">
					<input type="Name" class="form-control fancy-input" id="signUpEmail" placeholder="Stay up to date with our progress..">
					<button type="submit" class="btn btn-default">Sign Up</button>
				</form>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row push-up">
			<h2>Or Drop a Comment</h2>
			<form id="commentForm">
				<div class="form-group">
					<div class="col-md-4 col-sm-4">
						<label for="exampleInputEmail1">Name</label>
						<input type="Name" class="form-control" id="name" placeholder="Enter name">
						<br>
						<label for="InputEmail1">Email address</label>
						<input type="Name" class="form-control" id="InputEmail1" placeholder="Enter email">
					</div>
				</div>
				<div class="form-group">
					<div>
						<div class="col-md-8 col-sm-8">
							<label for="comment">Comments</label>
							<textarea class="form-control" id="comment" rows="6" placeholder="Comments..."></textarea>
							<br>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-4">
						<button type="submit" class="btn subby-butty">Submit</button>
					</div>
				</div> 
			</form>
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

	<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h2 class="modal-title dark-blue-text smaller-h2" id="modalLabel"></h2>
				</div>
				<div class="modal-body">
					<p id="modalContent" class="dark-blue-text"></p>
					<br /><br />
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/click-handler.js"></script>	
	<script src="js/lightbox.js"></script>	
	<script>
	lightbox.option({
		'resizeDuration': 200,
		'wrapAround': true,
		'maxWidth' : 1000
	});
	</script>
	<script type="text/javascript">

	$('.scrolly').click(function(event){
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 500);
		return false;
	});
	</script>
</body>
</html>